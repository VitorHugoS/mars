<?php

class Rover{
	//posicoes do plano cartesiano X, Y
	private $x=0;
	private $y=0;
	//por padrao o rover sempre iniciara com a face para o norte
	private $Orientacao="N";

	//iniciar a posicao do rover, valores padroes caso a funcao seja chamada vazia
    function posicao($posicaox=0, $posicaoy=0, $face="N"){
		//setar as posicoes do plano cartesiano
		$this->x=$posicaox;
		$this->y=$posicaoy;
		//setar face do rover
		$this->Orientacao=$face;
	}
	//movimenta o hover
	function movimentar($movimentos){
		//percorre string e executa os movimentos
		for($i=0; $i<strlen($movimentos);$i++)
		{
			switch ($movimentos[$i]) {
				case 'L':
					//funcao para esquerda
					$this->esquerda();
				break;
				case 'R':
					//funcao para direita
					$this->direita();
				break;
				case 'M':
					//funcao move
					$this->mover();
				break;
				default:
					echo "Comando inexistente!";
				break;
			}
		}
	}
	//funcao esquerda
	function esquerda(){
		//gira o rover
		switch($this->Orientacao){
			case "N":
				$this->Orientacao="W";
			break;
			case "S":
				$this->Orientacao="E";
			break;
			case "E":
				$this->Orientacao="N";
			break;
			case "W":
				$this->Orientacao="S";
			break;
		}
	}
	//funcao direita
	function direita(){
		//gira o rover
		switch($this->Orientacao){
			case "N":
				$this->Orientacao="E";
			break;
			case "S":
				$this->Orientacao="W";
			break;
			case "E":
				$this->Orientacao="S";
			break;
			case "W":
				$this->Orientacao="N";
			break;
		}
	}
	//funcao mover
	function mover(){
		//move o rover uma casa a frente para onde sua face esta voltada
		switch($this->Orientacao){
			case "N":
				$this->y++;
			break;
			case "S":
				$this->y--;
			break;
			case "E":
				$this->x++;
			break;
			case "W":
				$this->x--;
			break;
		}
	}

	//mostra a posicao atual do rover
	function imprimir(){
		echo "X: (".$this->x.") - Y: (".$this->y.") Face - >".$this->Orientacao;
	}

	
}

$rover=new Rover();
$rover->posicao(1, 2, "N");
$rover->movimentar("LMLMLMLMM");
$rover->imprimir();
$rover->posicao(3, 3, "E");
$rover->movimentar("MMRMMRMRRM");
$rover->imprimir();
?>
