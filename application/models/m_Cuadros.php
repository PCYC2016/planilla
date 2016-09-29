<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
 class m_Cuadros extends CI_Model {
 	function __construct(){
 		parent::__construct();
 	}
 	function get_Cuadros(){
 		//Variables
 		$Isss  = 'Isss';
 		$Afp   = 'AFP';
 		$Renta = 'Renta';
        $Dias  = 'Dias';
        $Agui  = 'Agui';
 		$Tipo  = 'Otros';
 		//Arreglo Isss
 		$ssqlIsss = "EXECUTE pc_m_Cuadros ?,?";
 		$paramsIsss = array($Isss,$Tipo);
        $rs_Isss = $this->db->query($ssqlIsss,$paramsIsss);
        $rs_Cuadros['rs_Isss'] = $rs_Isss->result();
        //Arreglo AFP
 		$ssqlAFP = "EXECUTE pc_m_Cuadros ?,?";
 		$paramsAFP = array('',$Afp);
        $rs_AFP = $this->db->query($ssqlAFP,$paramsAFP);
        $rs_Cuadros['rs_AFP'] = $rs_AFP->result();
        //Arreglo Renta
        $ssqlRenta = "EXECUTE pc_m_Cuadros ?,?";
 		$paramsRenta = array($Renta,$Tipo);
        $rs_Renta = $this->db->query($ssqlRenta,$paramsRenta); 		
 		$rs_Cuadros['rs_Renta'] = $rs_Renta->result();
 		//Arreglo Dias
        $ssqlDias = "EXECUTE pc_m_Cuadros ?,?";
 		$paramsDias = array($Dias,$Tipo);
        $rs_Dias = $this->db->query($ssqlDias,$paramsDias); 		
 		$rs_Cuadros['rs_Dias'] = $rs_Dias->result();
 		//Arreglo Aguinaldo
        $ssqlAgui = "EXECUTE pc_m_Cuadros ?,?";
 		$paramsAgui = array($Agui,$Tipo);
        $rs_Agui = $this->db->query($ssqlAgui,$paramsAgui); 		
 		$rs_Cuadros['rs_Agui'] = $rs_Agui->result();
 		return  $rs_Cuadros;
 	}
 }
 ?> 