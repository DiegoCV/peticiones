<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Has escuchado hablar del grandioso señor Arciniegas?  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Calidad.php';
require_once realpath("../..").'\dao\interfaz\ICalidadDao.php';
require_once realpath("../..").'\dto\Cargo.php';

class CalidadController {

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
   * Crea un objeto Calidad a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param cargo_id
   * @param cambio_contra
   * @param bloquea_auto
   * @param bloqueo
   * @param copia_seguridad
   * @param antivirus
   * @param progra_no _auto
   * @param carpeta_compartido
   */
  public static function insert( $id,  $cargo_id,  $cambio_contra,  $bloquea_auto,  $bloqueo,  $copia_seguridad,  $antivirus,  $progra_no _auto,  $carpeta_compartido){
      $calidad = new Calidad();
      $calidad->setId($id); 
      $calidad->setCargo_id($cargo_id); 
      $calidad->setCambio_contra($cambio_contra); 
      $calidad->setBloquea_auto($bloquea_auto); 
      $calidad->setBloqueo($bloqueo); 
      $calidad->setCopia_seguridad($copia_seguridad); 
      $calidad->setAntivirus($antivirus); 
      $calidad->setProgra_no _auto($progra_no _auto); 
      $calidad->setCarpeta_compartido($carpeta_compartido); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calidadDao =$FactoryDao->getcalidadDao(self::getDataBaseDefault());
     $rtn = $calidadDao->insert($calidad);
     $calidadDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Calidad de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $calidad = new Calidad();
      $calidad->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calidadDao =$FactoryDao->getcalidadDao(self::getDataBaseDefault());
     $result = $calidadDao->select($calidad);
     $calidadDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Calidad  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param cargo_id
   * @param cambio_contra
   * @param bloquea_auto
   * @param bloqueo
   * @param copia_seguridad
   * @param antivirus
   * @param progra_no _auto
   * @param carpeta_compartido
   */
  public static function update($id, $cargo_id, $cambio_contra, $bloquea_auto, $bloqueo, $copia_seguridad, $antivirus, $progra_no _auto, $carpeta_compartido){
      $calidad = self::select($id);
      $calidad->setCargo_id($cargo_id); 
      $calidad->setCambio_contra($cambio_contra); 
      $calidad->setBloquea_auto($bloquea_auto); 
      $calidad->setBloqueo($bloqueo); 
      $calidad->setCopia_seguridad($copia_seguridad); 
      $calidad->setAntivirus($antivirus); 
      $calidad->setProgra_no _auto($progra_no _auto); 
      $calidad->setCarpeta_compartido($carpeta_compartido); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calidadDao =$FactoryDao->getcalidadDao(self::getDataBaseDefault());
     $calidadDao->update($calidad);
     $calidadDao->close();
  }

  /**
   * Elimina un objeto Calidad de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $calidad = new Calidad();
      $calidad->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calidadDao =$FactoryDao->getcalidadDao(self::getDataBaseDefault());
     $calidadDao->delete($calidad);
     $calidadDao->close();
  }

  /**
   * Lista todos los objetos Calidad de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Calidad en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calidadDao =$FactoryDao->getcalidadDao(self::getDataBaseDefault());
     $result = $calidadDao->listAll();
     $calidadDao->close();
     return $result;
  }


}
//That´s all folks!