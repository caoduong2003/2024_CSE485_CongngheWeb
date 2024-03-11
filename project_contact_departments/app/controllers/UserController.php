<?php

require_once ROOT . '/app/services/UserService.php';
class UserController
{
//login


  public function login(){
    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST['login'])){
        // echo "login";
       
        
        // if(isset($_POST['user']){
        //   $password = $_POST['pass'];
        // }else {
        //   echo "pass not found";
        // }
        
        // if(!empty($username) && !empty($password)){
          $username = $_POST['user'];
          $password = $_POST['pass'];
          $login = new UserService();
          
          $result = $login->login($username,$password);
          if($result){
            
            // echo "success";
           header('Location:'.PATH.'/app/views/home/index.php?yes=thanhcong');
          }else{
            // echo "fail";
            header('Location:'.PATH.'/app/views/login/index.php?error=wrong username or password');
          }
        // }else{
        //   echo "khong";
        // }
        
      // }
      
    }
    include ROOT.'/app/views/login/index.php';
   


 
  }
}