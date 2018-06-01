<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Más delgado  \\

include_once realpath('../..').'\dao\interfaz\ICargoDao.php';
include_once realpath('../..').'\dto\Cargo.php';
include_once realpath('../..').'\dto\Departamentos.php';

class CargoDao implements ICargoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Cargo en la base de datos.
     * @param cargo objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cargo){
      $id=$cargo->getId();
$nombre=$cargo->getNombre();
$departamentos_id=$cargo->getDepartamentos_id()->getId();

      try {
          $sql= "INSERT INTO `cargo`( `id`, `nombre`, `departamentos_id`)"
          ."VALUES ('$id','$nombre','$departamentos_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cargo en la base de datos.
     * @param cargo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cargo){
      $id=$cargo->getId();

      try {
          $sql= "SELECT `id`, `nombre`, `departamentos_id`"
          ."FROM `cargo`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $cargo->setId($data[$i]['id']);
          $cargo->setNombre($data[$i]['nombre']);
           $departamentos = new Departamentos();
           $departamentos->setId($data[$i]['departamentos_id']);
           $cargo->setDepartamentos_id($departamentos);

          }
      return $cargo;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Cargo en la base de datos.
     * @param cargo objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cargo){
      $id=$cargo->getId();
$nombre=$cargo->getNombre();
$departamentos_id=$cargo->getDepartamentos_id()->getId();

      try {
          $sql= "UPDATE `cargo` SET`id`='$id' ,`nombre`='$nombre' ,`departamentos_id`='$departamentos_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Cargo en la base de datos.
     * @param cargo objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cargo){
      $id=$cargo->getId();

      try {
          $sql ="DELETE FROM `cargo` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cargo en la base de datos.
     * @return ArrayList<Cargo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `nombre`, `departamentos_id`"
          ."FROM `cargo`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cargo= new Cargo();
          $cargo->setId($data[$i]['id']);
          $cargo->setNombre($data[$i]['nombre']);
           $departamentos = new Departamentos();
           $departamentos->setId($data[$i]['departamentos_id']);
           $cargo->setDepartamentos_id($departamentos);

          array_push($lista,$cargo);
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