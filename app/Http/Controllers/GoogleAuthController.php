<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    //callback authentication of google
    public function callbackGoogle()
    {
        try{
            $google_user =Socialite::driver('google')->user();
         //if user exist
            $user=User::where('google_id',$google_user->getId())->first();
          //if user doesnt exist
            if(!$user){
                $new_user=User::create([
                    'name'=>$google_user->getName(),
                    'email'=>$google_user->getEmail(),
                    //associate google with user
                    'google_id'=>$google_user->getId()
                ]);
                Auth::login($new_user);
                return redirect()->intended('dashboard');

            }
            //if  user exists
            else{
                Auth::login($user);
                return redirect()->intended('dashboard');
            }

        }catch(\Throwable $th){
            dd('Something went wrong!'.$th->getMessage());

        }
    }
}
