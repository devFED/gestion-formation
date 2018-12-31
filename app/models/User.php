<?php 

class User
{
	private $table = 'users';
	public $username;
	public $email;
	public $password;
	public $createdAt;

	public function getAll()
	{
		$sql = "SELECT * FROM {$this->table}";
		return getDatas($sql);
	}

	public function find($id)
	{
		$sql = "SELECT * FROM {$this->table} WHERE id = :id";
		return getData($sql, ['id' => $id]);
	}

	public function save()
	{
		$sql = "INSERT INTO {$this->table} (username, email, password, created_at) VALUES (:username, :email, :password, :created_at)";
		$params = [ 'username' => $this->username, 'email' => $this->email, 'password' => $this->password, 'created_at' => $this->createdAt];
		
		return setData($sql, $params);
	}
	public function edit($id)
	{
		$sql = " UPDATE {$this->table} SET 'username' =>$this->username 


		 WHERE id = :id";
		return getData($sql, ['id' => $id]);
	}
}