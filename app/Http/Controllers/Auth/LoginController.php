<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;

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
    /////protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

     ///   $training = Event::orderBy('weight', 'asc')->get();
       /// view()->share('training', $training);
        $this->middleware('guest')->except('logout');
    }
    public function redirectTo()
    {

        // User role
        //$role = Auth::user()->role->name;

        $user = auth()->user();
        $role = $user->type;

        // Check user role
        switch ($role) {
            case 'user':
                return 'home';
                break;
            case 'whef':
                return 'patient_dashboard';
                break;
            case 'super_admin':
                return 'admin_dashboard';
                break;

            default:
                return '/login';
                break;
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}