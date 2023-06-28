<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\card_skin;
use App\Models\purchased_skin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class card_skinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $card_skins = card_skin::all();
        if (Auth::check()) {
            $purchased_skins = purchased_skin::where([['userId','=',Auth::user()->id]])->get();

        }
       
        if (Auth::check()) {
            return view('store', ['card_skins' => $card_skins, 'purchased_skins' => $purchased_skins]);
        }
        else {
            return view('store', ['card_skins' => $card_skins]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
