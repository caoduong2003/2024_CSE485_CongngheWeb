<?php


require_once ROOT.'/app/libs/DBconnection.php';
require_once ROOT.'/app/models/Department.php';
class DepartmentService {
  public function getAllDepartment(){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();
    // $conn = new PDO("mysql:host=localhost;dbname=project","root","hiep2003");
    if($conn!=null){
      $sql = "select * from departments";
      $stsm = $conn->query($sql);
      $departments = [];
      while($row = $stsm->fetch()){
        $department = new Department($row['DepartmentID'], $row['DepartmentName'], 
            $row['Address'], $row['Email'], $row['Phone'], $row['Logo'],$row['Website'], $row['ParentDepartmentId']);
        // $department = $row['DepartmentName'];
        $departments[] = $department;
      }
      return $departments;
    }
    
    
    

  }
}