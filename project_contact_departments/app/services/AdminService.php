<?php
require_once ROOT . '/app/models/Department.php';
require_once ROOT . '/app/models/Employee.php';
class AdminService{
    public function getAllUser(){
        $conn = new PDO('mysql:host=localhost;dbname=project','root','hiep2003');
        $sql = "SELECT *  FROM employees ";
        $stmt = $conn->query($sql);
        $employees = [];
        while($row = $stmt->fetch()){
            $employee = new Employee($row['EmployeeId'],$row['FullName'], $row['Address'],$row['Email'] ,$row['MobilePhone'],$row['Position'], $row['Avatar'],$row['DepartmentId']);
            $employees[] = $employee;
        }
        return $employees;
    }
}