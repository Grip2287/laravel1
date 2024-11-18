<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\uslugas;
use App\Models\apll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
   public function index(){
    return view("index");
   }
   public function show_reg(){
    return view("reg");
   }  
   public function apll_add(){
   $task = uslugas::all();
    return view("apll_add",compact('task'));
    
   }  

   public function add_appl(Request $request){
    $user = Auth::user();
    $user_id = $user -> id;
    $user = Apll::create([
        "date_time" => $request->date_time,
        "id_user" => $request-> $user_id,
        "id_usl" => $request->id_usl,
        "adress" => $request->adress
    ]);

        return redirect()->route("LK");
   }



   public function show_LK(){
    return view("LK");
   }  
    public function show_auth(){
    return view("auth");
   }
   public function signin(Request $request){
    $request->validate([
        "login" => "required",
        "password" => "required",
    ]);
        if(Auth::attempt(['login'=> $request ->login,'password'=> $request -> password])){
            $user = Auth::user();
            if($user -> role === "admin"){
                return redirect()->route("admin");
            }else{
                return redirect()->route("LK");
            }
        }else{
            return response("Данные введены не верно");
        }
   }   
   public function signup(Request $request){
    $request->validate([
        "login" => "required|string| max:255",
        "name" => "required|string| max:255",
        "surname" => "required|string| max:255",
        "email" => "required|email| max:255",
        "phone" => "required|string|max:12",
        "password" => "required|min:6",
    ]); 
    $user = User::create([
        "login" => $request->login,
        "name" => $request->name,
        "surname" => $request->surname,
        "email" => $request->email,
        "phone" => $request->phone,
        "password" => hash::make($request->password),
    ]);

        return redirect()->route("auth");
   }
   public function logout(){
    Auth::logout();
    return redirect()->route("index");
   }

}
