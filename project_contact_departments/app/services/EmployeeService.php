<?php
require_once ROOT . '/app/models/Department.php';
require_once ROOT . '/app/models/Employee.php';
require_once ROOT . '/app/libs/DBconnection.php';
class EmployeeService
{
    public function getAllEmployee()
    {
        $dbconnect = new DBconnection();
        $conn = $dbconnect->getConn();
        if ($conn != null) {
            $sql = "SELECT *  FROM employees ";
            $stmt = $conn->query($sql);
            $employees = [];
            while ($row = $stmt->fetch()) {
                $employee = new Employee($row['EmployeeId'], $row['FullName'], $row['Address'], $row['Email'], $row['MobilePhone'], $row['Position'], $row['Avatar'], $row['DepartmentId']);
                $employees[] = $employee;
            }
            return $employees;
        }

    }
}