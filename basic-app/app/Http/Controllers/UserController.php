<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   

        public function uploadAvatar(Request $request){
                // $request->image->store('images','public');
                if($request->hasFile('image')){
                  $filename = $request->image->getClientOriginalName();
                  $request ->image ->storeAs('images',$filename,'public');
                  User::find(1)->update(['avatar'=>$filename]);      
                }
        
                return redirect()->back();
        }

    public function index()
    {

        // one system crud
 // insert system
        // DB::insert('insert into users (name,email,password) values (?,?,?)', ['yle','email@gmail.com','password']);
//update system
        // DB::update('update users set name = ? where id = 1',['updatedName'] );
//delete system        
        // DB::delete('delete from users where id=1');
//view system 
        // $users = DB::select('select * from users ');
        // return $users;


        // 2nd system of crud
// insert system
        // $user = new User();
        // $user -> name="name1";
        // $user -> email="name1@gmail.com";
        // $user -> password="name1Password";
        // $user ->save();
//update system
        // User::where('id',6)->update(['name' =>'updateName1']);

//delete system  
    // User::where('id',4)->delete();    
    
    
    // 3rd system of crud

    $data =[

        'name'=>'name2',
        'email'=>'name2@gmail.com',
        'password'=>bcrypt('name2password'),

    ];
    User::create($data);
        
//view system 
        $user = User::all();
        return $user;

        // dd($user);

        return view('home');
    }


}
