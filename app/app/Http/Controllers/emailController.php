<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\email;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
   public function index(){

      return view('livewire.front');

   }

   public function store( Request $request){

      $request->validate([
         'Nombre' => 'required',
      ]);

      $correo = new email($request->all());
      Mail::to('deividisi26@gmail.com')->send($correo);
      return redirect()->route('livewire.index')->with('info', 'Gracias por confirmar.');
      

      
   }
}
