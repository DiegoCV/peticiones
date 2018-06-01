<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora con 25% menos groserías  \\

include_once realpath('../..').'\dao\interfaz\ISesionDao.php';
include_once realpath('../..').'\dto\Sesion.php';
include_once realpath('../..').'\dto\Usuario.php';

class SesionDao implements ISesionDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Sesion en la base de datos.
     * @param sesion objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($sesion){
      $id=$sesion->getId();
$fecha_ini=$sesion->getFecha_ini();
$fecha_fin=$sesion->getFecha_fin();
$usuario=$sesion->getUsuario()->getId();

      try {
          $sql= "INSERT INTO `sesion`( `id`, `fecha_ini`, `fecha_fin`, `usuario`)"
          ."VALUES ('$id','$fecha_ini','$fecha_fin','$usuario')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Sesion en la base de datos.
     * @param sesion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($sesion){
      $id=$sesion->getId();

      try {
          $sql= "SELECT `id`, `fecha_ini`, `fecha_fin`, `usuario`"
          ."FROM `sesion`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $sesion->setId($data[$i]['id']);
          $sesion->setFecha_ini($data[$i]['fecha_ini']);
          $sesion->setFecha_fin($data[$i]['fecha_fin']);
           $usuario = new Usuario();
           $usuario->setId($data[$i]['usuario']);
           $sesion->setUsuario($usuario);

          }
      return $sesion;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Sesion en la base de datos.
     * @param sesion objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($sesion){
      $id=$sesion->getId();
$fecha_ini=$sesion->getFecha_ini();
$fecha_fin=$sesion->getFecha_fin();
$usuario=$sesion->getUsuario()->getId();

      try {
          $sql= "UPDATE `sesion` SET`id`='$id' ,`fecha_ini`='$fecha_ini' ,`fecha_fin`='$fecha_fin' ,`usuario`='$usuario' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Sesion en la base de datos.
     * @param sesion objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($sesion){
      $id=$sesion->getId();

      try {
          $sql ="DELETE FROM `sesion` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Sesion en la base de datos.
     * @return ArrayList<Sesion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `fecha_ini`, `fecha_fin`, `usuario`"
          ."FROM `sesion`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $sesion= new Sesion();
          $sesion->setId($data[$i]['id']);
          $sesion->setFecha_ini($data[$i]['fecha_ini']);
          $sesion->setFecha_fin($data[$i]['fecha_fin']);
           $usuario = new Usuario();
           $usuario->setId($data[$i]['usuario']);
           $sesion->setUsuario($usuario);

          array_push($lista,$sesion);
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