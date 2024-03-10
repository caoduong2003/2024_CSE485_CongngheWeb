<?php
require_once ROOT . '/app/models/Department.php';
require_once ROOT . '/app/models/Employee.php';
class AdminService{
    public function getAllUser(){
        $conn = new PDO('mysql:host=localhost;dbname=project','root','');
        $sql = "SELECT *  FROM employees ";
        $stmt = $conn->query($sql);
        $patients = [];
        while($row = $stmt->fetch()){
            $patient = new Employee($row['EmployeeId'],$row['FullName'], $row['Address'],$row['Email'] ,$row['MobilePhone'],$row['Position'], $row['Avatar'],$row['DepartmentId']);
            $patients[] = $patient;
        }
        return $patients;
    }
}