<?php

    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Auth;

    use Illuminate\Http\Request;

    use App\Models\User;

    use App\Models\Doctor;

    use App\Models\Appointment;
    
    use App\Models\News;

    use App\Models\Visits;

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
                return view('admin.home');
            }
            else if(Auth::user()->usertype=='1'){
                return view('doctor.home');
            }
            else{
                return view('auth.login');
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

        $news = News::all();

        return view('user.news', compact('news'));
    }

    public function contactus(){
        return view('user.contact-us');
    }

    public function editAppoints(Request $request, $id){

        $data = appointment::find($id);

        $data -> date = $request -> date;

        $data -> message = $request -> message;

        $data -> doctor = $request -> doctor;

        $data -> save();

        return redirect()->back()->with('message', 'Appointment Details Updates Successfully');
    }

    public function updateAppointss($id){

        $data = appointment::find($id);

        return view('user.update-appoints',compact('data'));
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