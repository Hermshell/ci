<?php

// application/controllers/Produits.php



defined('BASEPATH') or exit('No direct script access allowed');



class Produits extends CI_Controller //La classe Produits hérite de la base CI Controller 

{


  //Contrôle de la vue liste///////////////////////////////////////////////


    public function liste()

    {    // Charge la librairie 'database'
	
    $this->load->database();
	
 
	
    // Exécute la requête 
	
      $results = $this->db->query("SELECT * FROM produits");    
	    
 
	
    // Récupération des résultats    
	
    $aListe = $results->result();    
	 
 
	
    // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue      
	
    $aView["liste_produits"] = $aListe;
	  
 
	
    // Appel de la vue avec transmission du tableau  
	
    $this->load->view('pages/liste', $aView);
    }

  //Fonction contrôle de la vue ajout///////////////////////////////
  

public function ajout() //public fonction du formulaire ajout
	
{
  
    $this->load->helper('form'); //ouverture du formulaire
    $this->load->library('form_validation');
 
	
    
  if ($this->input->post()) { // 2ème appel de la page: traitement du formulaire se déclenche si le controleur reçoit les données du formulaire
	
    $this->load->database();
    $data = $this->input->post();
     
    if ($data['pro_bloque']==0) //Si la valeur de pro_bloque est 0 alors on lui attribut la valeur null
    {
      $data['pro_bloque']=null;
    }
    
   
   
        //Upload de fichier////////////////////////////////////////////////////////////

             //Obtention du max id

             $results=$this->db->query("SELECT AUTO_INCREMENT as max FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'jarditou' AND TABLE_NAME = 'produits';"); //Requête  pour l'obtention du maximum d'id suivant
             $max_id=$results->result(); //Stockage du résultat de la requete dans une variable (Stockage des résultats sous forme de tableau contenant des objets)
             $extention=$this->input->post("pro_photo");  //On récupère l'extension photo et on la stocke dans une variable
           
   
     // On créé un tableau de configuration pour l'upload
   
     $config['upload_path'] = './assets/images/'; // chemin où sera stocké le fichier
   
     $config['file_name'] = $max_id[0]->max.".".$extention; // nom du fichier final, icipour obtenir le max_id vu qu'il est dans un tableau non associatif on utilise l'élément 0 du tableau et la méthode max
   
     $config['allowed_types'] = 'gif|jpg|png'; // Types autorisés (ici pour des images)
   
  
   
     // On charge la librairie 'upload' de CodeIgniter en lui envoyant la config
   
     $this->load->library('upload', $config);


    
    //Transformation de la valeur de pro_bloque en null si Non a été séléctionner./////////////
  

    if ($this->form_validation->run() == FALSE && !$this->upload->do_upload('fichier'))
    {
      $this->load->database();
  
  $results2=$this->db->query("SELECT cat_nom, cat_id FROM categories");
  
  $aListe2= $results2->result();

  $aView["noms_categories"] = $aListe2;

           $this->load->view('pages/ajout', $aView);
    }
    else
    {
            
      
      $this->db->insert('produits', $data);
      
      
      redirect('produits/liste');
    }
   
	
 
   
  

}
	
  else 
	
  { // 1er appel de la page: affichage du formulaire 
	//Si le controlleur ne reçoit aucune données alors il appel juste la page ajout.
  
  $this->load->database();
  
  $results2=$this->db->query("SELECT cat_nom, cat_id FROM categories");
  
  $aListe2= $results2->result();

  $aView["noms_categories"] = $aListe2;

  $this->load->view('pages/ajout', $aView);
  }	
 
}



//Fonction modif///////////////////////////////////////////////////////////////////////////


public function modif($id)
	
{
  $this->load->database();
	
  $this->load->helper('url');

  $this->load->helper('form');



  if ($this->input->post()) 

  {

      $data = $this->input->post(); //Stockage des données du formulaire
                                 
      $id = $this->input->post("pro_id"); //Stockage de l'id

      
      
      
      $where=$this->db->where('pro_id', $id); //Mettre le where dans une variables
      $this->db->update('produits', $data, $where); //On effectue une requête update en incluant après les données du formulaire le where
    
      

  } 

  else 

  {
    $this->load->database();
	
    $liste = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", $id);
	
    $model["produits"] = $liste->row(); // première ligne du résultat
	
    $this->load->view('pages/modif', $model);

  }
} 


//Fonction détails
 
public function detail($id)
{
  $this->load->helper('form');
  $this->load->database();
  $this->load->helper('url');


  $this->load->database();
	
  $liste = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", $id);

  $model["produits"] = $liste->row(); // première ligne du résultat

  $this->load->view('pages/detail', $model);


  
}




public function delete($pro_id) //La fonction delete récupère l'id du détail, on le place en paramètre de la fonction pour qu'il puisse le récupérer
{
  $this->load->database();
  $this->load->helper('url');
  $where=$this->db->where('pro_id', $pro_id); //Mettre le where dans une variables
  $this->db->delete('produits', $where);
  redirect('produits/liste');

}
 
}