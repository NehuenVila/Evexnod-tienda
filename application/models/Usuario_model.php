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

	public function alta_compras($data){
		return $this->db->insert('compras', $data);
	}

	public function verificar_compra($juego, $usuario_id){
		$this->db->select('compras.*');
		$this->db->from('compras');
		$this->db->where('usuario_id', $usuario_id);
		$this->db->where('juego_id', $juego);
		$consulta = $this->db->get();
		return $consulta->row();
	}

	public function obtener_puntajes(){
		$this->db->select('puntajes.puntaje, usuarios.nombre');
		$this->db->from('puntajes');
		$this->db->join('usuarios', 'puntajes.usuario_id = usuarios.id');
		$this->db->order_by('puntajes.puntaje', 'DESC');
		$consulta = $this->db->get();
		return $consulta->result();
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