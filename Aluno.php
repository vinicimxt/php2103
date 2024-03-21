<?php
class Aluno{

    public $rm;
    public $nome;
    public $email;

    public function exibir(){
     /*echo "RM:".$this->rm."<br>";
     echo "Nome:".$this->nome."<br>";
     echo "Email:".$this->email."<br>";*/
     $this->exibi("RM:",$this->rm);
     $this->exibi("Nome:",$this->nome);
     $this->exibi("Email:",$this->email);
    }

    public function exibi($texto,$variavel){
        echo "<div class='text-danger bg-info '>".$texto." ".$variavel."<br></div>";
    }
}