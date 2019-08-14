<?php

 $this->form_validation->set_rules('pro_ref', 'Référence', 'callback_pro_ref_check');
 $this->form_validation->set_rules('pro_libelle', 'Nom', 'required', array('required' => 'Veuillez remplir le champ nom du produit.'));
 $this->form_validation->set_rules('pro_description', 'Description', 'required', array('required' => 'Veuillez remplir le champ description.'));
 $this->form_validation->set_rules('pro_prix', 'Prix', 'required', array('required' => 'Veuillez remplir le champ prix.'));
 $this->form_validation->set_rules('pro_stock', 'Stock', 'required', array('required' => 'Veuillez remplir le champ stock.'));
 $this->form_validation->set_rules('pro_couleur', 'Couleur', 'required', array('required' => 'Veuillez remplir le champ couleur.'));
 $this->form_validation->set_rules('pro_photo', 'Extension Photo', 'required', array('required' => 'Veuillez remplir le champ extension photo.'));

 function pro_ref_check()
{
  $this->load->database();
  $data = $this->input->post();
  $pro_ref='/^[A-Z-a-z-1-9]+$/';
 if (!preg_match($pro_ref, $data['pro_ref']))
 {
  $this->form_validation->set_message('pro_ref_check', 'La référence saisie est invalide');
  return FALSE;
}
else
{
  return TRUE;
}


}









?>