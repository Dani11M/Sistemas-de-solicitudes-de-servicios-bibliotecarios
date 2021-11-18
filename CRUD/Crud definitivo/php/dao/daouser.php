<?php
#Author: Grupo3
#Date: 2021
#Description : Is DAO User
include_once('../../system/connectionDB.php');
class DaoUser
{
    private $objConnection;
    private $arrayResult;
    private $intValidation;

    public function __construct()
    {
        $this->objConnection = new Connection();
        $this->arrayResult = array();
        $this->intValidation = 0;
    }
    #Description: Function for create a new Client

    public function newUser($objUser)
    {
        try {
            $con = $this->objConnection->connect();
            $con->query("SET NAMES 'utf8'");

            if ($con != null) {
                $dataUser="'".$objUser->__getEmail()."','".$objUser->__getPassword()."','".$objUser->__getNombre()."','".$objUser->__getApellido()."','".$objUser->__getFeNa()."','".$objUser->__getSexo()."','".$objUser->__getTelefono()."'";

                if($con->query("INSERT INTO registro(email, password, Nombre, Apellido, fechaNa, Sexo, Telefono) VALUES(". $dataUser .")")) {
                    $this->intValidation = 1;
                } else {
                    $this->intValidation = 0;
                }
            }
            $con->close();
        } catch (Exception $e) {
            echo 'Exception captured: ', $e->getMessage(), "\n";
            $this->intValidation = 0;
        }
        return $this->intValidation;
    }

    public function selectUser()
    {
        try {
            $con = $this->objConnection->connect();
            $con->query("SET NAMES 'utf8'");
            if ($con != null) {
                if ($Result = $con->query("SELECT * FROM registro WHERE 1")) {
                    while ($row = $Result->fetch_array(MYSQLI_ASSOC)) {
                        $this->arrayResult[] = $row;
                    }
                    mysqli_free_result($Result);
                }
            }
            $con->close();
        } catch (Exception $e) {
            echo 'Exception captured:', $e->getMessage(), "\n";
        }
        return json_encode($this->arrayResult);
    }

    #Description: Function for select a new User

    public function selectUsers($id)
    {

        try {
            $conn = $this->objConnection->connect();
            $conn->query("SET NAMES 'utf8'");
            if ($conn != null) {

                if ($result = $conn->query("SELECT * FROM registro WHERE id=" . $id)) {

                    while ($row=$result->fetch_array(MYSQLI_ASSOC)) {

                        $this->arrayResult[]=$row;
                    }
                    mysqli_free_result($result);
                }
            }
            $conn->close();
        } catch (Exception $ex) {
            echo 'Exception captured:', $ex->getMessage(),"\n";
        }
        return json_encode($this->arrayResult);
    }

     #Description: Function for Delete  User

     public function deleteUser($objUser){

        try
        {
            $conn=$this->objConnection->connect();
            $conn->query("SET NAMES 'utf8'");

            if($conn!=null){

                $dataUser="DELETE FROM registro WHERE id=".$objUser->__getId();
                //echo $dataUser;
             if($conn->query($dataUser)){
                   $this->intValidation=1;
             }else{
                   $this->intValidation=0; 
               }
                
            }
            $conn->close();
        }
        catch(Exception $ex){
            echo 'Exception captured:',$ex->getMessage(),"\n";
            $this->intValidation=0;

        }
        return $this->intValidation;
    }
    
    public function selectBooks($id)
    {

        try {
            $conn = $this->objConnection->connect();
            $conn->query("SET NAMES 'utf8'");
            if ($conn != null) {

                if ($result = $conn->query("SELECT * FROM libros WHERE idLibro=" . $id)) {

                    while ($row=$result->fetch_array(MYSQLI_ASSOC)) {

                        $this->arrayResult[]=$row;
                    }
                    mysqli_free_result($result);
                }
            }
            $conn->close();
        } catch (Exception $ex) {
            echo 'Exception captured:', $ex->getMessage(),"\n";
        }
        return json_encode($this->arrayResult);
    }
}
?>