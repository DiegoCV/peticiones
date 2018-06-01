<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    404 Frase no encontrada  \\

include_once realpath('../..').'\dao\interfaz\ITecladoDao.php';
include_once realpath('../..').'\dto\Teclado.php';
include_once realpath('../..').'\dto\Cargo.php';

class TecladoDao implements ITecladoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Teclado en la base de datos.
     * @param teclado objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($teclado){
      $id=$teclado->getId();
$marca=$teclado->getMarca();
$serial=$teclado->getSerial();
$observacion=$teclado->getObservacion();
$estado=$teclado->getEstado();
$cargo_id=$teclado->getCargo_id()->getId();

      try {
          $sql= "INSERT INTO `teclado`( `id`, `marca`, `serial`, `observacion`, `estado`, `cargo_id`)"
          ."VALUES ('$id','$marca','$serial','$observacion','$estado','$cargo_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Teclado en la base de datos.
     * @param teclado objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($teclado){
      $id=$teclado->getId();

      try {
          $sql= "SELECT `id`, `marca`, `serial`, `observacion`, `estado`, `cargo_id`"
          ."FROM `teclado`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $teclado->setId($data[$i]['id']);
          $teclado->setMarca($data[$i]['marca']);
          $teclado->setSerial($data[$i]['serial']);
          $teclado->setObservacion($data[$i]['observacion']);
          $teclado->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $teclado->setCargo_id($cargo);

          }
      return $teclado;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Teclado en la base de datos.
     * @param teclado objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($teclado){
      $id=$teclado->getId();
$marca=$teclado->getMarca();
$serial=$teclado->getSerial();
$observacion=$teclado->getObservacion();
$estado=$teclado->getEstado();
$cargo_id=$teclado->getCargo_id()->getId();

      try {
          $sql= "UPDATE `teclado` SET`id`='$id' ,`marca`='$marca' ,`serial`='$serial' ,`observacion`='$observacion' ,`estado`='$estado' ,`cargo_id`='$cargo_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Teclado en la base de datos.
     * @param teclado objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($teclado){
      $id=$teclado->getId();

      try {
          $sql ="DELETE FROM `teclado` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Teclado en la base de datos.
     * @return ArrayList<Teclado> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `marca`, `serial`, `observacion`, `estado`, `cargo_id`"
          ."FROM `teclado`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $teclado= new Teclado();
          $teclado->setId($data[$i]['id']);
          $teclado->setMarca($data[$i]['marca']);
          $teclado->setSerial($data[$i]['serial']);
          $teclado->setObservacion($data[$i]['observacion']);
          $teclado->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $teclado->setCargo_id($cargo);

          array_push($lista,$teclado);
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