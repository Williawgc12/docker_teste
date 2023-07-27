<?php 


class CarroPreferido{

    function nome(){
        echo "<br>William";
    }
}

$carro = new CarroPreferido();
$marca = "FOX";
$cor  =  "Azul";
echo "<br>";

echo  $carro->nome() . " gosta do veiculo da marca " . $marca . " com a cor " . $cor;



?>