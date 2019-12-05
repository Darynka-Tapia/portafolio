<?php 

	interface Auto{
		public function encender();
		public function apagar();

	}

	interface gasolina extends Auto{
		public function vaciarTanque();
		public function llenarTanque($cant);
	}

	class Deportivo implements gasolina{
		//Atributos
		private $estado=false;
		private $tanque=0;

		//Métodos
		public function estado(){
			if($this->estado){
				echo 'El auto esta encendido y tiene '.$this->tanque.' de litros en el tanque<br>';
			}else{
				echo 'El auto esta apagado <br>';
			}
			if($this->tanque<0){
				$this->tanque=0;
			}
			echo '<br>Gasolina: '.$this->tanque.'<br>';
		}
		public function encender(){
			if($this->estado){
				echo "No pueden encender el auto dos veces <br>";
			}else{
				if($this->tanque>0){
					echo 'Auto encendido <br>';
					$this->estado=true;
				}else{
					echo 'El tanque esta vacio, no puedes encender el tanque <br>';
				}
				
			}

		}
		public function apagar(){
			if($this->estado){
				echo "Auto apagado <br>";
				$this->estado=false;
			}else{
				echo '<br>El auto ya esta apagado ';
				
			}
		}
		public function vaciarTanque(){
			$this->tanque=0;
		}

		public function llenarTanque($cant){
			$this->tanque=$cant;
		}

		public function usar($km){
			if($this->estado){
				$reducir = $km/4;
				$this->tanque = $this->tanque - $reducir;
				if($this->tanque<=0){
					$this->estado=false;
				}
			}else{
				echo 'el auto esta apagado y no se puede usar <br>';
			}
		}


	}

	$obj = new Deportivo();	



// 	//Comprobamos que el valor no venga vacío
if(isset($_POST['funcion'])) {

    $funcion = $_POST['funcion'];
    $km=$_POST['km'];
    $lt=$_POST['lt'];
    if($lt<0){
    	$lt=0;
    }
   

    //En función del parámetro que nos llegue ejecutamos una función u otra
    switch($funcion) {
        case 'estado':
            echo $obj->llenarTanque($lt);
            echo $obj->estado();
            break;
        case 'encender': 
        	echo $obj->llenarTanque($lt);
            echo $obj->encender();
            echo $obj->estado();
            break;
        case 'apagar': 
            echo $obj->apagar();
            echo $obj->estado();
            break;
        case 'llenar': 
            echo $obj->llenarTanque($lt);
            echo $obj->estado();
            break;
        case 'usar':
        	echo $obj->llenarTanque($lt);
        	echo $obj->encender();
           	echo $obj->usar($km);
           	echo $obj->estado();
            break;
    }
}
?>