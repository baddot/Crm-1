<?php ob_start(); ?>
<?php
/**
* 
*/
class cInicio extends CI_Controller
{
	function __construct()
	{
		parent::__construct();			
	}
	public function index(){
		$this->load->view('crm/header');
		$this->load->view('crm/menu');
		$this->load->view('crm/vInicio');
		$this->load->view('crm/footer');
	}
}
	
?>