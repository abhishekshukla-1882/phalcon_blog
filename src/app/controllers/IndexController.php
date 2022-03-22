<?php
<<<<<<< HEAD
session_start();
=======

>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df
use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
<<<<<<< HEAD
        $this->view->tum=Posts::find();
        // return '<h1>Hello World!</h1>';
    }
    // public function logoutAction(){
        
    // }
=======
        
        $this->view->users = Users::find();
        // return '<h1>Hello World!</h1>';
    }
>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df
}