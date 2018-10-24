<?php if ( ! defined('BASEPATH')) exit('No se permite acceso al scrip');

class Codigofacilito_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function crearCurso($data){
        $this->db->insert('cursos',array('nombreCurso'=>$data['nombre'],'videosCurso'=> $data['video']));
    }
}
?>