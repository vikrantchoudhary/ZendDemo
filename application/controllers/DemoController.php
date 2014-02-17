<?php

/**
 * Created by PhpStorm.
 * User: vikrantchoudhary
 * Date: 13/02/14
 * Time: 2:08 PM
 */

class DemoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */

    }

    public function indexAction()
    {
        $model = new Application_Model_Users();
        $form = new Application_Form_LoginForm();
        $this->view->form = $form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                $auth = Zend_Auth::getInstance();
                $authAdapter = new Zend_Auth_Adapter_DbTable($model->getAdapter(),'Users');
                $authAdapter->setIdentityColumn('username')
                    ->setCredentialColumn('password');
                $authAdapter->setIdentity($data['username'])
                    ->setCredential($data['password']);
                $result = $auth->authenticate($authAdapter);
                if($result->isValid()){
                    $storage = new Zend_Auth_Storage_Session();
                    $storage->write($authAdapter->getResultRowObject());
                    $this->_redirect('Demo/home');
                } else {
                    $this->view->errorMessage = "Invalid username or password. Please try again.";
                }
            }
        }
    }

    public function signupAction() {
        $users = new Application_Model_Users();
        $form = new Application_Form_RegistrationForm();
        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            if($form->isValid($_POST)){
                $data = $form->getValues();
                if($data['password'] != $data['confirmPassword']){
                    $this->view->errorMessage = "Password and confirm password don’t match.";
                    return;
                }
                unset($data['confirmPassword']);
                $users->createUser($data);
                $this->_redirect('Demo/index');
            }
        }
    }
    public function logoutAction() {
        $storage = new Zend_Auth_Storage_Session();
        $storage->clear();
        $this->_redirect('Demo/index');
    }
    public function homeAction() {
        $storage = new Zend_Auth_Storage_Session();
        $data = $storage->read();
        if(!$data)
        {
            $this->_redirect('Demo/index');
        }
        $users = new Application_Model_Users();
        $this->view->username = $data->username;
        $this->view->userslist = $users->fetchAll();

    }
   /* public function chatAction() {
        $this->view->assign('msg', 'this is a message');
        //echo "I am in chat action";
    }

    public function otherAction() {
        echo 22;
    }*/


}

