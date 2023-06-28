<?php

namespace App\Http\Controllers;

use App\Models\card_skin;
use App\Models\purchased_skin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\transaction;
use App\Rules\CheckBanned;
use App\Rules\CheckPassword;
use App\Rules\Niels;
use App\Rules\Shop;
use Error;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function edit() {

   }

   public function update(Request $request){

      $tokens =  $request->tokens;
      
      $update = $request->validate([
         'tokens' => ['required', 'integer' , 'between:1,1000000', new CheckBanned],
//         'g-recaptcha-response' => 'required|captcha',
      ]);

      $update = [
          'token' => $tokens + Auth::user()->token,
      ];
     
      
      transaction::create([
         'userid' => Auth::user()->id,
         'tokens' => $tokens,
         'sender' => 'deposit or debit, Website',
         'tokensBefore' => Auth::user()->token,
         'tokensAfter' => $tokens + Auth::user()->token,

         
     ]);
     User::find(Auth::user()->id)->update($update);
      return redirect()->route('account');
   }
   public function changeusername(Request $request){

     
      
      $update = $request->validate([
         'username' => ['required', 'string', 'max:255', new Niels],
         
      ]);

      $update = [
          'username' => $request->username,
      ];
     
 
      User::find(Auth::user()->id)->update($update);
  
 
       
      return redirect()->route('account');
   }
   
   public function changeemail(Request $request){

     
      
      $update = $request->validate([
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

   public function changepassword(Request $request){

     
      $messages = [
         'newpassword.same' => 'De wachtwoorden komen niet overeen',
         'newpassword.min:8' => 'Het wachtwoord dient minimaal 8 karakters te bevatten.',     

         
       ];
      $update = $request->validate([
         'Wachtwoord' => ['required', new CheckPassword],
         'newpassword' => ['required', 'string', 'min:8', 'same:password_confirmation'],
         
         
      ], $messages);

      $update = [
          'password' => Hash::make($request->newpassword) ,
          
          
      ];
     

      User::find(Auth::user()->id)->update($update);
       
      return redirect()->route('account');
   }
   public function selectcard(Request $request){
      $update = [
         'selected_cardskin' => $request->cardskin ,
         
         
     ];
    
     
     User::find(Auth::user()->id)->update($update);
     return redirect()->route('winkel');
   }
   public function buycard(Request $request){
      $prijs = card_skin::where([['id','=',$request->buycard1]])->first();
      if (Auth::user()->token >= $prijs->price) {
         # code...
      }
      else{
         
         return back()->withErrors(["U heeft niet genoeg geld om de cardskin te kopen"])->withInput();
      }
      $tokens =   $prijs->price;
      $update = [
          'token' => Auth::user()->token - $tokens,
      ];
     
      
      transaction::create([
         'userid' => Auth::user()->id,
         'tokens' => -$tokens,
         'sender' => 'buy cardskin, Website',
         'tokensBefore' => Auth::user()->token,
         'tokensAfter' => Auth::user()->token - $tokens,

         
     ]);
     User::find(Auth::user()->id)->update($update);

      purchased_skin::create([
         'skinId' => $request->buycard1,
         'userId' => Auth::user()->id,
           
     ]);
     return back();
   }
   
}
