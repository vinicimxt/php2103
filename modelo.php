<?php
function layout($pagina){
include $pagina.".php";
}

function rodape($pagina){
    include $pagina.".php";
}

function conteudo(){
    include "content.php";
}

function index($content){
 layout ("header");
 layout($content);
 layout("footer");
}