<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Generar buen código o poner frases graciosas? ¡La frase! ¡La frase!  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Peticiones_soporte.php';
require_once realpath("../..").'\dao\interfaz\IPeticiones_soporteDao.php';
require_once realpath("../..").'\dto\Usuario.php';

class Peticiones_soporteController {

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
   * Crea un objeto Peticiones_soporte a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param peticion
   * @param fecha_ini
   * @param fecha_fin
   * @param solucion
   * @param estado
   * @param usuario_id
   */
  public static function insert( $id,  $peticion,  $fecha_ini,  $fecha_fin,  $solucion,  $estado,  $usuario_id){
      $peticiones_soporte = new Peticiones_soporte();
      $peticiones_soporte->setId($id); 
      $peticiones_soporte->setPeticion($peticion); 
      $peticiones_soporte->setFecha_ini($fecha_ini); 
      $peticiones_soporte->setFecha_fin($fecha_fin); 
      $peticiones_soporte->setSolucion($solucion); 
      $peticiones_soporte->setEstado($estado); 
      $peticiones_soporte->setUsuario_id($usuario_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_soporteDao =$FactoryDao->getpeticiones_soporteDao(self::getDataBaseDefault());
     $rtn = $peticiones_soporteDao->insert($peticiones_soporte);
     $peticiones_soporteDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Peticiones_soporte de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $peticiones_soporte = new Peticiones_soporte();
      $peticiones_soporte->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_soporteDao =$FactoryDao->getpeticiones_soporteDao(self::getDataBaseDefault());
     $result = $peticiones_soporteDao->select($peticiones_soporte);
     $peticiones_soporteDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Peticiones_soporte  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param peticion
   * @param fecha_ini
   * @param fecha_fin
   * @param solucion
   * @param estado
   * @param usuario_id
   */
  public static function update($id, $peticion, $fecha_ini, $fecha_fin, $solucion, $estado, $usuario_id){
      $peticiones_soporte = self::select($id);
      $peticiones_soporte->setPeticion($peticion); 
      $peticiones_soporte->setFecha_ini($fecha_ini); 
      $peticiones_soporte->setFecha_fin($fecha_fin); 
      $peticiones_soporte->setSolucion($solucion); 
      $peticiones_soporte->setEstado($estado); 
      $peticiones_soporte->setUsuario_id($usuario_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_soporteDao =$FactoryDao->getpeticiones_soporteDao(self::getDataBaseDefault());
     $peticiones_soporteDao->update($peticiones_soporte);
     $peticiones_soporteDao->close();
  }

  /**
   * Elimina un objeto Peticiones_soporte de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $peticiones_soporte = new Peticiones_soporte();
      $peticiones_soporte->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_soporteDao =$FactoryDao->getpeticiones_soporteDao(self::getDataBaseDefault());
     $peticiones_soporteDao->delete($peticiones_soporte);
     $peticiones_soporteDao->close();
  }

  /**
   * Lista todos los objetos Peticiones_soporte de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Peticiones_soporte en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_soporteDao =$FactoryDao->getpeticiones_soporteDao(self::getDataBaseDefault());
     $result = $peticiones_soporteDao->listAll();
     $peticiones_soporteDao->close();
     return $result;
  }

  public static function listByUsuario($usuario){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_soporteDao =$FactoryDao->getpeticiones_soporteDao(self::getDataBaseDefault());
     $result = $peticiones_soporteDao->listByUsuario($usuario);
     $peticiones_soporteDao->close();
     return $result;
  }


}
//That´s all folks!