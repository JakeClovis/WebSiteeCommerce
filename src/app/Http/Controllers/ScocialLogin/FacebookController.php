<?php
namespace App\Http\Controllers\ScocialLogin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Register\Controllers\RegisterController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Session;
class FacebookController extends Controller
{

 use AuthenticatesUsers;
/**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
      echo "ici";
        return Socialite::driver('facebook')->redirect();

    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
       try{
           $socialUser = Socialite::driver('facebook')->user();
        }catch (\Exception $e){

             return redirect('/login');

        }
    $user = User::where('facebook_id',$socialUser->getId())->first();
        if(!$user)
          $user = User::create([
               'facebook_id' => $socialUser->getId(),
               'name' => $socialUser->getName(), //$socialUser-getNickname(),
               'email' => $socialUser->getEmail(),
               'password' => bcrypt("facebook"),
               'verified'=> 1,
               'email_token'=> null,
               //'avatar' =>$socialUser->getAvatar(),
               //'avatar' => "".$socialUser->getAvatar()."",
             ]);

          $this->guard()->login($user);
          Session::flash('message', 'Successfully signed in with Facebook.');
     return redirect()->to('/home');
    }
}
