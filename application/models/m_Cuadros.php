<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
 class m_Cuadros extends CI_Model {
 	function __construct(){
 		parent::__construct();
 	}
 	function get_Cuadros(){
 		$Instituto = 'Isss';
 		$Tipo ='Otros';
 		$ssql = "EXECUTE pc_m_Cuadros ?,?";
 		$params = array($Instituto,$Tipo);
        $rs_Cuadros = $this->db->query($ssql,$params);
 		return  $rs_Cuadros->result();
 	}
 }
 ?> 