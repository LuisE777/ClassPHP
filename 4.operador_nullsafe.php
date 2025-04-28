<?php 

class Saludo{
    public function saludar(string $nombre = "Veronica"):string{
        return "HOLA $nombre";
    }

}
//caso 1:$saludo es nulo

$saludo = new Saludo();
echo $saludo?->saludar("Claudia") ?? "El peluca sabe";

if($saludo){
   echo $saludo->saludar("Claudia");
}