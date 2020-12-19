<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
class registerController extends Controller
{
    public function index(){
    	return view('register.index');
    }

    public function create(Request $req){
        if($req->hasFile('myimg')){

        	$file = $req->file('myimg');
        	/*echo "File Name: ".$file->getClientOriginalName()."<br/>";
        	echo "File Extension: ".$file->getClientOriginalExtension()."<br/>";
        	echo "File Size: ".$file->getSize();*/

        	if($file->move('upload', $file->getClientOriginalName())){
        		
                $user = new User();
                $user->name         = $req->name;
                $user->username     = $req->username;
                $user->password     = $req->password;
                $user->email        = $req->email;
                $user->contactno    = $req->contactno;
                $user->type         = $req->type;
                $user->created_at   = $req->created_at;
                $user->photo        = $file->getClientOriginalName();

                if($user->save()){
                    $last_id = $user->id;
                    $patient = new Patient();
                    $patient->dob              = $req->dob;
                    $patient->address          = $req->address;
                    $patient->bloodgroup       = $req->bloodgroup;
                    $patient->weight           = $req->weight;
                    $patient->bmi              = $req->bmi;
                    $patient->bloodpressure    = $req->bloodpressure;
                    $patient->cal              = $req->cal;
                    $patient->created_at       = $req->created_at;
                    $patient->user_id          = $last_id;
                    if($patient->save()){
                        return redirect()->route('login.index');
                    }
                    
                }else{
                    return back();
                }

        	}else{
        		return back();
        	}
        }
    
    	return view('register.index');
    }
}
