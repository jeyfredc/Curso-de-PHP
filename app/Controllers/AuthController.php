<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;
use Zend\Diactoros\Response\RedirectResponse;


class AuthController extends BaseController{
    public function getLogin(){
        return $this->renderHTML('login.twig');
    }


    public function postLogin($request){
        $posData = $request->getParsedBody();
        $responseMessage = null;

        $user = User::where('email', $posData['email'])->first(); //Se indica que busque dentro de la tabla users el primer dato que ingresamos en el campo email y traelo
        if($user){
            if(password_verify($posData['password'], $user->password)){
                return new RedirectResponse('admin');

            }else{
                $responseMessage = 'Bad credentials';
            }
        }else{
            $responseMessage = 'Bad credentials';
        }

        return $this->renderHTML('login.twig', [
            'responseMessage' => $responseMessage,
        ]);
    }

}