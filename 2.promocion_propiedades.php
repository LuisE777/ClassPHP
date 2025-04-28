<?php
class Usuario{
    public function __construct(
        public string $nombre,
        public int $edad
    ){

    }

    public function getNombre():string{
        return $this->nombre;
    }
}
$usuario = new Usuario("Juan",28);
echo $usuario->getNombre();
