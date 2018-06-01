<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Eres capaz de hackear mi Facebook?  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Mouse.php';
require_once realpath("../..").'\dao\interfaz\IMouseDao.php';
require_once realpath("../..").'\dto\Cargo.php';

class MouseController {

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
   * Crea un objeto Mouse a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param marca
   * @param serial
   * @param observacion
   * @param estado
   * @param cargo_id
   */
  public static function insert( $id,  $marca,  $serial,  $observacion,  $estado,  $cargo_id){
      $mouse = new Mouse();
      $mouse->setId($id); 
      $mouse->setMarca($marca); 
      $mouse->setSerial($serial); 
      $mouse->setObservacion($observacion); 
      $mouse->setEstado($estado); 
      $mouse->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $mouseDao =$FactoryDao->getmouseDao(self::getDataBaseDefault());
     $rtn = $mouseDao->insert($mouse);
     $mouseDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Mouse de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $mouse = new Mouse();
      $mouse->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $mouseDao =$FactoryDao->getmouseDao(self::getDataBaseDefault());
     $result = $mouseDao->select($mouse);
     $mouseDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Mouse  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param marca
   * @param serial
   * @param observacion
   * @param estado
   * @param cargo_id
   */
  public static function update($id, $marca, $serial, $observacion, $estado, $cargo_id){
      $mouse = self::select($id);
      $mouse->setMarca($marca); 
      $mouse->setSerial($serial); 
      $mouse->setObservacion($observacion); 
      $mouse->setEstado($estado); 
      $mouse->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $mouseDao =$FactoryDao->getmouseDao(self::getDataBaseDefault());
     $mouseDao->update($mouse);
     $mouseDao->close();
  }

  /**
   * Elimina un objeto Mouse de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $mouse = new Mouse();
      $mouse->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $mouseDao =$FactoryDao->getmouseDao(self::getDataBaseDefault());
     $mouseDao->delete($mouse);
     $mouseDao->close();
  }

  /**
   * Lista todos los objetos Mouse de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Mouse en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $mouseDao =$FactoryDao->getmouseDao(self::getDataBaseDefault());
     $result = $mouseDao->listAll();
     $mouseDao->close();
     return $result;
  }


}
//That´s all folks!