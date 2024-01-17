<?php
class persona extends conexion{
    private $nombre;
    private $email;
    private $direccion;
    private $telefono;
    private $password;
    private $conex;


    function __construct(){

        $conexion = new Conexion();
        $conexion->conectar();
        $this->conex=$conexion->getConexion();
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getDireccion() {
        return $this->direccion;
    }
    public function setDreccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
}
                        ?>