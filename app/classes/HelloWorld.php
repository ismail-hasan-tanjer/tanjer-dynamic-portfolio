<?php
namespace App\classes;

class HelloWorld

{
    public $menu = [];

    public function __construct (){
        
    }

    public function index ()
    {
        header('Location: action.php?page=home');
    }
    
    
}