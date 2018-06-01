<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Monitor.php';
require_once realpath("../..").'\dao\interfaz\IMonitorDao.php';
require_once realpath("../..").'\dto\Cargo.php';

class MonitorController {

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
   * Crea un objeto Monitor a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param marca
   * @param modelo
   * @param serial
   * @param pulgadas
   * @param observacion
   * @param estado
   * @param cargo_id
   */
  public static function insert( $id,  $marca,  $modelo,  $serial,  $pulgadas,  $observacion,  $estado,  $cargo_id){
      $monitor = new Monitor();
      $monitor->setId($id); 
      $monitor->setMarca($marca); 
      $monitor->setModelo($modelo); 
      $monitor->setSerial($serial); 
      $monitor->setPulgadas($pulgadas); 
      $monitor->setObservacion($observacion); 
      $monitor->setEstado($estado); 
      $monitor->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $monitorDao =$FactoryDao->getmonitorDao(self::getDataBaseDefault());
     $rtn = $monitorDao->insert($monitor);
     $monitorDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Monitor de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $monitor = new Monitor();
      $monitor->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $monitorDao =$FactoryDao->getmonitorDao(self::getDataBaseDefault());
     $result = $monitorDao->select($monitor);
     $monitorDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Monitor  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param marca
   * @param modelo
   * @param serial
   * @param pulgadas
   * @param observacion
   * @param estado
   * @param cargo_id
   */
  public static function update($id, $marca, $modelo, $serial, $pulgadas, $observacion, $estado, $cargo_id){
      $monitor = self::select($id);
      $monitor->setMarca($marca); 
      $monitor->setModelo($modelo); 
      $monitor->setSerial($serial); 
      $monitor->setPulgadas($pulgadas); 
      $monitor->setObservacion($observacion); 
      $monitor->setEstado($estado); 
      $monitor->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $monitorDao =$FactoryDao->getmonitorDao(self::getDataBaseDefault());
     $monitorDao->update($monitor);
     $monitorDao->close();
  }

  /**
   * Elimina un objeto Monitor de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $monitor = new Monitor();
      $monitor->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $monitorDao =$FactoryDao->getmonitorDao(self::getDataBaseDefault());
     $monitorDao->delete($monitor);
     $monitorDao->close();
  }

  /**
   * Lista todos los objetos Monitor de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Monitor en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $monitorDao =$FactoryDao->getmonitorDao(self::getDataBaseDefault());
     $result = $monitorDao->listAll();
     $monitorDao->close();
     return $result;
  }


}
//That´s all folks!