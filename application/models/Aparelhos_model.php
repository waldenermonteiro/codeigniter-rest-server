<?php
class Aparelhos_model extends CI_Model{
  private $tabela = 'aparelhos';

  public function inserir($aparelho) {
   $sucesso = $this->db->insert($this->tabela, $aparelho);
   return $sucesso;
 }

 public function listar(){
  return $this->db->get($this->tabela)->result_array();
}
public function editar($id){
  $this->db->where('id', $id);
  return  $this->db->get($this->tabela)->row_array();
}
public function excluir($id) {
  $this->db->where('id', $id);
  return $this->db->delete($this->tabela);;
}
public function atualizar($id,$data){
 $this->db->where('id', $id);
 return $this->db->update($this->tabela, $data);

}
}