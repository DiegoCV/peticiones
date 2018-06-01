<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Les traigo amor  \\

include_once realpath('../..').'\dao\interfaz\IRedDao.php';
include_once realpath('../..').'\dto\Red.php';
include_once realpath('../..').'\dto\Cargo.php';

class RedDao implements IRedDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Red en la base de datos.
     * @param red objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($red){
      $id=$red->getId();
$ip=$red->getIp();
$masc=$red->getMasc();
$puertaEnlace=$red->getPuertaEnlace();
$dns1=$red->getDns1();
$dns2=$red->getDns2();
$cargo_id=$red->getCargo_id()->getId();

      try {
          $sql= "INSERT INTO `red`( `id`, `ip`, `masc`, `puertaEnlace`, `dns1`, `dns2`, `cargo_id`)"
          ."VALUES ('$id','$ip','$masc','$puertaEnlace','$dns1','$dns2','$cargo_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Red en la base de datos.
     * @param red objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($red){
      $id=$red->getId();

      try {
          $sql= "SELECT `id`, `ip`, `masc`, `puertaEnlace`, `dns1`, `dns2`, `cargo_id`"
          ."FROM `red`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $red->setId($data[$i]['id']);
          $red->setIp($data[$i]['ip']);
          $red->setMasc($data[$i]['masc']);
          $red->setPuertaEnlace($data[$i]['puertaEnlace']);
          $red->setDns1($data[$i]['dns1']);
          $red->setDns2($data[$i]['dns2']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $red->setCargo_id($cargo);

          }
      return $red;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Red en la base de datos.
     * @param red objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($red){
      $id=$red->getId();
$ip=$red->getIp();
$masc=$red->getMasc();
$puertaEnlace=$red->getPuertaEnlace();
$dns1=$red->getDns1();
$dns2=$red->getDns2();
$cargo_id=$red->getCargo_id()->getId();

      try {
          $sql= "UPDATE `red` SET`id`='$id' ,`ip`='$ip' ,`masc`='$masc' ,`puertaEnlace`='$puertaEnlace' ,`dns1`='$dns1' ,`dns2`='$dns2' ,`cargo_id`='$cargo_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Red en la base de datos.
     * @param red objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($red){
      $id=$red->getId();

      try {
          $sql ="DELETE FROM `red` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Red en la base de datos.
     * @return ArrayList<Red> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `ip`, `masc`, `puertaEnlace`, `dns1`, `dns2`, `cargo_id`"
          ."FROM `red`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $red= new Red();
          $red->setId($data[$i]['id']);
          $red->setIp($data[$i]['ip']);
          $red->setMasc($data[$i]['masc']);
          $red->setPuertaEnlace($data[$i]['puertaEnlace']);
          $red->setDns1($data[$i]['dns1']);
          $red->setDns2($data[$i]['dns2']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $red->setCargo_id($cargo);

          array_push($lista,$red);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That´s all folks!