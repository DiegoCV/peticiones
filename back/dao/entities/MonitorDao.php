<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me ayudas con la tesis?  \\

include_once realpath('../..').'\dao\interfaz\IMonitorDao.php';
include_once realpath('../..').'\dto\Monitor.php';
include_once realpath('../..').'\dto\Cargo.php';

class MonitorDao implements IMonitorDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Monitor en la base de datos.
     * @param monitor objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($monitor){
      $id=$monitor->getId();
$marca=$monitor->getMarca();
$modelo=$monitor->getModelo();
$serial=$monitor->getSerial();
$pulgadas=$monitor->getPulgadas();
$observacion=$monitor->getObservacion();
$estado=$monitor->getEstado();
$cargo_id=$monitor->getCargo_id()->getId();

      try {
          $sql= "INSERT INTO `monitor`( `id`, `marca`, `modelo`, `serial`, `pulgadas`, `observacion`, `estado`, `cargo_id`)"
          ."VALUES ('$id','$marca','$modelo','$serial','$pulgadas','$observacion','$estado','$cargo_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Monitor en la base de datos.
     * @param monitor objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($monitor){
      $id=$monitor->getId();

      try {
          $sql= "SELECT `id`, `marca`, `modelo`, `serial`, `pulgadas`, `observacion`, `estado`, `cargo_id`"
          ."FROM `monitor`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $monitor->setId($data[$i]['id']);
          $monitor->setMarca($data[$i]['marca']);
          $monitor->setModelo($data[$i]['modelo']);
          $monitor->setSerial($data[$i]['serial']);
          $monitor->setPulgadas($data[$i]['pulgadas']);
          $monitor->setObservacion($data[$i]['observacion']);
          $monitor->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $monitor->setCargo_id($cargo);

          }
      return $monitor;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Monitor en la base de datos.
     * @param monitor objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($monitor){
      $id=$monitor->getId();
$marca=$monitor->getMarca();
$modelo=$monitor->getModelo();
$serial=$monitor->getSerial();
$pulgadas=$monitor->getPulgadas();
$observacion=$monitor->getObservacion();
$estado=$monitor->getEstado();
$cargo_id=$monitor->getCargo_id()->getId();

      try {
          $sql= "UPDATE `monitor` SET`id`='$id' ,`marca`='$marca' ,`modelo`='$modelo' ,`serial`='$serial' ,`pulgadas`='$pulgadas' ,`observacion`='$observacion' ,`estado`='$estado' ,`cargo_id`='$cargo_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Monitor en la base de datos.
     * @param monitor objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($monitor){
      $id=$monitor->getId();

      try {
          $sql ="DELETE FROM `monitor` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Monitor en la base de datos.
     * @return ArrayList<Monitor> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `marca`, `modelo`, `serial`, `pulgadas`, `observacion`, `estado`, `cargo_id`"
          ."FROM `monitor`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $monitor= new Monitor();
          $monitor->setId($data[$i]['id']);
          $monitor->setMarca($data[$i]['marca']);
          $monitor->setModelo($data[$i]['modelo']);
          $monitor->setSerial($data[$i]['serial']);
          $monitor->setPulgadas($data[$i]['pulgadas']);
          $monitor->setObservacion($data[$i]['observacion']);
          $monitor->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $monitor->setCargo_id($cargo);

          array_push($lista,$monitor);
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