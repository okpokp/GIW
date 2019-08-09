<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('index');
	}
	// public function recieve()
	// {
	// 	$user = $this->input->post('username');
	// 	//echo $user ;
	// 	$pass = $this->input->post('password');
	// 	$submit = $this->input->post('Submit'); // เก็บค่า post('name') ของปุ่ม Submit
	// 	$cancel = $this->input->post('Cancel');
	// 	$plus = $this->input->post('plus');
	// 	$del = $this->input->post('delete');
	// 	$log = $this->input->post('Log');
	// 	$out = $this->input->post('Out');
	// 	$name = array(
	// 		'user' => $this->input->post('username'), // 'user' ใส่แทน ตน.แรก ของอาเรย์ แล้วรับค่า  name จากไฟล์ login_form
	// 		'pass' => $this->input->post('password'),
	// 		'id' => $this->input->post('id')
	// 	);
	// 	if ($submit == 'submit') // $submit =='value' ของ login_form
	// 	{
	// 		echo "<pre/>"; //เว้นบรรทัด
	// 		// print_r($name); //ปริ้น array
	// 		// print_r($data);
	// 		//echo "<br/>".$this->input->post('username'); //แสดงค่า  username จากฝั่ง login_formตัว input
	// 		//var_dump($name);
	// 		// //sort($name); //มีสำเร็จรูป sort เรียงข้อมูล count เก็บจำนวนทั้งหมดในarray
	// 		// $length = count($name);
	// 		//   for($x = 0; $x < $length; $x++) {
	// 		//       echo $name[$x];
	// 		//       echo "<br>";
	// 		//     }
	//
	// 		foreach ($name as $x => $x_value) //นำค่าใน อาเรมาเเสดง
	// 		{
	// 			echo  "<input type = 'button' class = 'button' value= '" . $x . " is " . $x_value . "'/>";
	// 			//echo "<input type ='button' class='button' value='" .intval($array2[$i]+$array2[$i+1])."' />";
	// 			echo "<br>";
	// 		}
	// 	} elseif ($plus == 'plus') {
	//
	// 		$sum = $user + $pass;
	// 		echo "<input type='button' class= 'button' value='" . " sum is " . $sum . "' />";
	// 	} elseif ($del == 'delete') {
	// 		$minus = $user - $pass;
	// 		echo "<input type = 'button' class = 'button' value='" . "minus is " . $minus . "'/>";
	// 	} elseif ($log == 'Log') {
	// 		if ($user == $name['user'] && $pass == $name['pass']) {
	// 			echo "success";
	// 		}
	// 	}
	// 	else {
	//
	// 		echo 'error';
	// 	}
	// }
	//
	// public function lo()
	// {
	// 	$this->load->view('login_form');
	// }
	public function Re()
	{
		$btn = $this->input->post('submit');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$data = array(
			'user' => $this->input->post('user'),
			'pass' => $this->input->post('pass')
		);
		$this->load->model('model');
		$this->model->insert($data);
		$s=$this->model->show($data);
		echo"<pre>";print_r($s); //เอาไว้เช็คค่า
		echo $s->row('user')."<br>";// แสดงค่า 1 ตัว ใส่ row
		foreach ($s->result() as $row) //แสดงค่า หลายตัว result ทั้งหมดของตาราง
		{
						echo  "user is ".$row->user."<br>";
						echo "password is ".$row->pass."<br>";
		}

		$this->load->view('index');


		// redirect(base_url('Controller/index'));

		//$this->model->show();
	}

	// public function cha()
	// {
	// 	$this->load->view('chaview');
	// }
}
?>
<!-- ถ้าจะใช้pgadmin ต้องไปxampp กด config apache php.ini clt+f หาคำว่า pdo เอา ; ออกตรง extension=php_pdo_mysql -->
<!-- อย่าลืมสร้างไฟล์นอก โปรเจคเรา ชื่อ .htaccess แล้วก็อปมาว่างเลย   -->
