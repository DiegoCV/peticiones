<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vva 'l doro  \\

include_once realpath('../..').'\dao\interfaz\IImpresoraDao.php';
include_once realpath('../..').'\dto\Impresora.php';
include_once realpath('../..').'\dto\Cargo.php';

class ImpresoraDao implements IImpresoraDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Impresora en la base de datos.
     * @param impresora objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($impresora){
      $id=$impresora->getId();
$marca=$impresora->getMarca();
$modelo=$impresora->getModelo();
$serial=$impresora->getSerial();
$tipoConector=$impresora->getTipoConector();
$ipImpresora=$impresora->getIpImpresora();
$observacion=$impresora->getObservacion();
$estado=$impresora->getEstado();
$cargo_id=$impresora->getCargo_id()->getId();

      try {
          $sql= "INSERT INTO `impresora`( `id`, `marca`, `modelo`, `serial`, `tipoConector`, `ipImpresora`, `observacion`, `estado`, `cargo_id`)"
          ."VALUES ('$id','$marca','$modelo','$serial','$tipoConector','$ipImpresora','$observacion','$estado','$cargo_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Impresora en la base de datos.
     * @param impresora objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($impresora){
      $id=$impresora->getId();

      try {
          $sql= "SELECT `id`, `marca`, `modelo`, `serial`, `tipoConector`, `ipImpresora`, `observacion`, `estado`, `cargo_id`"
          ."FROM `impresora`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $impresora->setId($data[$i]['id']);
          $impresora->setMarca($data[$i]['marca']);
          $impresora->setModelo($data[$i]['modelo']);
          $impresora->setSerial($data[$i]['serial']);
          $impresora->setTipoConector($data[$i]['tipoConector']);
          $impresora->setIpImpresora($data[$i]['ipImpresora']);
          $impresora->setObservacion($data[$i]['observacion']);
          $impresora->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $impresora->setCargo_id($cargo);

          }
      return $impresora;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Impresora en la base de datos.
     * @param impresora objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($impresora){
      $id=$impresora->getId();
$marca=$impresora->getMarca();
$modelo=$impresora->getModelo();
$serial=$impresora->getSerial();
$tipoConector=$impresora->getTipoConector();
$ipImpresora=$impresora->getIpImpresora();
$observacion=$impresora->getObservacion();
$estado=$impresora->getEstado();
$cargo_id=$impresora->getCargo_id()->getId();

      try {
          $sql= "UPDATE `impresora` SET`id`='$id' ,`marca`='$marca' ,`modelo`='$modelo' ,`serial`='$serial' ,`tipoConector`='$tipoConector' ,`ipImpresora`='$ipImpresora' ,`observacion`='$observacion' ,`estado`='$estado' ,`cargo_id`='$cargo_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Impresora en la base de datos.
     * @param impresora objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($impresora){
      $id=$impresora->getId();

      try {
          $sql ="DELETE FROM `impresora` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Impresora en la base de datos.
     * @return ArrayList<Impresora> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `marca`, `modelo`, `serial`, `tipoConector`, `ipImpresora`, `observacion`, `estado`, `cargo_id`"
          ."FROM `impresora`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $impresora= new Impresora();
          $impresora->setId($data[$i]['id']);
          $impresora->setMarca($data[$i]['marca']);
          $impresora->setModelo($data[$i]['modelo']);
          $impresora->setSerial($data[$i]['serial']);
          $impresora->setTipoConector($data[$i]['tipoConector']);
          $impresora->setIpImpresora($data[$i]['ipImpresora']);
          $impresora->setObservacion($data[$i]['observacion']);
          $impresora->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $impresora->setCargo_id($cargo);

          array_push($lista,$impresora);
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