<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Santos frameworks Batman!  \\

include_once realpath('../..').'\dao\interfaz\ICpuDao.php';
include_once realpath('../..').'\dto\Cpu.php';
include_once realpath('../..').'\dto\Cargo.php';

class CpuDao implements ICpuDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Cpu en la base de datos.
     * @param cpu objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cpu){
      $id=$cpu->getId();
$tipoCpu=$cpu->getTipoCpu();
$marca=$cpu->getMarca();
$modelo=$cpu->getModelo();
$serial=$cpu->getSerial();
$memoria=$cpu->getMemoria();
$discoduro=$cpu->getDiscoduro();
$procesador=$cpu->getProcesador();
$dvd=$cpu->getDvd();
$observacion=$cpu->getObservacion();
$estado=$cpu->getEstado();
$cargo_id=$cpu->getCargo_id()->getId();

      try {
          $sql= "INSERT INTO `cpu`( `id`, `tipoCpu`, `marca`, `modelo`, `serial`, `memoria`, `discoduro`, `procesador`, `dvd`, `observacion`, `estado`, `cargo_id`)"
          ."VALUES ('$id','$tipoCpu','$marca','$modelo','$serial','$memoria','$discoduro','$procesador','$dvd','$observacion','$estado','$cargo_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cpu en la base de datos.
     * @param cpu objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cpu){
      $id=$cpu->getId();

      try {
          $sql= "SELECT `id`, `tipoCpu`, `marca`, `modelo`, `serial`, `memoria`, `discoduro`, `procesador`, `dvd`, `observacion`, `estado`, `cargo_id`"
          ."FROM `cpu`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $cpu->setId($data[$i]['id']);
          $cpu->setTipoCpu($data[$i]['tipoCpu']);
          $cpu->setMarca($data[$i]['marca']);
          $cpu->setModelo($data[$i]['modelo']);
          $cpu->setSerial($data[$i]['serial']);
          $cpu->setMemoria($data[$i]['memoria']);
          $cpu->setDiscoduro($data[$i]['discoduro']);
          $cpu->setProcesador($data[$i]['procesador']);
          $cpu->setDvd($data[$i]['dvd']);
          $cpu->setObservacion($data[$i]['observacion']);
          $cpu->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $cpu->setCargo_id($cargo);

          }
      return $cpu;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Cpu en la base de datos.
     * @param cpu objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cpu){
      $id=$cpu->getId();
$tipoCpu=$cpu->getTipoCpu();
$marca=$cpu->getMarca();
$modelo=$cpu->getModelo();
$serial=$cpu->getSerial();
$memoria=$cpu->getMemoria();
$discoduro=$cpu->getDiscoduro();
$procesador=$cpu->getProcesador();
$dvd=$cpu->getDvd();
$observacion=$cpu->getObservacion();
$estado=$cpu->getEstado();
$cargo_id=$cpu->getCargo_id()->getId();

      try {
          $sql= "UPDATE `cpu` SET`id`='$id' ,`tipoCpu`='$tipoCpu' ,`marca`='$marca' ,`modelo`='$modelo' ,`serial`='$serial' ,`memoria`='$memoria' ,`discoduro`='$discoduro' ,`procesador`='$procesador' ,`dvd`='$dvd' ,`observacion`='$observacion' ,`estado`='$estado' ,`cargo_id`='$cargo_id' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Cpu en la base de datos.
     * @param cpu objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cpu){
      $id=$cpu->getId();

      try {
          $sql ="DELETE FROM `cpu` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cpu en la base de datos.
     * @return ArrayList<Cpu> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `tipoCpu`, `marca`, `modelo`, `serial`, `memoria`, `discoduro`, `procesador`, `dvd`, `observacion`, `estado`, `cargo_id`"
          ."FROM `cpu`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cpu= new Cpu();
          $cpu->setId($data[$i]['id']);
          $cpu->setTipoCpu($data[$i]['tipoCpu']);
          $cpu->setMarca($data[$i]['marca']);
          $cpu->setModelo($data[$i]['modelo']);
          $cpu->setSerial($data[$i]['serial']);
          $cpu->setMemoria($data[$i]['memoria']);
          $cpu->setDiscoduro($data[$i]['discoduro']);
          $cpu->setProcesador($data[$i]['procesador']);
          $cpu->setDvd($data[$i]['dvd']);
          $cpu->setObservacion($data[$i]['observacion']);
          $cpu->setEstado($data[$i]['estado']);
           $cargo = new Cargo();
           $cargo->setId($data[$i]['cargo_id']);
           $cpu->setCargo_id($cargo);

          array_push($lista,$cpu);
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