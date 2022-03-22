<?php
<<<<<<< HEAD
=======
//session_start();
>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df

use Phalcon\Mvc\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
<<<<<<< HEAD
        $postdata = $_POST ?? array();
        $username = $_POST['username'];
        $password = $_POST["password"];
        // echo $password;
        print_r($postdata);
        // die();
      
        // if(count($postdata)>0){
        // print_r($username);
        // die();
        // $data = Users::find([
        //     'conditions' => 
        //         "username = ?1 AND
        //         password = ?2",
        //     "bind" => [1 => $username, 2=> $password]
            
        // ]);
        // $data = Users::query()
        //     ->where("username = '$username'")
        //     ->andWhere("password = '$password'")
        //     ->execute();
        // echo "<pre>";
        // print_r($data[0]);
        // echo "</pre>";

        // die();
        //return '<h1>Hello!!!</h1>';
        // }   
    }
    public function randomAction(){
        $postdata = $_POST ?? array();
        $username = $_POST['username'];
        $password = $_POST["password"];
        // echo $password;
        // print_r($password);
        $data = Users::query()
            ->where("username = '$username'")
            ->andWhere("password = '$password'")
            ->execute();
        // print_r($data[0]->status);
        // die();
        // print_r($data->username, $data->user_id);
        if(count($data)>0){
            if(!isset($_SESSION['login'])){
                $_SESSION['login'] = array();
                $user_detail = array(
                    'username'=> $data[0]->username,
                    'id'=> $data[0]->user_id,
                    'user_is'=>$data[0]->status
                    // 'user_is'=>$data->user_is
                );
                // array_push($_SESSION['login'],$user_detail);
                $_SESSION['login'] = $user_detail;
                print_r($_SESSION['login']);
                // die();
                header('Location: http://localhost:8080/');
                // die();
            }else{
                header('Location: http://localhost:8080/login');
            }
        }else{
            header('Location: http://localhost:8080/login');
        }
        // echo "<pre>";
        // print_r($data[0]->password);
        // echo "</pre>";

=======
        //return '<h1>Hello!!!</h1>';
       
    }

    public function registerAction()
    {
        $postData=$this->request->getPost();
        $email=$postData['email'];
        $password=$postData['password'];
        //echo $password;
        // $user=new Users();
        //   $result=Users::find();
       // $this->view->users=Users::find();
       // $this->view->users=Users::find_by_email_and_password($email, $password);
        // // $result=$user::find_by_email_and_password($email, $password);
        // $result = Users::find([
        //     'email' => $email,
        //     'password' => $password
        // ]);
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        // echo $result->email;
        // echo "hello";
        // $this->view->data="good boy";
        //$this->view->users=Users::find("email = '".$email."'");
        // $result=Users::find("email = '".$email."'");
        // print_r($result);
        // $this->view->users=Users::find([
        //     "email = '".$email."'",
        //     "password = '".$password."'"
        // ] );
        // echo "ggggggg";
        // die();
        $users = Users::find(
            [
                'conditions' => 'email = ?1 AND password =?2 AND status =?3',
                'bind'       => [
                    1 => $email,
                    2 => $password,
                    3 => 'approved'
                ]
            ]
        );
        
           
        // $this->view->users=$users;
       
        if (count($users) == 1) {
            $_SESSION['mydetails']=$this->getArray($users[0]);
            header("location:/dashboard");

        } else {
           
            $this->view->data="Not Registered or Approved";
        }
        

    }


    public function getArray($user)
    {
        return array(
            'user_id'=>$user->user_id,
            'name'=>$user->name,
            'username'=>$user->username,
            'email'=>$user->email,
            'password'=>$user->password,
            'role'=>$user->role,
            'status'=>$user->status

        );
>>>>>>> 1a09beea60cd09eb9c42fa664d3ffcfe7816e1df
    }
}