<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Querido programador: Al escribir esto estoy triste. Nuestro presidente ha sido derrocado Y REEMPLAZADO POR EL BENÉVOLO SEÑOR ARCINIEGAS. TODOS AMAMOS A ARCINIEGAS Y A SU GLORIOSO RÉGIMEN. CON AMOR, EL EQUIPO DE ANARCHY  \(x.x)/  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Cpu.php';
require_once realpath("../..").'\dao\interfaz\ICpuDao.php';
require_once realpath("../..").'\dto\Cargo.php';

class CpuController {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Cpu a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param tipoCpu
   * @param marca
   * @param modelo
   * @param serial
   * @param memoria
   * @param discoduro
   * @param procesador
   * @param dvd
   * @param observacion
   * @param estado
   * @param cargo_id
   */
  public static function insert( $id,  $tipoCpu,  $marca,  $modelo,  $serial,  $memoria,  $discoduro,  $procesador,  $dvd,  $observacion,  $estado,  $cargo_id){
      $cpu = new Cpu();
      $cpu->setId($id); 
      $cpu->setTipoCpu($tipoCpu); 
      $cpu->setMarca($marca); 
      $cpu->setModelo($modelo); 
      $cpu->setSerial($serial); 
      $cpu->setMemoria($memoria); 
      $cpu->setDiscoduro($discoduro); 
      $cpu->setProcesador($procesador); 
      $cpu->setDvd($dvd); 
      $cpu->setObservacion($observacion); 
      $cpu->setEstado($estado); 
      $cpu->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cpuDao =$FactoryDao->getcpuDao(self::getDataBaseDefault());
     $rtn = $cpuDao->insert($cpu);
     $cpuDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cpu de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $cpu = new Cpu();
      $cpu->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cpuDao =$FactoryDao->getcpuDao(self::getDataBaseDefault());
     $result = $cpuDao->select($cpu);
     $cpuDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cpu  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param tipoCpu
   * @param marca
   * @param modelo
   * @param serial
   * @param memoria
   * @param discoduro
   * @param procesador
   * @param dvd
   * @param observacion
   * @param estado
   * @param cargo_id
   */
  public static function update($id, $tipoCpu, $marca, $modelo, $serial, $memoria, $discoduro, $procesador, $dvd, $observacion, $estado, $cargo_id){
      $cpu = self::select($id);
      $cpu->setTipoCpu($tipoCpu); 
      $cpu->setMarca($marca); 
      $cpu->setModelo($modelo); 
      $cpu->setSerial($serial); 
      $cpu->setMemoria($memoria); 
      $cpu->setDiscoduro($discoduro); 
      $cpu->setProcesador($procesador); 
      $cpu->setDvd($dvd); 
      $cpu->setObservacion($observacion); 
      $cpu->setEstado($estado); 
      $cpu->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cpuDao =$FactoryDao->getcpuDao(self::getDataBaseDefault());
     $cpuDao->update($cpu);
     $cpuDao->close();
  }

  /**
   * Elimina un objeto Cpu de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $cpu = new Cpu();
      $cpu->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cpuDao =$FactoryDao->getcpuDao(self::getDataBaseDefault());
     $cpuDao->delete($cpu);
     $cpuDao->close();
  }

  /**
   * Lista todos los objetos Cpu de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cpu en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cpuDao =$FactoryDao->getcpuDao(self::getDataBaseDefault());
     $result = $cpuDao->listAll();
     $cpuDao->close();
     return $result;
  }


}
//That´s all folks!