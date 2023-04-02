<?php

    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Auth;

    use Illuminate\Http\Request;

    use App\Models\User;

    use App\Models\Doctor;

    use App\Models\Appointment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  

    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else if(Auth::user()->usertype=='2'){
                $doctor = doctor::all();
                return view('user.news',compact('doctor'));
            }
            else{
                return view('admin.home');
            } 
        }

        else{
            return redirect()->back(); 
        }
    }
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }

        else{
            $doctor = doctor::all();
            return view('user.home',compact('doctor'));
        }
    }
    public function aboutus(){
        return view('user.aboutus');
    }

    public function doctor(){
        return view('user.doctor');
    }

    public function news(){
        return view('user.news');
    }

    public function contactus(){
        return view('user.contact-us');
    }
  
    public function appointment(Request $request){
        $data = new appointment;

        $data -> name = $request -> name;

        $data -> email = $request ->email;

        $data -> date = $request -> date;

        $data -> phone = $request ->number;

        $data -> message = $request -> message;

        $data -> doctor = $request -> doctor;

        $data -> status = 'In Progress';

        if(Auth::id()){
         $data -> user_id = Auth::user() -> id;
        }

        $data -> save();

        return redirect()->back() -> with ('message', 'Appointment Request Successful. We will contact with you soon');
    }

    public function myappointment(){
        if(Auth::id()){

            $userid=Auth::user()->id;

            $appoint = appointment :: where('user_id',$userid)->get();

            return view('user.my_appointment' , compact('appoint'));
        }

        else {
            return redirect()-> back();
        }
    }

    public function cancel_appoint($id){
        $data = appointment::find($id);

        $data -> delete();

        return redirect()->back();
    }
}
