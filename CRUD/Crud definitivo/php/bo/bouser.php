<?php
#Author: Grupo3 
#Date: 2021
#Description : Is BO User

include_once('../dto/dto_user.php');

include_once('../dao/daouser.php');
header("Content-type: application/json; charset=utf-8");

class BoUser
{
    private $objUser;
    private $objDao;
    private $intValidate;

    public function __construct()
    {
        $this->objUser = new DtoUser();
        $this->objDao = new DaoUser();
    }
    
    #Description: Function for create a new user
    public function newUser($email,$password, $nombre, $apellido, $fena, $sexo, $telefono)
    {
        try {
            $this->objUser->__setUser($email,$password, $nombre, $apellido, $fena, $sexo, $telefono);
            $intValidate = $this->objDao->newUser($this->objUser);
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
            $intValidate = 0;
        }
        return $intValidate;
    }

    #Description: Function for Select user
    public function selectUser()
    {
        try {
            $args = func_get_args();
            $numoArgs = count($args);
            if ($numoArgs == 0) {
                echo $this->objDao->selectUser();
            } else {
                echo $this->objDao->selectUsers($args[0]);
            }
        } catch (Exception $ex) {
            echo 'Exception captured:', $ex->getMessage(), "\n";
        }
    }

    #Description: Function for delete user
    public function deleteUser($id)
    {
        try {
            $this->objUser->__setId($id);
            $intValidate = $this->objDao->deleteUser($this->objUser);
        } catch (Exception $ex) {
            echo 'Exception captured:', $ex->getMessage(), "\n";
            $intValidate = 0;
        }

        return $intValidate;
    }

    public function selectBooks($id)
    {
        try {
            $args = func_get_args();
            $numoArgs = count($args);
            if ($numoArgs == 0) {
                echo $this->objDao->selectBooks($id);
            } else {
                echo $this->objDao->selectBooks($args[0]);
            }
        } catch (Exception $ex) {
            echo 'Exception captured:', $ex->getMessage(), "\n";
        }
    }
}
$obj = new BoUser();
/// We get the json sent
//$getData = file_get_contents('php://input');
//$data = json_decode($getData);

//echo $obj->newUser(NULL, 'camilo12345@gmail.com', '12345', 'heidy', 'monroy', '2021-11-10', '1', '123456789');
//echo $obj->selectUser();
//echo $obj->deleteUser(1);
echo $obj->selectBooks(1);
?>