<?php

namespace Patterns\Facade;


use Patterns\Facade\Helpers\Auth;
use Patterns\Facade\Helpers\Mail;
use Patterns\Facade\Helpers\User;
use Patterns\Facade\Helpers\Validate;

class SignUpFacade
{
    private $validate;
    private $user;
    private $auth;
    private $mail;

    public function __construct(Validate $validate, User $user, Auth $auth, Mail $mail)
    {
        $this->validate = $validate;
        $this->user = $user;
        $this->auth = $auth;
        $this->mail = $mail;
    }

    public function signUpUser($userName, $userPass, $userMail)
    {
        if ($this->validate->isValid(['name' => $userName, 'password' =>$userPass, 'mail' => $userMail])) {
            $user = $this->user->create(['name' => $userName, 'password' =>$userPass, 'mail' => $userMail]);
            $this->auth->login($userName, $userPass);
            $this->mail->to($userMail)->subject('Welcome')->send();
            $user['status'] = 'user created successfully';
            return $user;
        }
    }
}