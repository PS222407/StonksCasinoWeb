<?php

namespace App\Http\Controllers;

use App\Models\CardSkin;
use App\Models\PurchasedSkin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Rules\CheckBanned;
use App\Rules\CheckPassword;
use App\Rules\Niels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $tokens = $request->tokens;

        $request->validate([
            'tokens' => ['required', 'integer', 'between:1,1000000', new CheckBanned()],
        ]);

        $update = [
            'token' => $tokens + Auth::user()->token,
        ];

        Transaction::create([
            'userid' => Auth::user()->id,
            'tokens' => $tokens,
            'sender' => 'deposit or debit, Website',
            'tokensBefore' => Auth::user()->token,
            'tokensAfter' => $tokens + Auth::user()->token,
        ]);

        User::find(Auth::user()->id)->update($update);

        return redirect()->route('account');
    }

    public function changeusername(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', new Niels()],
        ]);

        User::find(Auth::user()->id)->update([
            'username' => $request->username,
        ]);

        return redirect()->route('account');
    }

    public function changeemail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $update = [
            'email' => $request->email,
        ];

        User::find(Auth::user()->id)->update($update);

        Auth::user()->email_verified_at = null;
        Auth::user()->update();

        return redirect()->route('account');
    }

    public function changepassword(Request $request)
    {
        $messages = [
            'newpassword.same' => 'De wachtwoorden komen niet overeen',
            'newpassword.min:8' => 'Het wachtwoord dient minimaal 8 karakters te bevatten.',
        ];
        $request->validate([
            'Wachtwoord' => ['required', new CheckPassword()],
            'newpassword' => ['required', 'string', 'min:8', 'same:password_confirmation'],
        ], $messages);

        $update = [
            'password' => Hash::make($request->newpassword),
        ];

        User::find(Auth::user()->id)->update($update);

        return redirect()->route('account');
    }

    public function selectcard(Request $request)
    {
        $update = [
            'selected_cardskin' => $request->cardskin,
        ];

        User::find(Auth::user()->id)->update($update);

        return redirect()->route('winkel');
    }

    public function buycard(Request $request)
    {
        $price = CardSkin::where('id', $request->buycard1)->first();

        if (Auth::user()->token < $price->price) {
            return back()->withErrors(['U heeft niet genoeg geld om de cardskin te kopen'])->withInput();
        }

        $tokens = $price->price;
        $update = [
            'token' => Auth::user()->token - $tokens,
        ];

        Transaction::create([
            'userid' => Auth::user()->id,
            'tokens' => -$tokens,
            'sender' => 'buy cardskin, Website',
            'tokensBefore' => Auth::user()->token,
            'tokensAfter' => Auth::user()->token - $tokens,
        ]);

        User::find(Auth::user()->id)->update($update);

        PurchasedSkin::create([
            'skinId' => $request->buycard1,
            'userId' => Auth::user()->id,
        ]);

        return back();
    }
}
