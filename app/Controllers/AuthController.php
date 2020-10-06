<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;


class AuthController extends BaseController{
    public function getLogin(){
        return $this->renderHTML('login.twig');
    }


    public function postLogin($request){
        $posData = $request->getParsedBody();
        $user = User::where('email', $posData['email'])->first(); //Se indica que busque dentro de la tabla users el primer dato que ingresamos en el campo email y traelo
        if($user){
            if(password_verify($posData['password'], $user->password)){
                echo 'Correct';
            }else{
                echo 'Wrong';
            }
        }else{
            echo 'Not Found';
        }
    }

}