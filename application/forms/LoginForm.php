<?php
/**
 * Created by PhpStorm.
 * User: Vikranth
 * Date: 2/17/14
 * Time: 11:47 AM
 */


class Application_Form_LoginForm extends Zend_Form{
    public function init()
    {
        $this->setMethod('post');
        $username = $this->createElement('text','username');
        $username->setLabel('Username')
            ->setAttrib('maxlength',75);
        $password = $this->createElement('password','password');
        $password->setLabel('password:')
            ->setAttrib('maxlength',75);
        $signin = $this->createElement('submit','signin');
        $signin->setLabel("sign in")
            ->setIgnore(true);
        $this->addElements(array(
            $username,
            $password,
            $signin
        ));
    }
} 