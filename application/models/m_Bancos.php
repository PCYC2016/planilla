<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
 class m_Bancos extends CI_Model {
 	function __construct(){
 		parent::__construct();
 	}
 	function get_Bancos(){
 		$ssql = "SELECT codbanco,nombanco FROM bancos";
        $rs_Bancos = $this->db->query($ssql);
 		return  $rs_Bancos->result();
 	}
 }
 ?> 