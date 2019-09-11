<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Usuario_model');

    }

	public function index()
	{
		// ver si session esta iniciada
		if($this->session->has_userdata('usuario')&&$this->session->has_userdata('password'))
		{
			// si la session esta abierta
			redirect('inicio/mostrar_tienda');
			return;
		}

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('pagina_principal');
		$this->load->view('footer');
	}

	public function evexnod2()
	{
		$this->load->view('header');
		$this->load->view('navbar2');
		$this->load->view('carousel');
		$this->load->view('inicio2');
		$this->load->view('expositores');
		$this->load->view('premium');
		$this->load->view('noticias');
		$this->load->view('footer2');
	}

	public function mostrar_registro()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('signup_screen');
		$this->load->view('footer');
	}

	public function registrarse()
	{
		
		$u_nombre = $this->input->post('r_nombre');
		$u_apellido = $this->input->post('r_apellido');
		$u_correo = $this->input->post('r_mail');
		$u_clave = $this->input->post('r_clave');

		$u_data = array
		(
			'nombre'=> $u_nombre,
			'apellido'=> $u_apellido,
			'correo'=> $u_correo,
			'clave'=> $u_clave
		);

		
		//if(empty($this->Usuario_model->verificar('correo', $u_correo))) // otra forma de hacer lo que esta abajo
		$consulta = $this->Usuario_model->verificar('correo', $u_correo); // verificar si existe el correo en db
		if($consulta)
		{
			//correo existe no se puede registrar en la base de datos
			echo "correo en uso";
		}
		else
		{
			//si el correo no esta en uso carga los datos en la base de datos
			$this->Usuario_model->insertar($u_data);
			redirect('inicio');
		}
		
		
	}

	public function mostrar_login()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('login_screen');
		$this->load->view('footer');
	}

	public function login()
	{
		$u_correo = $this->input->post('l_mail');
		$u_clave = $this->input->post('l_clave');

		$u_data = array
		(
			'correo'=> $u_correo,
			'clave'=> $u_clave,
			'monedas' => 1000
		);
		if ($this->Usuario_model->verificar('correo', $u_correo)) // si el correo ingresado existe
		{
			$fila = $this->Usuario_model->verificar('correo', $u_correo); // trae todos los datos con ese correo

			if ($u_data['clave'] == $fila->clave) // si la clave ingresada concuerda con la clave de ese correo
			{
				//si los datos son correctos
				$this->session->set_userdata($u_data);
				redirect('inicio');
			}
			else
			{
				// no se pudo iniciar sesion datos incorrectos
				echo "datos incorrectos";
			}
		}
		echo "Mail incorrecto";		
	}

	public function mostrar_tienda()
	{
		$planilla1 = array
		(
			'imagen' => 'https://store.playstation.com/store/api/chihiro/00_09_000/container/ES/es/999/EP1003-CUSA06560_00-MNCRSHFULLBUNEIS/1557966366000/image?w=240&h=240&bg_color=000000&opacity=100&_version=00_09_000',
			'descripcion' => 'el juego del euricio',
			'nombre' => 'PREY',
			'precio' => '$500'
		);

		$planilla2 = array
		(
			'imagen' => 'https://originassets.akamaized.net/origin-com-store-final-assets-prod/193632/231.0x326.0/1036451_LB_231x326_en_US_%5E_2017-10-06-22-35-54_254c746f36fdb1f4c9de2634d498aae343dc4cd6.jpg',
			'descripcion' => 'el juego de los autos pro',
			'nombre' => 'NEED FOR SPEED',
			'precio' => '$5000'
		);

		$planilla3 = array
		(
			'imagen' => 'https://store-images.s-microsoft.com/image/apps.17382.13510798887677013.afcc99fc-bdcc-4b9c-8261-4b2cd93b8845.49beb011-7271-4f15-a78b-422c511871e4?mode=scale&q=90&h=300&w=200',
			'descripcion' => 'jueguito',
			'nombre' => 'MINECRAFT',
			'precio' => '$200'
		);

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('planilla_tienda', $planilla1);
		$this->load->view('planilla_tienda', $planilla2);
		$this->load->view('planilla_tienda', $planilla3);
		$this->load->view('footer');
	}

	public function mostrar_registro_imagen()
	{
		$this->load->view('header');
		$this->load->view('prueba_imagenes');
		$this->load->view('footer');
	}

	public function upload()
	{
		if ($_FILES['imagen'] ['name'])
		{
			$config['file_name'] 		= 'imagen_'.rand();
			$config['upload_path'] 		= './upload/';
			$config['quality'] 			= '70%';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= '9000';
			$config['overwrite']		= TRUE;

			$this->load->library('upload', $config);
			$this->upload->do_upload('imagen');
			$this->upload->data();
		}
	}

	 public function prueba_ajax1()
	{
		$prueba = 'hola';
		echo $prueba;
	}
}
