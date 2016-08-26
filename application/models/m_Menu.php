<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class m_Menu extends CI_Model {
 	public function MenuUsuario($usuario){
 		$ssql = "SELECT planilla,conta,cxc,inventario FROM usuarios WHERE codusuario ='".$usuario."'";
        $rs_menus= $this->db->query($ssql);
 		return  $rs_menus->result_array();
 	}
 	public function MenuPlanilla(){
 		$ssql = "SELECT * FROM menus WHERE parent in(1,2,3,4,5,6,7) or id in(1,2,3,4,5,6,7)";
        $rs_MenuPlanilla = $this->db->query($ssql);
 		return  $rs_MenuPlanilla->result_array();
 	}
 	public function MenuContabilidad(){
 		$ssql = "SELECT * FROM menus WHERE parent in(8) or id in(8)";
        $rs_MenuContabilidad = $this->db->query($ssql);
 		return  $rs_MenuContabilidad->result_array();
 	}
 	public function MenuInventario(){
 		$ssql = "SELECT * FROM menus WHERE parent in(9) or id in(9)";
        $rs_MenuInventario = $this->db->query($ssql);
 		return  $rs_MenuInventario->result_array();
 	}
}