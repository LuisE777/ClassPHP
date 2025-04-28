<?php
$valor = 2;
$resultado = match($valor){
    1 => "UNO",
    2 => caso2(),
    3 => (function(){
        $mensaje = "tres";
        return $mensaje;
    })(),
    default =>"OTRO"
};

function caso2(){
    echo "dosdos";
}

echo $resultado;