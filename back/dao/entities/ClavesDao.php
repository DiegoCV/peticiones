<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Recuerda, cuando enciendas la molotov, debes arrojarla  \\

include_once realpath('../..').'\dao\interfaz\IClavesDao.php';
include_once realpath('../..').'\dto\Claves.php';
include_once realpath('../..').'\dto\Usuario.php';

class ClavesDao implements IClavesDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Claves en la base de datos.
     * @param claves objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($claves){
      $id=$claves->getId();
$windows_user=$claves->getWindows_user();
$windows_pass=$claves->getWindows_pass();
$correo_user=$claves->getCorreo_user();
$correo_pass=$claves->getCorreo_pass();
$usuario_id=$claves->getUsuario_id()->getId();

      try {
          $sql= "INSERT INTO `claves`( `id`, `windows_user`, `windows_pass`, `correo_user`, `correo_pass`, `usuario_id`)"
          ."VALUES ('$id','$windows_user','$windows_pass','$correo_user','$correo_pass','$usuario_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Claves en la base de datos.
     * @param claves objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($claves){
      $id=$claves->getId();

      try {
          $sql= "SELECT `id`, `windows_user`, `windows_pass`, `correo_user`, `correo_pass`, `usuario_id`"
          ."FROM `claves`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $claves->setId($data[$i]['id']);
          $claves->setWindows_user($data[$i]['windows_user']);
          $claves->setWindows_pass($data[$i]['windows_pass']);
          $claves->setCorreo_user($data[$i]['correo_user']);
          $claves->setCorreo_pass($data[$i]['correo_pass']);
           $usuario = new Usuario();
           $usuario->setId($data[$i]['usuario_id']);
           $claves->setUsuario_id($usuario);

          }
      return $claves;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Claves en la base de datos.
     * @param claves objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($claves){
      $id=$claves->getId();
$windows_user=$claves->getWindows_user();
$windows_pass=$claves->getWindows_pass();
$correo_user=$claves->getCorreo_user();
$correo_pass=$claves->getCorreo_pass();
$usuario_id=$claves->getUsuario_id()->getId();

      try {
          $sql= "UPDATE `claves` SET`id`='$id' ,`windows_user`='$windows_user' ,`windows_pass`='$windows_pass' ,`correo_user`='$correo_user' ,`correo_pass`='$correo_pass' ,`usuario_id`='$usuario_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Claves en la base de datos.
     * @param claves objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($claves){
      $id=$claves->getId();

      try {
          $sql ="DELETE FROM `claves` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Claves en la base de datos.
     * @return ArrayList<Claves> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `windows_user`, `windows_pass`, `correo_user`, `correo_pass`, `usuario_id`"
          ."FROM `claves`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $claves= new Claves();
          $claves->setId($data[$i]['id']);
          $claves->setWindows_user($data[$i]['windows_user']);
          $claves->setWindows_pass($data[$i]['windows_pass']);
          $claves->setCorreo_user($data[$i]['correo_user']);
          $claves->setCorreo_pass($data[$i]['correo_pass']);
           $usuario = new Usuario();
           $usuario->setId($data[$i]['usuario_id']);
           $claves->setUsuario_id($usuario);

          array_push($lista,$claves);
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