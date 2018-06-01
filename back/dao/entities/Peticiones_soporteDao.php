<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Muerte a todos los humanos!  \\

include_once realpath('../..').'\dao\interfaz\IPeticiones_soporteDao.php';
include_once realpath('../..').'\dto\Peticiones_soporte.php';
include_once realpath('../..').'\dto\Usuario.php';

class Peticiones_soporteDao implements IPeticiones_soporteDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Peticiones_soporte en la base de datos.
     * @param peticiones_soporte objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($peticiones_soporte){
      $id=$peticiones_soporte->getId();
$peticion=$peticiones_soporte->getPeticion();
$fecha_ini=$peticiones_soporte->getFecha_ini();
$fecha_fin=$peticiones_soporte->getFecha_fin();
$solucion=$peticiones_soporte->getSolucion();
$estado=$peticiones_soporte->getEstado();
$usuario_id=$peticiones_soporte->getUsuario_id()->getId();

      try {
          $sql= "INSERT INTO `peticiones_soporte`( `id`, `peticion`, `fecha_ini`, `fecha_fin`, `solucion`, `estado`, `usuario_id`)"
          ."VALUES ('$id','$peticion','$fecha_ini','$fecha_fin','$solucion','$estado','$usuario_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Peticiones_soporte en la base de datos.
     * @param peticiones_soporte objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($peticiones_soporte){
      $id=$peticiones_soporte->getId();

      try {
          $sql= "SELECT `id`, `peticion`, `fecha_ini`, `fecha_fin`, `solucion`, `estado`, `usuario_id`"
          ."FROM `peticiones_soporte`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $peticiones_soporte->setId($data[$i]['id']);
          $peticiones_soporte->setPeticion($data[$i]['peticion']);
          $peticiones_soporte->setFecha_ini($data[$i]['fecha_ini']);
          $peticiones_soporte->setFecha_fin($data[$i]['fecha_fin']);
          $peticiones_soporte->setSolucion($data[$i]['solucion']);
          $peticiones_soporte->setEstado($data[$i]['estado']);
           $usuario = new Usuario();
           $usuario->setId($data[$i]['usuario_id']);
           $peticiones_soporte->setUsuario_id($usuario);

          }
      return $peticiones_soporte;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Peticiones_soporte en la base de datos.
     * @param peticiones_soporte objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($peticiones_soporte){
      $id=$peticiones_soporte->getId();
$peticion=$peticiones_soporte->getPeticion();
$fecha_ini=$peticiones_soporte->getFecha_ini();
$fecha_fin=$peticiones_soporte->getFecha_fin();
$solucion=$peticiones_soporte->getSolucion();
$estado=$peticiones_soporte->getEstado();
$usuario_id=$peticiones_soporte->getUsuario_id()->getId();

      try {
          $sql= "UPDATE `peticiones_soporte` SET`id`='$id' ,`peticion`='$peticion' ,`fecha_ini`='$fecha_ini' ,`fecha_fin`='$fecha_fin' ,`solucion`='$solucion' ,`estado`='$estado' ,`usuario_id`='$usuario_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Peticiones_soporte en la base de datos.
     * @param peticiones_soporte objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($peticiones_soporte){
      $id=$peticiones_soporte->getId();

      try {
          $sql ="DELETE FROM `peticiones_soporte` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Peticiones_soporte en la base de datos.
     * @return ArrayList<Peticiones_soporte> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `peticion`, `fecha_ini`, `fecha_fin`, `solucion`, `estado`, `usuario_id`"
          ."FROM `peticiones_soporte`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $peticiones_soporte= new Peticiones_soporte();
          $peticiones_soporte->setId($data[$i]['id']);
          $peticiones_soporte->setPeticion($data[$i]['peticion']);
          $peticiones_soporte->setFecha_ini($data[$i]['fecha_ini']);
          $peticiones_soporte->setFecha_fin($data[$i]['fecha_fin']);
          $peticiones_soporte->setSolucion($data[$i]['solucion']);
          $peticiones_soporte->setEstado($data[$i]['estado']);
           $usuario = new Usuario();
           $usuario->setId($data[$i]['usuario_id']);
           $peticiones_soporte->setUsuario_id($usuario);

          array_push($lista,$peticiones_soporte);
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