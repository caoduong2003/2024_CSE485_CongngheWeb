<?php
require_once ROOT .'/app/services/AdminService.php';
class AdminController{
    public function index(){
        $employeeService = new AdminService();
        $employees = $employeeService->getAllUser();
        include ROOT .'/app/views/admin/index.php';
    }
}