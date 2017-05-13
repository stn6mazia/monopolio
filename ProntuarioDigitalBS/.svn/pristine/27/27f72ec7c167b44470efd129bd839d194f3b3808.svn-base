<?php

class SugestoesController extends Controller
{
    public function index()
    {
        $this->title = "Prontuário Digital | Sugestões";

        $model = $this->loadModel('Exemplo');
        $lista = $model->listar();

        $this->loadView('sugestoes.index', $lista);
    }    
}