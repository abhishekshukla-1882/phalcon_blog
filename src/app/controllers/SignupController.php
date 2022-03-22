<?php

use Phalcon\Mvc\Controller;

class SignupController extends Controller{

    public function IndexAction(){

    }

<<<<<<< HEAD
    public function registerAction(){
        $user = new Users();

        $user->assign(
            $this->request->getPost(),
            [
                'username',
                'password'
            ]
        );

        $success = $user->save();

        $this->view->success = $success;

        if($success){
            $this->view->message = "Register succesfully";
        }else{
            $this->view->message = "Not Register succesfully due to following reason: <br>".implode("<br>", $user->getMessages());
        }
    }
=======
   
    public function registerAction(){
        $user = new Users();
         $postData=$this->request->getPost();
         $success='false';
        if ($postData['password'] == $postData['password2']) {
            $user->assign(
                $this->request->getPost(),
                [
                    'name',
                    'username',
                    'email',
                    'password',
                    'role'
                    
                ]
            );
            $status='pending';
            if($postData['role'] == 'admin')
            $status='approved';
            $user->status=$status;
    
            $success = $user->save();
               
        }
        
       
        // echo $success;
        // die();

        $this->view->success = $success;

        if ($success == 'true') {
            // $val=$postData['password2'];
            // $this->view->message = ".$val.";
           $this->view->message = "Register succesfully";
        } else {
            $this->view->message = "Not Register succesfully due to following reason: <br>".implode("<br>", $user->getMessages());
        }
    }

    public function testAction() 
    {
        // echo "ddone first stem";

    }
>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df
}