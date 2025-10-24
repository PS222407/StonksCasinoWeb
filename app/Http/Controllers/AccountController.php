<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        $users = User::all();

        if(Auth::user()->role == 'adminestrator')
        {
            return view('managementModule',['users' => $users]);
        }
        else
        {
            return view('index');
        }
    }

    public function edit($id)
    {
        $user = User::where('id' , $id)->first();
        $transactions = transaction::where('userid', $id)->get()->sortByDesc('timestamp');

        return view('userProfile', ['user' => $user, 'transactions' => $transactions]);
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id' , $id)->first();

        if ($user->banned == false) {
            $update = [
                'banned' => true,
            ];
            User::where('id', $id)->update($update);
        }
        else{
            $update = [
                'banned' => false,
            ];
            User::where('id', $id)->update($update);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('manegement');
    }
}
