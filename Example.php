<?php


class Example
{
    public $name= "Hasna Akter";
   protected $city= "Dhaka";
    private $country= "Bangladesh";

    public function __construct()
    {
        echo 'In construct';
//       $this->value = $data;
    }

    public function addition(){
        echo 'In addition';
//      echo  $this->country;
//        $this->value;
    }
   protected function subtraction(){
        echo 'In subtraction';
//       $this->value;
}
   private function division(){
        echo 'In division';
    }


}