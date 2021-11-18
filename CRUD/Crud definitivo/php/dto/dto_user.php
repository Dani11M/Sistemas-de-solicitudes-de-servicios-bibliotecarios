<?php
#Author: Grupo3
#Date: 2021
#Description : Is DTO User
class DtoUser
{

    private $Id;
    private $Email;
    private $Password;
    private $Nombre;
    private $Apellido;
    private $FechaNa;
    private $Sexo;
    private $Telefono;

    public function __construct()
    {

    }
    public function __setUser($email,$password, $nombre, $apellido, $fena, $sexo, $telefono)
    {

        $this->Email = $email;
        $this->Password = $password;
        $this->Nombre = $nombre;
        $this->Apellido = $apellido;
        $this->FeNa = $fena;
        $this->Sexo = $sexo;
        $this->Telefono= $telefono;
    
    }

    public function __getUser()
    {
        $objUser = new DtoUser();

        $objUser->__getId();
        $objUser->__getEmail();
        $objUser->__getPassword();
        $objUser->__getNombre();
        $objUser->__getApellido();
        $objUser->__getFeNa();
        $objUser->__getSexo();
        $objUser->__getTelefono();
        return $objUser;
    }
    //SET User

    public function __setId($id)
    {
        $this->id = $id;
    }
    public function __setEmail($email)
    {
        $this->Email = $email;
    }
    public function __setPassword($password)
    {
        $this->Password = $password;
    }
    
    public function __setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }
    
    public function __setApellido($apellido)
    {
        $this->Apellido = $apellido;
    }
    public function __setFeNa($fena)
    {
        $this->FeNa = $fena;
    }
    public function __setSexo($sexo)
    {
        $this->Sexo = $sexo;
    }
    public function __Telefono($telefono)
    {
        $this->Telefono= $telefono;
    }
    //GET User
   
    public function __getId()
    {
        return $this->id;
    }
    public function __getEmail()
    {
        return $this->Email;
    }
    public function __getPassword()
    {
        return $this->Password;
    }
   
    public function __getNombre()
    {
        return $this->Nombre;
    }
    public function __getApellido()
    {
        return $this->Apellido;
    }
    public function __getFeNa()
    {
        return $this->FeNa;
    }
    public function __getSexo()
    {
        return $this->Sexo;
    }
    public function __getTelefono()
    {
        return $this->Telefono;
    }

  
}
?>