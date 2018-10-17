<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_Categories extends CI_Model {


    public function getAllCategories()
    {

        $sql=$this->db->get('categorie'); //connecter à la table dans la base de données
        foreach ($sql->result() as $row)//donne le contenu de la base de données
        {
            $data[] = $row;
        }
        return $data;
    }
}

