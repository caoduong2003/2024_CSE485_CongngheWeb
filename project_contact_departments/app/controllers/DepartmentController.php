<?php

require_once ROOT.'/app/services/DepartmentService.php';
class DepartmentController
{
  public function index(){
    session_start();

    if($_SERVER['QUERY_STRING'] == 'noname'){
      session_destroy();
      $user_log = false;
    }
    $departmentService = new DepartmentService();
    $departments = $departmentService -> getAllDepartment();

    

    include ROOT.'/app/views/home/index.php';

  }

  public function getDepartmentById(){
    
  }
  
}