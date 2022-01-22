<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{


    public function sendmail()
    {
         $dat=["name"=>"suman"];
         $user['to']='suman.krgr8@gmail.com';
         Mail::send('mail',$dat,function($msg) use($user){
             $msg->to($user['to']);
             $msg->subject('Testing');
         });
        // return redirect()->route('home')->with('msg','Insert Success');
    }    

    
}
