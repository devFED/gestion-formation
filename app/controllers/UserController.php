<?php

use Rakit\Validation\Validator;

class UserController extends Controller
{
	private $model = null;

	public function __construct()
	{
		$this->model = $this->model('User');
	}

	public function index()
	{ 
		$users = $this->model->getAll();
		return $this->view('users/index', ['users' => $users]);
	}

	public function create()
	{
		return $this->view('users/create');
	}

	public function save()
	{
		if(serverMethod() != 'POST') {
			redirect('user/create');
		}
		// Rules 
		$rules = [
		    'username'          => 'required|min:3|max:20',
		    'email'             => 'required|email',
		    'password'			=> 'required|min:6',
		    'confirm_password' 	=> 'required|same:password',
		    'createdAt' 	    => 'required|date'
		];

		// validate request
		$validator = new Validator;
		$validation = $validator->validate($_POST, $rules);
		if($validation->fails()) {
		    $errors = $validation->errors()->firstOfAll();
		    return $this->view('users/create', ['errors' => $errors]);
		} else {
		    $user = $this->model;
			$user->username = $_POST['username'];
			$user->email = $_POST['email'];
			$user->password = $_POST['password'];
			$user->createdAt = $_POST['createdAt'];
			$user->save();

			redirect('user/index');
		}
	}

	public function edit($id)
	{
		echo 'edit user :' . $id;
	}

	public function update($id)
	{
		echo 'update';
	}

	public function delete($id)
	{
		echo 'edit user :' . $id;
	}
}