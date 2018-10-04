<?php
	
	class Calculadora{
		private $numero1;
		private $numero2;
		private $total;

		function __contruct(){
			$this->total  = 0;
			$this->numero1 =0;
			$this->numero2 =0;
		} 

		//getter e setter

		public function setNumero1($numero1){
			$this->numero1 = $numero1;
		}

		public function setNumero2($numero2){
			$this->numero2 = $numero2;
		}

		//operações

		public function somar(){
			$this->total = $this->numero1 + $this->numero2;
		}

		public function subtrair(){
			$this->total = $this->numero1 - $this->numero2;
		}

		public function multiplicar(){
			$this->total = $this->numero1 * $this->numero2;
		}

		public function dividir(){
			$this->total = $this->numero1 / $this->numero2;
		}




		public function getTotal(){
			return $this->total;
		}

	}
?>