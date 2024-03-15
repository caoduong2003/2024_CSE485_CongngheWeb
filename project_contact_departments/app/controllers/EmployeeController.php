<?php
require_once ROOT . '/app/services/EmployeeService.php';
require_once ROOT . '/app/services/EmployeeService.php';

class EmployeeController
{
    public function index()
    {
        $employeeService = new EmployeeService();
        $employees = $employeeService->getAllEmployee();
        include ROOT . '/app/views/admin/index.php';
    }

    public function getbyid()
    {
        session_start();
        $id = $_GET['id'];
        $employeeService = new EmployeeService();
        $employees = $employeeService->getEmployeeByIdDp($id);
        // echo '<pre>';
        // echo print_r($employees);
        // echo '</pre>';
        include ROOT . '/app/views/employees/index.php';
    }

    public function detail()
    {
        $id = $_GET['id'];
        $employees = new EmployeeService();
        $employee = $employees ->getEmployeeById($id);        // echo '<pre>';
        // echo print_r($employees);
        // echo '</pre>';
        include ROOT . '/app/views/employees/detail.php';
    }
    
    public function create(){

        
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['create'])){
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $position = $_POST['position'];
                $avatar = $_POST['avatar'];
                $departmentId = $_POST['departmentId'];

    

                $employees = new EmployeeService();

                $result = $employees->addEmployee($name,$address,$email,$phone,$position,$avatar,$departmentId);
                if($result){
                    header('Location:'. PATH. '/public/index.php?controller=employee&action=index&msg=Thêm thành công');
                }else{
                    header('Location:'. PATH. '/public/index.php?controller=employee&action=create&error=Thêm thất bại');
                }

                
            }
        }

        include ROOT. '/app/views/admin/create.php';


        // $create = new EmployeeService();
        // $employee = $create->addEmployee();
        // if($employee){

        // }
    }

    public function search(){
        if(isset($_POST['search'])){
            $name = $_POST['name'];
            $employeeService = new EmployeeService();
            $employees = $employeeService->search($name);
            // echo '<pre>';
            // echo print_r($employees);
            // echo '</pre>';
            
        }
        include ROOT. '/app/views/employees/search.php';

        
    }

    public function update(){
        $id = $_GET['id'];
            // $_SESSION['employeeId'] = $id;
            $employees = new EmployeeService();
            $employee = $employees ->getEmployeeById($id);
       

       
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['update'])){
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $position = $_POST['position'];
                $avatar = $_POST['avatar'];
                $departmentId = $_POST['departmentId'];

                // $id = $_SESSION['employeeId'];
                $id1 = $id;
                
                $employees = new EmployeeService();
                
                $result = $employees->updateEmployee($id1,$name,$address,$email,$phone,$position,$avatar,$departmentId);

                if($result){
                    header('Location:'. PATH. '/public/index.php?controller=employee&action=index&msg=Sửa thành công');
                }else{
                    header('Location:'. PATH. '/public/index.php?controller=employee&action=update&error=Sửa thất bại&id='.$id);
                }

                
            }
        }
            

        include ROOT. '/app/views/admin/update.php';
      
    }

    public function delete(){

        $employee = new EmployeeService();
        $id = $_GET['id'];
        $result = $employee->deleteEmployee($id);
        if($result ){
            header('Location:'. PATH. '/public/index.php?controller=employee&action=index&msg=Xóa thành công');
        }else{
            header('Location:'. PATH. '/public/index.php?controller=employee&action=index&error=Xóa thất bại&id='.$id);
        }
    }

    
}