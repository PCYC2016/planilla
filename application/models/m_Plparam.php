<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
 class m_Plparam extends CI_Model {
 	function __construct(){
 		parent::__construct();
 	}
 	function get_Empresa(){
 		$ssql = "SELECT FormaPago,DiasLabor,HorasDia,
 		HorasNoche,FactorHED,FactorHEN,FactorHEV,NomGerente,NomContado FROM empresa";
        $rs_Empresa = $this->db->query($ssql);
 		return  $rs_Empresa->result();
 	}
 }
 ?> 