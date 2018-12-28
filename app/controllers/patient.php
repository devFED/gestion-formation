<?php

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\Model;

class Patient extends Controller
{
  public function index()
  {
    echo 'contact/index';
  }
  
  public function phone()
  {

  	
	$this->model('Patient');
  	// $data = Patient::find(2);

	// $db = new DB();

  	$users = DB::table('patients')->get();
  	
  	// $capsule = new Capsule();
  	//$users = Capsule::table('patients')->get();
	var_dump($users);
  	// foreach ($data as $d) 
  	// {
  	// 	echo $d->nom;
  	// }

    // echo 'contact/phone' . $data . ' / ' . $data2;
	// echo 'Mouad ZIANI 1997';
	// die();

	// //Session::set('flush', 'flush');
	// echo Session::get('flush');
	// Session::flush();
	// die();

	// $validator = new Validator;

	// // make it
	// $validation = $validator->make($_POST + $_FILES, [
	//     'name'                  => 'required',
	//     'email'                 => 'required|email',
	//     'password'              => 'required|min:6',
	//     'confirm_password'      => 'required|same:password',
	//     'avatar'                => 'required|uploaded_file:0,500K,png,jpeg',
	//     'skills'                => 'array',
	//     'skills.*.id'           => 'required|numeric',
	//     'skills.*.percentage'   => 'required|numeric'
	// ]);

	// // then validate
	// $validation->validate();

	// if ($validation->fails()) {
	//     // handling errors
	//     $errors = $validation->errors();
	//     echo "<pre>";
	//     print_r($errors->firstOfAll());
	//     echo "</pre>";
	//     exit;
	// } else {
	//     // validation passes
	//     echo "Success!";
	// }




	// Patient::create([
	// 'nom' => 'Mouad mmmmmmmmm'
	// ]);
  }
}
