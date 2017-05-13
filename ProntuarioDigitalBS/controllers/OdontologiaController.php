<?php

class OdontologiaController extends Controller
{
    public function index()
    {
        $this->title = "Prontuário Digital | Odontologia";
      
        $this->loadView('odontologia.index');
        
    }
    
    public function incluir(){
        
        $this->title = "Prontuário Digital | Odontologia";
        
        $this->loadView('odontologia.incluir');
    }
    
}