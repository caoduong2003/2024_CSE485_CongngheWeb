<?php
require_once '../app/config/config.php';

require_once ROOT . '/app/controllers/EmployeeController.php';
require_once ROOT . '/app/controllers/DepartmentController.php';
require_once ROOT . '/app/controllers/UserController.php';
//require_once ROOT . '/app/services/AdminService.php';


// require_once ROOT.'/app/services/DepartmentService.php';

$adminController = new EmployeeController();
$adminController->index();

// $userController = new UserController();

// $userController->login();

// $url = $_SERVER['REQUEST_URI'];
// $method = $_SERVER['REQUEST_METHOD'];
// $data = $_POST;

// if($url ==='/' && $method === 'GET'){
//   $departmentController = new DepartmentController();
//   $departmentController->getAllDepartment();  
// }
// echo $method;
// echo '<br>';
// echo $url;
// echo '<br>';
// echo $data;
