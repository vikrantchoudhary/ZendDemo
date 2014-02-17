<?php
/**
 * Created by PhpStorm.
 * User: Vikranth
 * Date: 2/17/14
 * Time: 11:49 AM
 */

class Application_Form_RegistrationForm extends Zend_Form{
    public function init()
    {
        $this->setMethod('post');
        $id = $this->createElement('hidden','id');
        $register = $this->createElement('submit','register');
        $register->setLabel('Sign up') ->setIgnore(true);
        $firstname = $this->createElement('text','firstname');
        $firstname->setLabel('First Name : ')->setAttrib('maxlength',100);
        $lastname = $this->createElement('text','lastname');
        $lastname->setLabel('Last Name : ')->setAttrib('maxlength',100);
        $email = $this->createElement('text','email');
        $email->setLabel('Email : ')->setAttrib('maxlength',255);
        $username = $this->createElement('text','username');
        $username->setLabel('Username : ')->setAttrib('maxlength',255);
        $password = $this->createElement('password','password');
        $password->setLabel('Password:')->setAttrib('maxlength',75);
        $confirmpassword = $this->createElement('password','confirmPassword');
        $confirmpassword->setLabel('Confirm Password:')->setAttrib('maxlength',75);
        $this->addElements(array($firstname,
                        $lastname,
                        $email,
                        $username,
                        $password,
                        $confirmpassword,
                        $register));
    }
} 