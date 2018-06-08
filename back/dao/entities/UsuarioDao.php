<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\

include_once realpath('../..').'\dao\interfaz\IUsuarioDao.php';
include_once realpath('../..').'\dto\Usuario.php';
include_once realpath('../..').'\dto\Cargo.php';

class UsuarioDao implements IUsuarioDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Usuario en la base de datos.
     * @param usuario objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($usuario){
      $id=$usuario->getId();
$nombre=$usuario->getNombre();
$contrasena=$usuario->getContrasena();
$roll=$usuario->getRoll();
$estado=$usuario->getEstado();
$cargo_id=$usuario->getCargo_id()->getId();

      try {
          $sql= "INSERT INTO `usuario`( `id`, `nombre`, `contrasena`, `roll`, `estado`, `cargo_id`)"
          ."VALUES ('$id','$nombre','$contrasena','$roll','$estado','$cargo_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($usuario){
      $id=$usuario->getId();

      try {
          $sql= "SELECT `id`, `nombre`, `contrasena`, `roll`, `estado`, `cargo_id`"
          ."FROM `usuario`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $usuario->setId($data[$i]['id']);
          $usuario->setNombre($data[$i]['nombre']);
          $usuario->setContrasena($data[$i]['contrasena']);
          $usuario->setRoll($data[$i]['roll']);
          $usuario->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $usuario->setCargo_id($cargo);

          }
      return $usuario;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Usuario en la base de datos.
     * @param usuario objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($usuario){
      $id=$usuario->getId();
$nombre=$usuario->getNombre();
$contrasena=$usuario->getContrasena();
$roll=$usuario->getRoll();
$estado=$usuario->getEstado();
$cargo_id=$usuario->getCargo_id()->getId();

      try {
          $sql= "UPDATE `usuario` SET`id`='$id' ,`nombre`='$nombre' ,`contrasena`='$contrasena' ,`roll`='$roll' ,`estado`='$estado' ,`cargo_id`='$cargo_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($usuario){
      $id=$usuario->getId();

      try {
          $sql ="DELETE FROM `usuario` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @return ArrayList<Usuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `nombre`, `contrasena`, `roll`, `estado`, `cargo_id`"
          ."FROM `usuario`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $usuario= new Usuario();
          $usuario->setId($data[$i]['id']);
          $usuario->setNombre($data[$i]['nombre']);
          $usuario->setContrasena($data[$i]['contrasena']);
          $usuario->setRoll($data[$i]['roll']);
          $usuario->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $usuario->setCargo_id($cargo);

          array_push($lista,$usuario);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @param usuario objeto con los atributos de inicio de sesión
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function login($usuario){
      $nombre=$usuario->getNombre();
$contrasena=$usuario->getContrasena();

      $usuario = new Usuario();
      try {
          $sql= "SELECT `id`, `nombre`, `contrasena`, `roll`, `estado`, `cargo_id`"
          ."FROM `usuario`"
          ."WHERE `cargo_id`='$nombre' AND`contrasena`='$contrasena'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $usuario->setId($data[$i]['id']);
          $usuario->setNombre($data[$i]['nombre']);
          $usuario->setContrasena($data[$i]['contrasena']);
          $usuario->setRoll($data[$i]['roll']);
          $usuario->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $usuario->setCargo_id($cargo);

      return $usuario;
          }
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