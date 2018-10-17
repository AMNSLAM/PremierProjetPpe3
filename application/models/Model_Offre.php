<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_Offre extends CI_Model {


    public function getOffres($idCateg)
    {

        $sql=$this->db->select('*')->from('offre')->where('idCategorie',$idCateg); //connecter à la table dans la base de données
        $res = $this->db->get();
        $tab = array();

        foreach ($res->result() as $row)//donne le contenu de la base de données
        {
            $tab[] = $row;
        }
        return $tab;
    }
}

