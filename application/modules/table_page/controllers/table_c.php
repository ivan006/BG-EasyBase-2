<?php
class Table_c extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		// $this->load->model('trip');
		// $this->load->library('../modules/trips/controllers/table_page_lib');
		$this->load->library('table_page_lib');
	}

	public function index($table_page_lib_table)
	{
		$data["rows"]["all"] = $this->table_page_lib->table_rows($table_page_lib_table);
		$data["rows"]["visible"] = array();
		echo "<pre>";
		var_dump($data["rows"]["all"]);
		foreach ($data["rows"]["all"] as $key => $value) {
			$data["rows"]["visible"][$key] = $value;
		}
		$data["overview"]["foreign_plural"] = $table_page_lib_table;
		$data["overview"]["foreign_singular"] = $this->erd_lib->grammar_singular($data["overview"]["foreign_plural"]);
		$data["overview"]["rel_name"] = $data["overview"]["foreign_singular"];
		$data["data_endpoint"] = $table_page_lib_table."/fetch";
		$data['title'] = $table_page_lib_table;
		$this->load->view('table_header_v', $data);
		$this->load->view('table_block_v', $data);
		$this->load->view('table_footer_v');

	}

	public function insert($table_page_lib_table)
	{
		$result = $this->table_page_lib->insert($table_page_lib_table);
		header('Content-Type: application/json');
		echo json_encode($result, JSON_PRETTY_PRINT);
	}

	public function fetch($table_page_lib_table)
	{
		$result = $this->table_page_lib->fetch($table_page_lib_table);
		header('Content-Type: application/json');
		echo json_encode($result, JSON_PRETTY_PRINT);
	}

	public function fetch_where($table, $haystack, $needle)
	{
		$result = $this->table_page_lib->fetch_where($table, $haystack, $needle);
		header('Content-Type: application/json');
		echo json_encode($result, JSON_PRETTY_PRINT);
	}

	public function fetch_join_where($table_1, $table_2, $haystack, $needle)
	{
		$result = $this->table_page_lib->fetch_join_where($table_1, $table_2, $haystack, $needle);
		header('Content-Type: application/json');
		echo json_encode($result, JSON_PRETTY_PRINT);
	}

	public function delete($table_page_lib_table)
	{
		$result = $this->table_page_lib->delete($table_page_lib_table);
		header('Content-Type: application/json');
		echo json_encode($result, JSON_PRETTY_PRINT);
	}

	public function edit($table_page_lib_table)
	{
		$result = $this->table_page_lib->edit($table_page_lib_table);
		header('Content-Type: application/json');
		echo json_encode($result, JSON_PRETTY_PRINT);
	}

	public function update($table_page_lib_table)
	{
		$result = $this->table_page_lib->update($table_page_lib_table);
		header('Content-Type: application/json');
		echo json_encode($result, JSON_PRETTY_PRINT);
	}
}
