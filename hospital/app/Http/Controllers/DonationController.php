<?php
namespace App\Http\Controllers;

use App\Models\Donate;

// use App\Http\Controllers\Controller;
// use App\Utils\Drive;
 use Illuminate\Http\Request;
// use DirectoryIterator;
// use RecursiveDirectoryIterator;
// use RecursiveIteratorIterator;
// use ZipArchive;

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
        $donate = new donate;

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

        $donate -> donateMoney = $request -> donateMoney;

        $donate -> save();

        return redirect() -> back() -> with ('message', 'Donation Form Added Successfully');
    }

    public function showDonations()
    {
        $donate = donate::all();
        return view('admin.show_donations',compact('donate'));
    }
























    // public function donationForm( Request $request ){
    //     $info = [];
    //     return view( 'user.donate', $info );
    // }

    // public function donationSuccess( Request $request ){
    //     dump( "Donation Success" );
    //     dd( $request->all() );
    // }

    // public function donationCancelled( Request $request ){
    //     dump( "Donation Cancelled" );
    //     dd( $request->all() );
    // }

    // public function donationNotify( Request $request ){
    //     dump( "Donation Notify" );
    //     dd( $request->all() );
    // }
}