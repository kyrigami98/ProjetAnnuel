<?php
class User extends CI_Model
{
	private $table = 'user';
	private $idUser;
    private $email;   
    private $nom;
    private $prenom;
    private $pwd;
    private $statut;
    
	
	public function get_user_by_id($id)
	{
		return $this->db->select('*')
				->from($this->table)
				->where('idUser', $id)
				->get();
	}
	
	public function get_user_by_mail($mail)
	{
		return $this->db->select('*')
				->from($this->table)
				->where('email', $mail)
				->get();
	}
	
	public function insert_user($email, $nom, $prenom, $statut, $pwd)
	{
		$data = array(
			'email' => $email,
			'nom' => $nom,
			'prenom' => $prenom,
			'statut' => $statut,
			'pwd' => $pwd
		);

		return $this->db->insert($this->table, $data);
	}
	
	
	
}
?>