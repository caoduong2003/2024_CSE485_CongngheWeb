<?php
require_once ROOT . '/app/services/EmployeeService.php';
class EmployeeController
{
    public function index()
    {
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployee();
        include ROOT . '/app/views/admin/index.php';
        include ROOT . '/app/views/employees/index.php';
    }
}