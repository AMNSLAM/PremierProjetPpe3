<?php

class ControleurAcceuil extends CI_Controller
{
    public function index()
    {
        $this->load->view("view_acceuil");
    }



    public function Inscription()
    {
      
        $logn =$this->input->post('logn');
        $mdp  = $this->input->post('mdp');
        if($logn==''&& $mdp=='')
        {
         $data['logn']= $logn;
         $this->load->view('',$data);
        }
        else
        {
          $data['error']= 'Compte invalide';
          $this->load->view('view_inscription',$data);
        }




    }

       

}

?>