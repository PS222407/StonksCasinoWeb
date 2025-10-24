<?php

namespace App\Http\Controllers;

use App\Models\CardSkin;
use App\Models\PurchasedSkin;
use Illuminate\Support\Facades\Auth;

class CardSkinController extends Controller
{
    public function index()
    {
        $cardSkins = CardSkin::all();

        if (Auth::check()) {
            $purchasedSkins = PurchasedSkin::where([['userId','=',Auth::user()->id]])->get();

            return view('store', ['card_skins' => $cardSkins, 'purchased_skins' => $purchasedSkins]);
        }

        return view('store', ['card_skins' => $cardSkins]);
    }
}
