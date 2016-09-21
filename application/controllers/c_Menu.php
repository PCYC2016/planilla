<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');

class c_Menu extends CI_Controller {	

	public function __construct(){
		parent::__construct();
		$this->load->library("multi_menu");
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->model("m_Menu", "menu");
	}

	public function index(){
		$usuario   = $this->session->userdata('username');
		$loginuser = $this->session->userdata('loginuser');
	  if ($loginuser == TRUE){ 
		$menus = $this->menu->MenuUsuario($usuario);
		$data['activeTabPlanilla'] = "";
		$data['activeTabContabilidad'] = "";
		$data['activeTabInventario'] = "";
		foreach ($menus as $fila) {
		if ($fila['planilla'] == 'T')
		{
			$this->load->model("m_Menu", "menu");
			$itemsPlanilla = $this->menu->MenuPlanilla();	
			$this->multi_menu->set_items($itemsPlanilla);
			$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
			$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
			$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
			$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
			$config["item_divider"]          = "<li class='divider'></li>";
			$this->multi_menu->initialize($config);
			$data['activeTabPlanilla'] = $this->multi_menu->render();
			
	     }
	    if ($fila['conta'] == 'T')
		{
			$itemsContabilidad = $this->menu->MenuContabilidad();
			$this->multi_menu->set_items($itemsContabilidad);
			$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
			$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
			$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
			$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
			$config["item_divider"]          = "<li class='divider'></li>";
			$this->multi_menu->initialize($config);
			$data['activeTabContabilidad'] = $this->multi_menu->render();
	     }
	    if ($fila['inventario'] == 'T')
		{
			$itemsInventario = $this->menu->MenuInventario();
			$this->multi_menu->set_items($itemsInventario);
			$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
			$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
			$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
			$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
			$config["item_divider"]          = "<li class='divider'></li>";
			$this->multi_menu->initialize($config);
			$data['activeTabInventario'] = $this->multi_menu->render();
	     }
	    }
	    $this->load->view("v_Head");
	    $this->load->view("v_Menu",$data);
	}
	else{
       $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
       redirect('c_Login/index');
    }
  }
  public function Logout(){
  	    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Sesión cerrada!</div>');
  	    $this->session->unset_userdata('username');
        $this->session->unset_userdata('loginuser');
  		redirect('c_Login/index');
  		
  }
}