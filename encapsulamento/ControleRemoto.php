<?php
require_once 'controlador.php';
class ControleRemoto implements controlador{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

// Getters e Setters
public function getVolume(){
    return $this->volume;
}
public function setVolume($volume){
    $this->volume = $volume;
}

public function getLigado(){
    return $this->ligado;
}
public function setLigado($ligado){
    $this->ligado = $ligado;
}

public function getTocando(){
    return $this->tocando;
}
public function setTocando($tocando){
    $this->tocando = $tocando;
}

// Métodos abstratos (controlador.php)
public function ligar(){
    $this->setLigado(true);
}
public function desligar(){
    $this->setLigado(false);
}
public function abrirMenu(){
    echo("-------------- MENU -------------- <br><br>");

    echo("Está ligado?" . ($this->getLigado()?" Sim":" Não") . "<br>");
    
    echo("Está tocando?" . ($this->getTocando()?" Sim":" Não") . "<br>");

    echo("Volume: " . ($this->getVolume()) . "  ");
    // A cada 10 de volume imprime um "|"
    for ($i=0; $i < $this->getVolume(); $i += 10){ 
        echo("| ");
    }
    
    echo($this->getTocando());
}
public function fecharMenu(){
    echo("Fechando menu...");
}
public function maisVolume(){
    // O volume só aumenta se a TV estiver ligada
    if($this->getLigado()){
        $this->setVolume($this->getVolume() + 10);
    }else{
        echo "ERRO! TV desligada! <br>";
    }
}
public function menosVolume(){
    // O volume só diminui se a TV estiver ligada
    if($this->getLigado()){
        $this->setVolume($this->getVolume() + 10);
    }else{
        echo "ERRO! TV desligada <br>";
    }
}
public function ligarMudo(){
    // Mudo (volume = 0) se a TV estiver ligada e com um volume maior que 0
    if($this->getLigado() && $this->getVolume() > 0){
        $this->setVolume(0);
    }
}
public function desligarMudo(){
    // Só tira do mudo se a TV estiver ligada e muda (volume = 0)
    if($this->getLigado() && $this->getVolume() == 0){
        $this->setVolume(10);
    }
}
public function play(){
    // TV Ligada + NÃO tocando = play
    if($this->getLigado() && !$this->getTocando()){
        $this->setTocando(true);
    }
}
public function pause(){
    // TV Ligada + tocando = pause
    if($this->getLigado() && $this->getTocando()){
        $this->setTocando(false);
    }
}
}
?>