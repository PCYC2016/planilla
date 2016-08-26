<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
 class m_Login extends CI_Model {
 	function __construct(){
 		parent::__construct();
 	}
 	function get_user($usr, $pwd){
 		$ssql = "SELECT codusuario FROM usuarios WHERE pwdcompare('$pwd',contrasena) = 1 AND codusuario ='".$usr."'";
        $rs_usuarios= $this->db->query($ssql);
 		return  $rs_usuarios->result();
 	}
 }
 ?> 