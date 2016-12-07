<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
   
  //  public function getExemploSuper(){
    //    return "oi";
   // }
   //  public function postExemplo(){
   //     return "OI";
   // }
    public function getLogin(){
        
        $data = [
           'email' => 'cissa.pmro@gmail.com',
            'password' => 123456
        ];
         //Tenta logar
      if(Auth::attempt($data)) {
           return "Logou";
      }
        //Verifica se está logado
        if(Auth::check()){
            return "Logado";
       }
      //  dd(Auth::user()->password);
      //  return Auth::user();
        
        return "Falhou";
        
    }
    public function getLogout(){
        
        Auth::logout();
        if(Auth::check()){
            return "Logado";
        }
        return "Não está logado";
        
    }
}
