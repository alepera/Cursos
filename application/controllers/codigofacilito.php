<?php if ( ! defined('BASEPATH')) exit('No se permite acceso al scrip');

class Codigofacilito extends CI_Controller {
    function __construct(){
        parent::__construct(); 
        $this->load->helper('form');
        $this->load->model('codigofacilito_model');
      
    }
	public function index(){	
        $this->load->library('Menu',array('Inicio','Contacto','Cursos'));
        $data['mi_menu'] = $this->menu->construirMenu();
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido',$data);
    }
    public function holamundo()
	{	
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
    }
    
    public function nuevo()
	{	
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/formulario');
    }
    public function recibirDatos()
	{	
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'videos' => $this->input->post('videos')
        );
        $this->codigofacilito_model->crearCurso($data);
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
    }

}

?>
