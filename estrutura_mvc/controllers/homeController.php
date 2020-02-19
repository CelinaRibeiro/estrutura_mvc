<?php
//use core\controller;

class homeController extends controller{

	public function index() {
	    $anuncios = new Anuncios();
	    $usuarios = new Usuarios();
	    
	    $dados = array(
	        'quantidade' => $anuncios->getQuantidade(),
	        'nome' => $usuarios->getNome(),
	        'idade' => $usuarios->getIdade()   
	    );
	    
	    $this->loadTemplate('home', $dados);
	 
	}

}