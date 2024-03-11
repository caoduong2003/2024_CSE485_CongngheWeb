<?php
require_once '../app/config/config.php';

require_once ROOT . '/app/controllers/EmployeeController.php';
require_once ROOT . '/app/controllers/DepartmentController.php';
//require_once ROOT . '/app/services/AdminService.php';
$departmentController = new DepartmentController();
$departmentController->getAllDepartment();

// require_once ROOT.'/app/services/DepartmentService.php';

$adminController = new EmployeeController();
$adminController->index();