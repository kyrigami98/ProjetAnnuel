<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	
	public function index()
	{
		$data['contents'] = 'index';
		$this->load->view('templates/template', $data);
	}
	
	public function accueil()
	{
		// TODO: Modif à faire en fonctions que ce soit un prof, etudiant ou admin
		if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"])
		{
			$data['contents'] = 'accueil';
			$this->load->view('templates/template', $data);
		}
		
	}
	
	public function connect_etudiant()
	{
		
		$data = array();
		$mail = $_POST['mail'];
		$mdp = md5($_POST['pass']); // Mot de passe formulaire
		
		$this->load->model('User');
		$this->load->database();

		$query = $this->User->get_user_by_mail($mail);
		$res = array();
		
		foreach ($query->result() as $key=>$row){
			$res['email'] = $row->email;
			$res['pwd'] = $row->pwd;
			$res['prenom'] = $row->prenom;
			$res['nom'] = $row->nom;
            $res['idUser'] = $row->idUser;
			$res['statut'] = $row->statut;
		}
		
		if(isset($res['pwd']) && $res['pwd'] === $mdp){
			$user_data = array(
					'prenom'  => $res['prenom'],
					'nom'     => $res['nom'],
					'mail'	  => $res['email'],
					'idUser'  => $res['idUser'],
					'statut'  =>$res['statut'],
					'logged_in' => TRUE
			);

		$this->session->set_userdata($user_data);

		redirect('Reservation/accueil');
		}       
        else
		{
			$this->session->set_userdata('logged_in', FALSE);
			redirect('');
		}
		$this->db->close();
	}
	
	public function inscription_etudiant()
	{
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$pwd = md5($_POST['pwd']);
		
		$this->load->model('User');
		//TODO: Mettre regle de verif champs
		

		$this->User->insert_user($email, $nom, $prenom, $statut, $pwd);
		
		
	}
	
	public function deconnection()
	{
		$this->session->sess_destroy(); // Détruit la session
		redirect(base_url()); // Redirige vers la page index
	}
	
}
