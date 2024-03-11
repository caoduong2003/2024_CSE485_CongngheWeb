<?php


class Employee 
{
  private $emoloyeeId;
  private $fullName;
  private $address;
  private $email;
  private $mobilePhone;
  private $position;
  private $avatar;
  private $departmentId;

  public function __construct($emoloyeeId, $fullName, $address, $email, $mobilePhone, $position, $avatar, $departmentId)
  {
    $this->emoloyeeId = $emoloyeeId;
    $this->fullName = $fullName;
    $this->address = $address;
    $this->email = $email;
    $this->mobilePhone = $mobilePhone;
    $this->position = $position;
    $this->avatar = $avatar;
    $this->departmentId = $departmentId;

  }

  
  public function getEmoloyeeId(){
    return $this->emoloyeeId;
  }

  public function setEmoloyeeId($emoloyeeId){
    $this->emoloyeeId = $emoloyeeId;
  }

  public function getFullName(){
    return $this->fullName;
  }

  public function setFullName($fullName){
    $this->fullName = $fullName;
  }

  public function getAddress(){
    return $this->address;
  }

  public function setAddress($address){
    $this->address = $address;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }
  
  public function getMobilePhone(){
    return $this->mobilePhone;
  }

  public function setMobilePhone($mobilePhone){
    $this->mobilePhone = $mobilePhone;
  }

  public function getPosition(){
    return $this->position;
  }

  public function setPosition($position){
    $this->position = $position;
  }

  public function getAvatar(){
    return $this->avatar;
  }

  public function setAvatar($avatar){
    $this->avatar = $avatar;
  }

  public function getDepartmentId(){
    return $this->departmentId;
  }

  public function setDepartmentId($departmentId){
    $this->departmentId = $departmentId;
  }
}