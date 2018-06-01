<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Generar buen código o poner frases graciosas? ¡La frase! ¡La frase!  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Peticiones_analisis.php';
require_once realpath("../..").'\dao\interfaz\IPeticiones_analisisDao.php';
require_once realpath("../..").'\dto\Usuario.php';

class Peticiones_analisisController {

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
   * Crea un objeto Peticiones_analisis a partir de sus parámetros y lo guarda en base de datos.
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
      $peticiones_analisis = new Peticiones_analisis();
      $peticiones_analisis->setId($id); 
      $peticiones_analisis->setPeticion($peticion); 
      $peticiones_analisis->setFecha_ini($fecha_ini); 
      $peticiones_analisis->setFecha_fin($fecha_fin); 
      $peticiones_analisis->setSolucion($solucion); 
      $peticiones_analisis->setEstado($estado); 
      $peticiones_analisis->setUsuario_id($usuario_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_analisisDao =$FactoryDao->getpeticiones_analisisDao(self::getDataBaseDefault());
     $rtn = $peticiones_analisisDao->insert($peticiones_analisis);
     $peticiones_analisisDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Peticiones_analisis de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $peticiones_analisis = new Peticiones_analisis();
      $peticiones_analisis->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_analisisDao =$FactoryDao->getpeticiones_analisisDao(self::getDataBaseDefault());
     $result = $peticiones_analisisDao->select($peticiones_analisis);
     $peticiones_analisisDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Peticiones_analisis  ya existente en base de datos.
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
      $peticiones_analisis = self::select($id);
      $peticiones_analisis->setPeticion($peticion); 
      $peticiones_analisis->setFecha_ini($fecha_ini); 
      $peticiones_analisis->setFecha_fin($fecha_fin); 
      $peticiones_analisis->setSolucion($solucion); 
      $peticiones_analisis->setEstado($estado); 
      $peticiones_analisis->setUsuario_id($usuario_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_analisisDao =$FactoryDao->getpeticiones_analisisDao(self::getDataBaseDefault());
     $peticiones_analisisDao->update($peticiones_analisis);
     $peticiones_analisisDao->close();
  }

  /**
   * Elimina un objeto Peticiones_analisis de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $peticiones_analisis = new Peticiones_analisis();
      $peticiones_analisis->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_analisisDao =$FactoryDao->getpeticiones_analisisDao(self::getDataBaseDefault());
     $peticiones_analisisDao->delete($peticiones_analisis);
     $peticiones_analisisDao->close();
  }

  /**
   * Lista todos los objetos Peticiones_analisis de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Peticiones_analisis en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $peticiones_analisisDao =$FactoryDao->getpeticiones_analisisDao(self::getDataBaseDefault());
     $result = $peticiones_analisisDao->listAll();
     $peticiones_analisisDao->close();
     return $result;
  }


}
//That´s all folks!