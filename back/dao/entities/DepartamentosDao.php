<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    In Anarchy we trust  \\

include_once realpath('../..').'\dao\interfaz\IDepartamentosDao.php';
include_once realpath('../..').'\dto\Departamentos.php';

class DepartamentosDao implements IDepartamentosDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Departamentos en la base de datos.
     * @param departamentos objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($departamentos){
      $id=$departamentos->getId();
$nombre=$departamentos->getNombre();

      try {
          $sql= "INSERT INTO `departamentos`( `id`, `nombre`)"
          ."VALUES ('$id','$nombre')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Departamentos en la base de datos.
     * @param departamentos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($departamentos){
      $id=$departamentos->getId();

      try {
          $sql= "SELECT `id`, `nombre`"
          ."FROM `departamentos`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $departamentos->setId($data[$i]['id']);
          $departamentos->setNombre($data[$i]['nombre']);

          }
      return $departamentos;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Departamentos en la base de datos.
     * @param departamentos objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($departamentos){
      $id=$departamentos->getId();
$nombre=$departamentos->getNombre();

      try {
          $sql= "UPDATE `departamentos` SET`id`='$id' ,`nombre`='$nombre' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Departamentos en la base de datos.
     * @param departamentos objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($departamentos){
      $id=$departamentos->getId();

      try {
          $sql ="DELETE FROM `departamentos` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Departamentos en la base de datos.
     * @return ArrayList<Departamentos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `nombre`"
          ."FROM `departamentos`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $departamentos= new Departamentos();
          $departamentos->setId($data[$i]['id']);
          $departamentos->setNombre($data[$i]['nombre']);

          array_push($lista,$departamentos);
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