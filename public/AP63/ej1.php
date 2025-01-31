<?php
    session_start();
?>
<html>
<head>
    <title></title>
</head>
<body>
    
    




</body>
</html>
    
<?php 
  
  class Instrumento{

    protected $numeroNotas; //no podemos acceder desde fuera. Necesitamos el set
    protected $musicoAsociado;

    public function __construct($notas = 0, $musico = ""){
      $this->numeroNotas = $notas;
      $this->musicoAsociado = $musico;
    }

    //hacemos el set de la propiedad numeroNotas para poder ponerle un valor
    public function setNumeroNotas($num){ 
      $this->numeroNotas = $num;
    }
  }

  class Cuerda extends Instrumento{

    private $numeroCuerdas;

    public function __construct($notas, $musico, $cuerdas = 0){
      parent::__construct($notas, $musico);
      $this->numeroCuerdas = $cuerdas;
    }

  }

  class Viento extends Instrumento{

    private $tipo;
  }

  class Percusion extends Instrumento{
    private $baquetas;

  }


  $guitarra= new Cuerda(280, "Antonio", 5);
  var_dump($guitarra);

  //$guitarra->numeroNotas = 9; NO puedo hacerlo porque es protected y no se puede acceder desde fuera.
  //Tengo que llamar al método setNumeroNotas(9);
  $guitarra->setNumeroNotas(9);
  var_dump($guitarra);


  



?>