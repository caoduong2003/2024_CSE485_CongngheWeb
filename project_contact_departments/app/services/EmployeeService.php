<?php 
require_once ROOT.'/app/libs/DBconnection.php';
require_once ROOT.'/app/models/Department.php';

class EmployeeService {
  public function getAllEmployee(){
    $dbconnect = new DBconnection();
    $conn = $dbconnect->getConn();
    // $conn = new PDO("mysql:host=localhost;dbname=project","root","hiep2003");
    if($conn!=null){
      $sql = "SELECT * FROM employees WHERE departments.ParentDepartmentId IS null";
      $stsm = $conn->query($sql);
      $employees = [];
      while($row = $stsm->fetch()){
        $employee = new Employee($row['EmployeeId'], $row['FullName'],  
            $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'],$row['Avatar'], $row['DepartmentId']);
        // $department = $row['DepartmentName'];
        $employees[] = $employee;
      }
      return $employees;
    }
    
  }
}