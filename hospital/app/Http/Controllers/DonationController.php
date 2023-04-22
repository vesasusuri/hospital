<?php
namespace App\Http\Controllers;

use App\Models\Donate;
use App\Models\Product;

use Illuminate\Http\Request;

class DonationController extends Controller{

    public function addDonation()
    {
        return view('admin.add-donation');
    }

    
    public function donate()
    {
        $donate = donate::all();
        return view('user.donate',compact('donate'));
    }

    public function uploadDonations(Request $request){
        $donate = new product;

        $image = $request -> image;

        $imagename = time().'.'.$image -> getClientoriginalExtension();

        $request -> image -> move('donateimage' , $imagename);

        $donate -> image = $imagename;

        $donate -> subheading = $request -> subheading;

        $donate -> heading = $request -> heading;

        $donate -> autor = $request -> autor;

        $donate -> description = $request -> description;

        $donate -> raisedMoney = $request -> raisedMoney;

        $donate -> goalMoney = $request -> goalMoney;

        $donate -> price = $request -> price;

        $donate -> save();

        return redirect() -> back() -> with ('message', 'Donation Form Added Successfully');
    }

    public function showDonations()
    {
        $donate = donate::all();
        return view('admin.show_donations',compact('donate'));
    }

    public function processForm(Request $request)
    {
     $amount = $request->input('amount');
    }

    public function checkoutForm(Request $request)
    {
      return view('user.checkout-donate');
    } 

}