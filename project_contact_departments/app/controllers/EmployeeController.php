<?php
require_once ROOT . '/app/services/EmployeeService.php';
class EmployeeController
{
    public function index()
    {
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployee();
        include ROOT . '/app/views/admin/index.php';
    }

    public function create(){
        
        // if()


        // $create = new EmployeeService();
        // $employee = $create->addEmployee();
        // if($employee){

        // }
    }
}