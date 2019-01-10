<?php

namespace Patterns\Facade;

use Patterns\AbstractIndex;
use Patterns\Facade\Helpers\Auth;
use Patterns\Facade\Helpers\Mail;
use Patterns\Facade\Helpers\User;
use Patterns\Facade\Helpers\Validate;

class Index extends AbstractIndex
{
    /*
     * this pattern hides complexity and provides simple interface to user
     * which he can deal with system through it.
     * the complexity between classes (auth, mail, user ...) hidden in the SignUpFacade
     * and user simply calls the signUpUser function.
     * example copied from https://gist.github.com/altayalp/b4ee10c560d41dc197c2b86cc20ee54e
     */

    function index()
    {
        // Create instance of classes
        $validate = new Validate();
        $user = new User();
        $auth = new Auth();
        $mail = new Mail();

        // Simple sign up process with facade pattern
        $facade = new SignUpFacade($validate, $user, $auth, $mail);
        $userInfo = $facade->signUpUser('user name', '123456', 'test@test.com');
        print_r($userInfo);


    }
}