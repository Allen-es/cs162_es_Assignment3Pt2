<?php

namespace App\Controllers;
use App\Models\EmployeeModel;

class Home extends BaseController
{
	public function index()
	{
		$employeeModel = new EmployeeModel();
		$employees = $employeeModel->get_employee();
		$employeeFields = $employeeModel->get_columnNames();


		$data['whateverName'] = "Hello World!";
		$data['page_title'] = "My Page Title";
		$data['alert'] = true;
		$data['employees'] = $employees;
		$data['employeeFields'] = $employeeFields;

		
		echo view ('templates/header.php');
		echo view('my_welcome_message.php');
		echo view ('templates/footer.php');

	}

}

/*
	public function create($page){
		if($page) == ('employee') {
			echo view('employee/create.php');
		}
		else if ($page == 'department'){
			echo view('department/create.php');
		}
		else{
			echo view("welcomme_message");
		}
	}
}
*/