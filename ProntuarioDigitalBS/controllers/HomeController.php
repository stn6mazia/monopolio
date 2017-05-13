<?php
/**
 * HomeController - Controller da página principal
 */
class HomeController extends Controller
{
    /**
     * Carrega o layout da página principal
     */
    public function index()
    {
        // Título da página
        $this->title = "Uninove | Prontuário Digital";

        // Parâmetros da função
        $params = (func_num_args() >= 1) ? func_get_arg(0) : array();

        // Carregar a view
        $this->loadView('principal');
    }
}