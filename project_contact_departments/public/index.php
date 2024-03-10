<?php
require_once '../app/config/config.php';

require_once ROOT.'/app/controllers/DepartmentController.php';

$departmentController = new DepartmentController();
$departmentController->getAllDepartment();

// require_once ROOT.'/app/services/DepartmentService.php';
