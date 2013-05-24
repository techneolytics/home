<?php

// Include the defined Model class form Model.php
include_once("model/Model.php");

// Define the Controller class.
class Controller {
// create a public variable $model.  I switched this to private and saw no difference in function.
	public $model;

// Define a public function 	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['book']))
		{
			// no special book is requested, we'll show a list of all available books
			$books = $this->model->getBookList();
			include 'view/booklist.php';
		}
		else
		{
			// show the requested book
			$book = $this->model->getBook($_GET['book']);
			include 'view/viewbook.php';
		}
	}
}

?>