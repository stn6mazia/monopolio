<?php

class EnfermagemController extends Controller
{
    public function index()
    {
        $this->title = "Prontuário Digital | Enfermagem";
      
        $this->loadView('enfermagem.index');
        
    }
    
    public function incluir(){
        
        $this->title = "Prontuário Digital | Enfermagem";
        
        $this->loadView('enfermagem.incluir');
    }
    
}


