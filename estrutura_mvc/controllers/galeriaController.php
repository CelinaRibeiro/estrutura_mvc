<?php
// namespace controllers;
class galeriaController extends controller
{

    public function index() {
        $dados = array(
            'qt' => 129
        );
        
        $this->loadTemplate('galeria', $dados);
    }
}
?>

