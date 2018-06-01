<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Sabías que Anarchy se generó a sí mismo?  \\

include_once realpath('../..').'\dao\interfaz\IAntivirusDao.php';
include_once realpath('../..').'\dto\Antivirus.php';

class AntivirusDao implements IAntivirusDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Antivirus en la base de datos.
     * @param antivirus objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($antivirus){
      $id=$antivirus->getId();
$nombre=$antivirus->getNombre();
$fecha_registro=$antivirus->getFecha_registro();
$fecha_vencimiento=$antivirus->getFecha_vencimiento();

      try {
          $sql= "INSERT INTO `antivirus`( `id`, `nombre`, `fecha_registro`, `fecha_vencimiento`)"
          ."VALUES ('$id','$nombre','$fecha_registro','$fecha_vencimiento')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Antivirus en la base de datos.
     * @param antivirus objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($antivirus){
      $id=$antivirus->getId();

      try {
          $sql= "SELECT `id`, `nombre`, `fecha_registro`, `fecha_vencimiento`"
          ."FROM `antivirus`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $antivirus->setId($data[$i]['id']);
          $antivirus->setNombre($data[$i]['nombre']);
          $antivirus->setFecha_registro($data[$i]['fecha_registro']);
          $antivirus->setFecha_vencimiento($data[$i]['fecha_vencimiento']);

          }
      return $antivirus;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Antivirus en la base de datos.
     * @param antivirus objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($antivirus){
      $id=$antivirus->getId();
$nombre=$antivirus->getNombre();
$fecha_registro=$antivirus->getFecha_registro();
$fecha_vencimiento=$antivirus->getFecha_vencimiento();

      try {
          $sql= "UPDATE `antivirus` SET`id`='$id' ,`nombre`='$nombre' ,`fecha_registro`='$fecha_registro' ,`fecha_vencimiento`='$fecha_vencimiento' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Antivirus en la base de datos.
     * @param antivirus objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($antivirus){
      $id=$antivirus->getId();

      try {
          $sql ="DELETE FROM `antivirus` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Antivirus en la base de datos.
     * @return ArrayList<Antivirus> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `nombre`, `fecha_registro`, `fecha_vencimiento`"
          ."FROM `antivirus`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $antivirus= new Antivirus();
          $antivirus->setId($data[$i]['id']);
          $antivirus->setNombre($data[$i]['nombre']);
          $antivirus->setFecha_registro($data[$i]['fecha_registro']);
          $antivirus->setFecha_vencimiento($data[$i]['fecha_vencimiento']);

          array_push($lista,$antivirus);
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