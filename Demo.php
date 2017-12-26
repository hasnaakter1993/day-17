<?php
require_once 'Example.php';


class Demo extends Example
{
 public $age=22;
 protected $location = "Mirpur";
 private $mobile = "0157458699";

 public function  newOne(){
//     echo 'In new one';
     $this->addition();
 }
 protected function newTwo(){
     echo 'In new two';
 }
 private function newThree(){
     echo 'In new three';
 }
}