<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\email;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller{
   public function index(){

      return view('livewire.front');

   }

   public function store( Request $request){
      
      define('CLAVE', '6Lc5CTofAAAAAH90_adQbsXbdolzQJlhS0vJLY6W');
	
      $token = $_POST['token'];
      $action = $_POST['action'];
      
      
      $cu = curl_init();
      curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
      curl_setopt($cu, CURLOPT_POST, 1);
      curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => CLAVE, 'response' => $token)));
      curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
	   $response = curl_exec($cu);
	   curl_close($cu);
    
	
	   $datos = json_decode($response, true);
	
	   // print_r($datos);
	
	   if($datos['success'] == 1 && $datos['score'] >= 0.5){
         if($datos['action'] == 'validarUsuario'){
            $request->validate([
               'Nombre' => 'required',
            ]);
   
            $correo = new email($request->all());
            Mail::to('deividisi26@gmail.com')->send($correo);
            return redirect()->route('livewire.index')->with('info', 'Gracias por confirmar.');
			
         }
         
         } else {
            return redirect()->route('livewire.index')->with('info', 'captcha invalida.');

            die();

         
         
         } 
         

   }
}