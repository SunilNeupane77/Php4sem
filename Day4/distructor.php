<?php 
 class Sunil{
    public $name;
    public $address;

    function __construct($name,$address){
        $this->name=$name;
        $this->address=$address;
    }
    function __destruct(){
        echo "The name is{$this->name} and the address is {$this->address}.";
    }

 }
 $sunil=new Sunil("Sunil","Inaruwa");
?>