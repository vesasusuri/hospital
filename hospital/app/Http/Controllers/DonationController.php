<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Utils\Drive;
use Illuminate\Http\Request;
use DirectoryIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ZipArchive;

class DonationController extends Controller{

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