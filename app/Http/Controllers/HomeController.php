<?php

namespace App\Http\Controllers;

use App\User; 
use App\Messages;
use App\Support;
use App\BloodRequest;
use App\Camp;

use Request;
use Illuminate\Support\Facades\Input;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'home' ,'donors' , 'camp' , 'donorProfile' , 'donorMessage' , 'support' , 'api' , 'storeSupport' ,'terms' ] ]);
    }

  public function home()
  {
            $users = User::where('is_donor' , '1')->take(5)->get();
              return view('welcome',compact('users'));
  }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $conditions = [ 'district' =>  Auth::user()->district , 'state' =>  Auth::user()->state ];
        $requests = BloodRequest::where($conditions)->get();

        $messages = Messages::where('receiver',Auth::user()->id)->get();
        return view('home',compact('messages' , 'requests'));
    }

    public function donors()
    {
        $input = Request::all();
        $conditions = [ 'is_donor' => '1' ];

        if(isset($input['group']))        $conditions = array_add($conditions, 'group', $input['group']);
        if(isset($input['city']))         $conditions = array_add($conditions, 'city', $input['city']);
        if(isset($input['state']))        $conditions = array_add($conditions, 'state', $input['state']);
        if(isset($input['district']))        $conditions = array_add($conditions, 'district', $input['district']);

         $users = User::where($conditions)->paginate(9);
        return view('donors', compact('users'));
    }

    public function donorProfile($id)
    {
        $donor = User::findOrFail($id);
        return view('donor-profile',compact('donor'));
    }

    public function donorMessage()
    {
        $request = Request::all();

        $user = User::findOrFail($request['receiver']);

        $ch = curl_init();
        $curlConfig = array(
            CURLOPT_URL            => "http://smshorizon.co.in/api/sendsms.php",
            CURLOPT_POST           => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS     => array(
                'user' => 'jhon1122',
                'apikey' => 'rCr6HvCkcM3iHyBIwvOT',
                'mobile' => $user->phone,
                'message' => 'You have a new message at blood bank',
                'senderid' => 'xxyy',
                'type' => 'txt'
            )
        );
        curl_setopt_array($ch, $curlConfig);
        $result = curl_exec($ch);
        curl_close($ch);



        Messages::create($request);
        Flashy::message('Message Sent','');
        return redirect('donor/'.$request['receiver']);
    }

    public function api()
    {
            return view('api');
    }

    public function camp()
    {
        $camps = Camp::all();    
        return view('camp', compact('camps'));
    }
    public function newCamp()
    {   
        return view('new-camp');
    }
    public function storeCamp()
    {
        $input = Request::all();
        Camp::create($input);
        Flashy::message('Camp details has been added.','');
        return redirect('camp');
    }
        
    public function message($id)
    {
        $message = Messages::findOrFail($id);
        if(Auth::user()->id != $message->receiver) return redirect('home');
                return view('message', compact('message'));
    }

    public function changePass()
    {
        return view('change-password');
    }

    public function updatePass()
    {
        $request = Request::all();
        $user = User::findOrFail(Auth::user()->id);

        $data['password'] = bcrypt($request['password']);

        $user->update($data);

        Flashy::message('Password changed','');
        return redirect('home');
    }
    public function settings()
    {
        $user = Auth::user();
        return view('settings', compact('user'));
    }

    public function updateUser()
    {
        $request = Request::all();
        $user = User::findOrFail(Auth::user()->id);
        $user->update($request);

        Flashy::message('Setings updated.','');
        return redirect('settings');
        
    }


    public function support()
    {
        $msg = Input::get('msg');
        if($msg == 1)
                Flashy::message('Message sent.','');

                return view('support');
    }

    public function storeSupport()
    {
                Flashy::message('Message sent.','');
        $request = Request::all();
        Support::create($request);
      return redirect('support');
    }

    public function terms()
    {
                return view('terms');
    }

    public function reply()
     {
        Flashy::message('Message sent','');
        return redirect('home');
     }

}
