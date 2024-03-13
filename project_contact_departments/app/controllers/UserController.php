<?php

require_once ROOT . '/app/services/UserService.php';
class UserController
{

  public function getUserById()
  {
    session_start();
    $id = $_SESSION['userId'];
    $user = new UserService();
    $user->getUserById($id);

    include ROOT . '/app/views/users/index.php';
  }


  public function login()
  {
    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    if (isset($_POST['login'])) {


      $username = $_POST['user'];
      $password = $_POST['pass'];

      $login = new UserService();


      $result = $login->login($username, $password);
      if ($result != null) {
        $_SESSION['username'] = $result->getUsername();
        $role = $result->getRole();
        $_SESSION['userId'] = $result->getEmployeeId();


        if ($role == 'user') {
          header('Location:' . PATH . '/public/index.php?controller=department&action=index');
        } else if ($role == 'admin') {
          header('Location:' . PATH . '/public/index.php?controller=employee&action=index');
        }
      } else {
        header('Location:' . PATH . '/public/index.php?error=error');
      }

    }
    include ROOT . '/app/views/login/index.php';

  }

  public function logout()
  {

    session_start();
    session_destroy();
    header('Location:' . PATH . '/public/index.php?controller=department&action=index');
  }
}