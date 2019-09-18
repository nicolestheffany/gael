<?php
class OS_model extends CI_Model
{
	public $id_os;
	public $responsavel;
	public $equipamento_id;
	public $numero_OS;
	public $data_criacao;

	public function __construct(){
		 parent::__construct();
	}


	public function inserir()
	{
        $dados = array("responsavel" => $this->responsavel,
                        "equipamento_id" => $this->equipamento_id,
						"numero_OS" => $this->numero_OS,
						"data_criacao" => $this->data_criacao,
                    );
		/*
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();*/
		return $this->db->insert('OS',$dados);
	}
	public function recuperar(){
		$query = $this->db->get('OS');
		return $query->result();
	}

   

	public function recuperarUm($id){
        $this->db->where('id_os',$id);
        $query = $this->db->get('OS');
        return $query->row();
    }
	public function update(){
        $this->db->set('responsavel', $this->responsavel);
        $this->db->set('equipamento_id', $this->equipamento_id);
		$this->db->set('numero_OS', $this->numero_OS);
        $this->db->set('data_criacao', $this->data_criacao);
        

        $this->db->where('id_os', $this->id_os);
        $this->db->update('OS');

	}
	//função para deletar uma meta.
	public function delete($id)
    {
        $this->db->where('id_os', $id);
        $this->db->delete('OS');
    }

}