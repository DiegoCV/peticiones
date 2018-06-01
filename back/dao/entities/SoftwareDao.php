<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Para entender la recursividad, primero debes entender la recursividad  \\

include_once realpath('../..').'\dao\interfaz\ISoftwareDao.php';
include_once realpath('../..').'\dto\Software.php';
include_once realpath('../..').'\dto\Antivirus.php';
include_once realpath('../..').'\dto\Cargo.php';

class SoftwareDao implements ISoftwareDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Software en la base de datos.
     * @param software objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($software){
      $id=$software->getId();
$sistemaOperativo=$software->getSistemaOperativo();
$antivirus=$software->getAntivirus()->getId();
$ofimatica=$software->getOfimatica();
$paqueteContable=$software->getPaqueteContable();
$otros=$software->getOtros();
$cargo_id=$software->getCargo_id()->getId();

      try {
          $sql= "INSERT INTO `software`( `id`, `sistemaOperativo`, `antivirus`, `ofimatica`, `paqueteContable`, `otros`, `cargo_id`)"
          ."VALUES ('$id','$sistemaOperativo','$antivirus','$ofimatica','$paqueteContable','$otros','$cargo_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Software en la base de datos.
     * @param software objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($software){
      $id=$software->getId();

      try {
          $sql= "SELECT `id`, `sistemaOperativo`, `antivirus`, `ofimatica`, `paqueteContable`, `otros`, `cargo_id`"
          ."FROM `software`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $software->setId($data[$i]['id']);
          $software->setSistemaOperativo($data[$i]['sistemaOperativo']);
           $antivirus = new Antivirus();
           $antivirus->setId($data[$i]['antivirus']);
           $software->setAntivirus($antivirus);
          $software->setOfimatica($data[$i]['ofimatica']);
          $software->setPaqueteContable($data[$i]['paqueteContable']);
          $software->setOtros($data[$i]['otros']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $software->setCargo_id($cargo);

          }
      return $software;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Software en la base de datos.
     * @param software objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($software){
      $id=$software->getId();
$sistemaOperativo=$software->getSistemaOperativo();
$antivirus=$software->getAntivirus()->getId();
$ofimatica=$software->getOfimatica();
$paqueteContable=$software->getPaqueteContable();
$otros=$software->getOtros();
$cargo_id=$software->getCargo_id()->getId();

      try {
          $sql= "UPDATE `software` SET`id`='$id' ,`sistemaOperativo`='$sistemaOperativo' ,`antivirus`='$antivirus' ,`ofimatica`='$ofimatica' ,`paqueteContable`='$paqueteContable' ,`otros`='$otros' ,`cargo_id`='$cargo_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Software en la base de datos.
     * @param software objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($software){
      $id=$software->getId();

      try {
          $sql ="DELETE FROM `software` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Software en la base de datos.
     * @return ArrayList<Software> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `sistemaOperativo`, `antivirus`, `ofimatica`, `paqueteContable`, `otros`, `cargo_id`"
          ."FROM `software`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $software= new Software();
          $software->setId($data[$i]['id']);
          $software->setSistemaOperativo($data[$i]['sistemaOperativo']);
           $antivirus = new Antivirus();
           $antivirus->setId($data[$i]['antivirus']);
           $software->setAntivirus($antivirus);
          $software->setOfimatica($data[$i]['ofimatica']);
          $software->setPaqueteContable($data[$i]['paqueteContable']);
          $software->setOtros($data[$i]['otros']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $software->setCargo_id($cargo);

          array_push($lista,$software);
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