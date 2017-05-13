<?php

class FisioterapiaController extends Controller
{
    public function index()
    {
        $this->title = "Prontuário Digital | Fisioterapia";      
        
        $this->loadView('fisioterapia.index');
    }
    
    public function formulario()
    {
        $this->title = "Prontuário Digital | Fisioterapia";      
        
             $this->loadView('fisioterapia.formulario');
    }

}