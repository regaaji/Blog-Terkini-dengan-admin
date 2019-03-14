<?php 

/**
 * 
 */
use Dompdf\Dompdf;
class PDF extends Dompdf
{
	public $filename;

	public function __construct()
	{
		parent::__construct();
		$this->filename = "cetak.pdf";
	}
	
	function ci()
	{
		return get_instance();
	}

	function load_view($view, $data = [])
	{
		$html = $this->ci()->load->view($view, $data, true);
		$this->load_html($html);
		//$this->set_option(DOMPDF_ENABLE_REMOTE, true);
		$this->render();
		$this->stream($this->filename, ['Attachemnt' => false]);
	}
}