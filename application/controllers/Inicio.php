<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('usuario_model');

	}

	public function index()
	{
		$userdata = $this->session->userdata();
		// ver si session esta iniciada

		$this->load->view('header', $userdata);
		$this->load->view('navbar2');
		$this->load->view('carousel');
		$this->load->view('inicio2');
		$this->load->view('expositores');
		$this->load->view('premium');
		$this->load->view('noticias');
		$this->load->view('footer2');
	}

	public function perfil_usuario()
	{
		$userdata = $this->session->userdata();
		$this->load->view('header', $userdata);
		$this->load->view('navbar2');
		$this->load->view('inicio2');
		$this->load->view('perfil_usuario');

		$this->load->view('footer2');
	}

	public function error($tipo)
	{
		if($tipo==1)
		{
			$this->load->view('header');
			$this->load->view('navbar2');

			$this->load->view('error_sesion');
		}else{
			$this->load->view('header');
			$this->load->view('navbar2');

			$this->load->view('error_premium');
		}
		$this->load->view('footer2');
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

	public function tienda($id)
	{
		$usuario_id = $this->session->userdata('id');
		$consulta = $this->usuario_model->verificar_compra($id, $usuario_id);
		// $tiene_juego = 0;
		// if ($consulta) {
		// 	$tiene_juego = 1;
		// }
		print_r($consulta);
		$data = array('tiene_juego' => ($consulta) ? 1 : 0 );
		$this->load->view('header', $this->session->userdata());
		$this->load->view('navbar2');
		$this->load->view('store_carousel');
		$this->load->view('store_juego', $data);
		$this->load->view('inicio2');
		$this->load->view('store_header');
		// $this->load->view('store_final');
		$this->load->view('store_desc');

		$this->load->view('footer2');
	}

	public function juego()
	{	
		$id = $this->session->userdata('id');
		$premium = $this->session->userdata('premium');
		if (!$id) {
			$this->load->view('header', $this->session->userdata());
			$this->load->view('navbar2');
			$this->load->view('error_sesion');
			$this->load->view('footer2');		
		}else if($premium == 0){
			$this->load->view('header', $this->session->userdata());
			$this->load->view('navbar2');
			$this->load->view('error_premium');
			$this->load->view('footer2');
		}else{

			$lista_puntajes = $this->usuario_model->obtener_puntajes();
			$data = array('puntajes' => $lista_puntajes);
			$this->load->view('header', $this->session->userdata());
			$this->load->view('navbar2');
			$this->load->view('game', $data);
			$this->load->view('footer2');
		}

		
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
		$u_correo = $this->input->post('r_mail');
		$u_clave = $this->input->post('r_clave');

		$u_data = array
		(
			'nombre'=> $u_nombre,
			'correo'=> $u_correo,
			'clave'=> $u_clave
		);

		
		//if(empty($this->usuario_model->verificar('correo', $u_correo))) // otra forma de hacer lo que esta abajo
		$consulta = $this->usuario_model->verificar('correo', $u_correo); // verificar si existe el correo en db
		if($consulta)
		{
			//correo existe no se puede registrar en la base de datos
			$this->session->set_userdata('error', "el correo ya esta en uso");
			redirect('inicio');
		}
		else
		{
			//si el correo no esta en uso carga los datos en la base de datos
			$this->usuario_model->insertar($u_data);
			$this->session->set_userdata('success', "cuenta creada con exito");
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
		if ($this->usuario_model->verificar('correo', $u_correo)) // si el correo ingresado existe
		{
			$fila = $this->usuario_model->verificar('correo', $u_correo); // trae todos los datos con ese correo

			if ($u_data['clave'] == $fila->clave) // si la clave ingresada concuerda con la clave de ese correo
			{
				//si los datos son correctos
				$this->session->set_userdata((array)$fila);
				$this->session->set_userdata('success', "Sesion iniciada");
				redirect('inicio');
			}
			else
			{
				// no se pudo iniciar sesion datos incorrectos
				$this->session->set_userdata('error', "datos incorrectos");
				redirect('inicio');
			}
		}
		$this->session->set_userdata('error', "Datos incorrectos");		
		redirect('inicio');
	}

	public function cerrar_sesion()
	{
		$this->session->sess_destroy();
		redirect('inicio');
	}

	public function comprar_monedas(){

		$cantidad 	= $this->input->post('monedas');
		$usuario_id	= $this->session->userdata('id');
		$creditos 	= $this->session->userdata('creditos');

		$data = array( 'creditos' => $creditos + $cantidad );
		$this->usuario_model->modifica($data, $usuario_id);
		$usuario_actualizado = $this->usuario_model->verificar('id', $usuario_id);
		$this->session->set_userdata('creditos', $usuario_actualizado->creditos);
		$this->session->set_userdata('success', "Compra realizada con exito");
		redirect('inicio');
		
	}

	public function comprar_premium(){

		$usuario_id	= $this->session->userdata('id');
		$premium 	= $this->session->userdata('premium');
		$creditos 	= $this->session->userdata('creditos');

		if ($creditos >= 100) {
			$data = array('premium' => $premium = 1,'creditos' => $creditos -100);
			$this->usuario_model->modifica($data, $usuario_id);
			$usuario_actualizado = $this->usuario_model->verificar('id', $usuario_id);
			$this->session->set_userdata('premium', $usuario_actualizado->premium);
			$this->session->set_userdata('creditos', $usuario_actualizado->creditos);
			$this->session->set_userdata('success', "Compra realizada con exito");
			redirect('inicio');
		}else{
			$this->session->set_userdata('error', "Monedas insuficientes");
			redirect('inicio');
		}	

	}

	public function comprar_juego($id){

		$creditos = $this->session->userdata('creditos');
		$juego_id = $id;
		$precio = $this->input->post('precio');
		$usuario_id = $this->session->userdata('id');

		if($creditos >= $precio){
			$data = array('juego_id' => $juego_id, 'usuario_id' => $usuario_id);
			$this->usuario_model->alta_compras($data);
			$data = array('creditos' => $creditos -$precio);
			$this->usuario_model->modifica($data, $usuario_id);
			$usuario_actualizado = $this->usuario_model->verificar('id', $usuario_id);
			$this->session->set_userdata('creditos', $usuario_actualizado->creditos);
			$this->session->set_userdata('success', "Compra realizada con éxito");
			redirect('inicio/tienda'.'/'.$juego_id);
		}else{
			$this->session->set_userdata('error', "Monedas insuficientes");
			redirect('inicio/tienda'.'/'.$juego_id);
		}
	}


	public function guardar_puntaje(){
		$puntaje = $this->input->post('puntaje');
		$usuario_id = $this->session->userdata('id');
		$data = array(
			'puntaje' => $puntaje,
			'usuario_id' => $usuario_id
		);
		$data_puntaje = $this->usuario_model->alta_puntaje($data);

		echo json_encode($data_puntaje);
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
