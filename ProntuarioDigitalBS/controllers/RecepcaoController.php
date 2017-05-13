<?php

class RecepcaoController extends Controller
{
    public function index()
    {
        $this->title = "Prontuário Digital | Recepção";
      
        $this->loadView('recepcao.index');
        
    }
    
    public function incluir(){
        
        $this->title = "Prontuário Digital | Recepção";
        
        $this->loadView('recepcao.incluir');
    }
    
}


