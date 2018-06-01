<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un generador de código no basta. Ahora debo inventar también un generador de frases tontas  \\

include_once realpath('../..').'\dao\interfaz\IMouseDao.php';
include_once realpath('../..').'\dto\Mouse.php';
include_once realpath('../..').'\dto\Cargo.php';

class MouseDao implements IMouseDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Mouse en la base de datos.
     * @param mouse objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($mouse){
      $id=$mouse->getId();
$marca=$mouse->getMarca();
$serial=$mouse->getSerial();
$observacion=$mouse->getObservacion();
$estado=$mouse->getEstado();
$cargo_id=$mouse->getCargo_id()->getId();

      try {
          $sql= "INSERT INTO `mouse`( `id`, `marca`, `serial`, `observacion`, `estado`, `cargo_id`)"
          ."VALUES ('$id','$marca','$serial','$observacion','$estado','$cargo_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Mouse en la base de datos.
     * @param mouse objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($mouse){
      $id=$mouse->getId();

      try {
          $sql= "SELECT `id`, `marca`, `serial`, `observacion`, `estado`, `cargo_id`"
          ."FROM `mouse`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $mouse->setId($data[$i]['id']);
          $mouse->setMarca($data[$i]['marca']);
          $mouse->setSerial($data[$i]['serial']);
          $mouse->setObservacion($data[$i]['observacion']);
          $mouse->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $mouse->setCargo_id($cargo);

          }
      return $mouse;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Mouse en la base de datos.
     * @param mouse objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($mouse){
      $id=$mouse->getId();
$marca=$mouse->getMarca();
$serial=$mouse->getSerial();
$observacion=$mouse->getObservacion();
$estado=$mouse->getEstado();
$cargo_id=$mouse->getCargo_id()->getId();

      try {
          $sql= "UPDATE `mouse` SET`id`='$id' ,`marca`='$marca' ,`serial`='$serial' ,`observacion`='$observacion' ,`estado`='$estado' ,`cargo_id`='$cargo_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Mouse en la base de datos.
     * @param mouse objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($mouse){
      $id=$mouse->getId();

      try {
          $sql ="DELETE FROM `mouse` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Mouse en la base de datos.
     * @return ArrayList<Mouse> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `marca`, `serial`, `observacion`, `estado`, `cargo_id`"
          ."FROM `mouse`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $mouse= new Mouse();
          $mouse->setId($data[$i]['id']);
          $mouse->setMarca($data[$i]['marca']);
          $mouse->setSerial($data[$i]['serial']);
          $mouse->setObservacion($data[$i]['observacion']);
          $mouse->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $mouse->setCargo_id($cargo);

          array_push($lista,$mouse);
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