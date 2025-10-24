<?php

namespace App\Http\Controllers;

use App\Models\card_skin;
use App\Models\purchased_skin;
use Illuminate\Support\Facades\Auth;

class card_skinController extends Controller
{
    public function index()
    {
        $card_skins = card_skin::all();
        if (Auth::check()) {
            $purchased_skins = purchased_skin::where([['userId','=',Auth::user()->id]])->get();
        }

        if (Auth::check()) {
            return view('store', ['card_skins' => $card_skins, 'purchased_skins' => $purchased_skins]);
        }

        return view('store', ['card_skins' => $card_skins]);
    }
}
