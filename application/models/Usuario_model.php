<?php
class Usuario_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function insertar($data){
		return $this->db->insert('usuarios', $data);
	}
	public function alta_puntaje($data){
		return $this->db->insert('puntajes', $data);
	}

	public function verificar($nombre_atributo, $valor_atributo)
	{
		$this->db->select('usuarios.*');
		$this->db->from('usuarios');
		$this->db->where('usuarios.'.$nombre_atributo, $valor_atributo);
		$consulta = $this->db->get();
		return $consulta->row();
	}
	public function modifica($data, $id)
	{
		$this->db->where('usuarios.id', $id);
		return $this->db->update('usuarios', $data);
	}

}