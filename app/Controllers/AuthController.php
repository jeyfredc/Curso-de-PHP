<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;


class UsersController extends BaseController{
    public function getLogin(){
        return $this->renderHTML('login.twig');
    }

