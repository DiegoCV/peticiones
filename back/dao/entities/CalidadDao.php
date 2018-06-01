<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Te veeeeeooooo  \\

include_once realpath('../..').'\dao\interfaz\ICalidadDao.php';
include_once realpath('../..').'\dto\Calidad.php';
include_once realpath('../..').'\dto\Cargo.php';

class CalidadDao implements ICalidadDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Calidad en la base de datos.
     * @param calidad objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($calidad){
      $id=$calidad->getId();
$cargo_id=$calidad->getCargo_id()->getId();
$cambio_contra=$calidad->getCambio_contra();
$bloquea_auto=$calidad->getBloquea_auto();
$bloqueo=$calidad->getBloqueo();
$copia_seguridad=$calidad->getCopia_seguridad();
$antivirus=$calidad->getAntivirus();
$progra_no_auto=$calidad->getProgra_no_auto();
$carpeta_compartido=$calidad->getCarpeta_compartido();

      try {
          $sql= "INSERT INTO `calidad`( `id`, `cargo_id`, `cambio_contra`, `bloquea_auto`, `bloqueo`, `copia_seguridad`, `antivirus`, `progra_no_auto`, `carpeta_compartido`)"
          ."VALUES ('$id','$cargo_id','$cambio_contra','$bloquea_auto','$bloqueo','$copia_seguridad','$antivirus','$progra_no_auto','$carpeta_compartido')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Calidad en la base de datos.
     * @param calidad objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($calidad){
      $id=$calidad->getId();

      try {
          $sql= "SELECT `id`, `cargo_id`, `cambio_contra`, `bloquea_auto`, `bloqueo`, `copia_seguridad`, `antivirus`, `progra_no_auto`, `carpeta_compartido`"
          ."FROM `calidad`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $calidad->setId($data[$i]['id']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $calidad->setCargo_id($cargo);
          $calidad->setCambio_contra($data[$i]['cambio_contra']);
          $calidad->setBloquea_auto($data[$i]['bloquea_auto']);
          $calidad->setBloqueo($data[$i]['bloqueo']);
          $calidad->setCopia_seguridad($data[$i]['copia_seguridad']);
          $calidad->setAntivirus($data[$i]['antivirus']);
          $calidad->setProgra_no_auto($data[$i]['progra_no_auto']);
          $calidad->setCarpeta_compartido($data[$i]['carpeta_compartido']);

          }
      return $calidad;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Calidad en la base de datos.
     * @param calidad objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($calidad){
      $id=$calidad->getId();
$cargo_id=$calidad->getCargo_id()->getId();
$cambio_contra=$calidad->getCambio_contra();
$bloquea_auto=$calidad->getBloquea_auto();
$bloqueo=$calidad->getBloqueo();
$copia_seguridad=$calidad->getCopia_seguridad();
$antivirus=$calidad->getAntivirus();
$progra_no_auto=$calidad->getProgra_no_auto();
$carpeta_compartido=$calidad->getCarpeta_compartido();

      try {
          $sql= "UPDATE `calidad` SET`id`='$id' ,`cargo_id`='$cargo_id' ,`cambio_contra`='$cambio_contra' ,`bloquea_auto`='$bloquea_auto' ,`bloqueo`='$bloqueo' ,`copia_seguridad`='$copia_seguridad' ,`antivirus`='$antivirus' ,`progra_no_auto`='$progra_no_auto' ,`carpeta_compartido`='$carpeta_compartido' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Calidad en la base de datos.
     * @param calidad objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($calidad){
      $id=$calidad->getId();

      try {
          $sql ="DELETE FROM `calidad` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Calidad en la base de datos.
     * @return ArrayList<Calidad> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `cargo_id`, `cambio_contra`, `bloquea_auto`, `bloqueo`, `copia_seguridad`, `antivirus`, `progra_no_auto`, `carpeta_compartido`"
          ."FROM `calidad`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $calidad= new Calidad();
          $calidad->setId($data[$i]['id']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $calidad->setCargo_id($cargo);
          $calidad->setCambio_contra($data[$i]['cambio_contra']);
          $calidad->setBloquea_auto($data[$i]['bloquea_auto']);
          $calidad->setBloqueo($data[$i]['bloqueo']);
          $calidad->setCopia_seguridad($data[$i]['copia_seguridad']);
          $calidad->setAntivirus($data[$i]['antivirus']);
          $calidad->setProgra_no_auto($data[$i]['progra_no_auto']);
          $calidad->setCarpeta_compartido($data[$i]['carpeta_compartido']);

          array_push($lista,$calidad);
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