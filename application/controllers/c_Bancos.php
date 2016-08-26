<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class c_Bancos extends CI_Controller {
	function index(){
//cargo el helper de url, con funciones para trabajo con URL del sitio
		$this->load->helper('url');
//cargo el modelo de Bancos
		$this->load->model('m_Bancos');
//pido los Bancos
		$setBancos = $this->m_Bancos->get_Bancos();
//creo el array con datos de configuración para la vista
		$datos_vista = array('rs_Bancos' => $setBancos);
//cargo la vista pasando los datos de configuacion
		$this->load->view('v_Bancos',$datos_vista);
	}
}
?> 