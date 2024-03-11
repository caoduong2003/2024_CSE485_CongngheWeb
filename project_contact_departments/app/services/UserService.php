<?php 
require_once ROOT.'/app/models/User.php';
class UserService {
  public function getAllUser(){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();
    // $conn = new PDO("mysql:host=localhost;dbname=project","root","hiep2003");
    if($conn!=null){
      $sql = "SELECT * FROM users";
      $stsm = $conn->query($sql);
      $users = [];
      while($row = $stsm->fetch()){
        // $hash_pwd = password_hash($row['password'],PASSWORD_DEFAULT);
        $user = new User($row['Username'], $row['password'] ,$row['role'],['EmployeeId'] );
        // $department = $row['DepartmentName'];
        $users[] = $user;
      }
      return $users;
    }
    
  }

  public function login($username,$password){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();

    if($conn!=null){

        $sql = "SELECT * FROM users WHERE Username = '$username' AND password = '$password'";
        $stsm = $conn->query($sql);
        $row = $stsm->fetch();
        if($row>0){
          $user = new User($row['Username'], $row['password'],$row['role'],$row['EmployeeId'] );
          
          return true;
        }else{
          return false;
        }
      // } catch (PDOException $e) {
      //   return false;
      // }
  
  }
}



}