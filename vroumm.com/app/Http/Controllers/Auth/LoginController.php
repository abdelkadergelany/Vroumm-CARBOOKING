<?php

namespace App\Http\Controllers\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use App\SocialProvider;
use App\User;
use App\UserInfo;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\carBooking;
use App\Notifications\SMSNotification;
use Illuminate\Notifications\Notifiable;






class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
     public function redirectToProvider($provider)
     {


        /*to send email
        $data = array( "title" => "Welcome message from Vroumm","message" => "Hello Michele we are happy to welocme you on our system" );
        Mail::to('michelendam@gmail.com')->send(new carBooking($data));

        dd('stop');

        */
        /*to send sms*/
      // $user = new User();
      // $user->phone_number= '+85516393555';   
      // $user->notify(new SMSNotification());
        /*end to send sms */

        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {  // dd("aly");
    $userProvided = Socialite::driver($provider)->user();
    $socialUser = SocialProvider::where('socialId',$userProvided->getId())->first();
    $user = null; 
        //check if we have logged provider

    if(!$socialUser)
    {
            //create a new user and provider
        $dated = now();
            //dd($dated);
        $user = User::firstOrCreate(
            ['email' => $userProvided->getEmail()],
            ['name' => $userProvided->getName()],

        );
        SocialProvider::create(
            ['socialId' => $userProvided->getId(), 'provider' => $provider,'userId' => $user->id]
        );

        $userVerification = User::find($user->id);
        $userVerification->email_verified_at = $dated;
        $userVerification->save();

        UserInfo::create(
            ['profilepict' => $userProvided->getAvatar(), 'userId' => $user->id]
        );
    }


    $user = User::where('email',$userProvided->getEmail())->first();

    Auth::login($user);
    return redirect('/home');





}


}
