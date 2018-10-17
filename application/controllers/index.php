<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include(APPPATH . 'modules/Controleur_Admin.php'); // chemin vers le controlleur parent
class Index extends Controleur_Admin {
    
    function __construct() {
        parent::__construct(); // On appel le constructeur de ADMINISTRATOR_Controller car 
                                       // c'est lui qui va vérifier les données et accepter la page appelée ou non.
    }
    
    function index() {
        $this->load->view('admin/index');
    }
}
?>