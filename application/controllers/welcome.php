<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Welcome extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/index.php/welcome
	 * - or -
	 * http://example.com/index.php/welcome/index
	 * - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * 
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->model ( 'db_model', 'db_model' );
		$tables_sql = $this->db_model->list_tables('public');
		$tables = array();
		foreach ($tables_sql as $table_sql) {
			$tableObject = new stdClass ();
			$tableObject->name = $table_sql->table_name;
			
			$fields = $this->db_model->list_fields($tableObject->name,'public');
			$tableObject->fields = $fields;
			$tables[] = $tableObject;
		}
		
		$data = array (
				'tables' => $tables
		);
		$this->load->view ( 'welcome_message', $data );
	}
	
	
	public function procedure() {
		$this->load->model ( 'db_model', 'db_model' );
		$tables_sql = $this->db_model->list_tables('public');
		$tables = array();
		foreach ($tables_sql as $table_sql) {
			$tableObject = new stdClass ();
			$tableObject->name = $table_sql->table_name;
				
			$fields = $this->db_model->list_fields($tableObject->name,'public');
			$tableObject->fields = $fields;
			$tables[] = $tableObject;
		}
	
		$data = array (
				'tables' => $tables
		);
		$this->load->view ( 'procedure', $data );
	}
	
	public function drop_trigger() {
		$this->load->model ( 'db_model', 'db_model' );
		$tables_sql = $this->db_model->list_tables('public');
		$tables = array();
		foreach ($tables_sql as $table_sql) {
			$tableObject = new stdClass ();
			$tableObject->name = $table_sql->table_name;
	
			$fields = $this->db_model->list_fields($tableObject->name,'public');
			$tableObject->fields = $fields;
			$tables[] = $tableObject;
		}
	
		$data = array (
				'tables' => $tables
		);
		$this->load->view ( 'drop_trigger', $data );
	}
	
	
	public function exec_procedure() {
		$this->load->model ( 'db_model', 'db_model' );
		$tables_sql = $this->db_model->list_tables('public');
		$tables = array();
		foreach ($tables_sql as $table_sql) {
			$tableObject = new stdClass ();
			$tableObject->name = $table_sql->table_name;
	
			$fields = $this->db_model->list_fields($tableObject->name,'public');
			$tableObject->fields = $fields;
			$tables[] = $tableObject;
		}
	
		$data = array (
				'tables' => $tables
		);
		$this->load->view ( 'exec_procedure', $data );
	}
	
	public function recuperar() {
		$this->load->model ( 'db_model', 'db_model' );
		$tables_sql = $this->db_model->list_tables('public');
		$tables = array();
		foreach ($tables_sql as $table_sql) {
			$tableObject = new stdClass ();
			$tableObject->name = $table_sql->table_name;
	
			$fields = $this->db_model->list_fields($tableObject->name,'public');
			$tableObject->fields = $fields;
			$tables[] = $tableObject;
		}
	
		$data = array (
				'tables' => $tables
		);
		$this->load->view ( 'recuperar', $data );
	}
	
	public function add_id_usuario() {
		$this->load->model ( 'db_model', 'db_model' );
		$tables_sql = $this->db_model->list_tables('public');
		$tables = array();
		foreach ($tables_sql as $table_sql) {
			$tableObject = new stdClass ();
			$tableObject->name = $table_sql->table_name;
			$tables[] = $tableObject;
		}
	
		$data = array (
				'tables' => $tables
		);
		$this->load->view ( 'add_id_usuario', $data );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */