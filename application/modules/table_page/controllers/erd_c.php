
<?php
class Erd_c extends MY_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->library('erd_lib');
	}

	function index()
	{
		$data["erd_two"] = $this->erd_lib->erd_two();
		$data["erd_three"] = $this->erd_lib->erd_three();
		$data["model_two"] = $this->erd_lib->model_two();


		// header('Content-Type: application/json');
		// echo json_encode($class);
		// exit;

		$this->load->view('erd_v', $data);
	}

}
