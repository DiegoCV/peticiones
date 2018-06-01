<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Te veeeeeooooo  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Sesion.php';
require_once realpath("../..").'\dao\interfaz\ISesionDao.php';
require_once realpath("../..").'\dto\Usuario.php';

class SesionController {

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
   * Crea un objeto Sesion a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param fecha_ini
   * @param fecha_fin
   * @param usuario
   */
  public static function insert( $id,  $fecha_ini,  $fecha_fin,  $usuario){
      $sesion = new Sesion();
      $sesion->setId($id); 
      $sesion->setFecha_ini($fecha_ini); 
      $sesion->setFecha_fin($fecha_fin); 
      $sesion->setUsuario($usuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sesionDao =$FactoryDao->getsesionDao(self::getDataBaseDefault());
     $rtn = $sesionDao->insert($sesion);
     $sesionDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Sesion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $sesion = new Sesion();
      $sesion->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sesionDao =$FactoryDao->getsesionDao(self::getDataBaseDefault());
     $result = $sesionDao->select($sesion);
     $sesionDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Sesion  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param fecha_ini
   * @param fecha_fin
   * @param usuario
   */
  public static function update($id, $fecha_ini, $fecha_fin, $usuario){
      $sesion = self::select($id);
      $sesion->setFecha_ini($fecha_ini); 
      $sesion->setFecha_fin($fecha_fin); 
      $sesion->setUsuario($usuario); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sesionDao =$FactoryDao->getsesionDao(self::getDataBaseDefault());
     $sesionDao->update($sesion);
     $sesionDao->close();
  }

  /**
   * Elimina un objeto Sesion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $sesion = new Sesion();
      $sesion->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sesionDao =$FactoryDao->getsesionDao(self::getDataBaseDefault());
     $sesionDao->delete($sesion);
     $sesionDao->close();
  }

  /**
   * Lista todos los objetos Sesion de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Sesion en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sesionDao =$FactoryDao->getsesionDao(self::getDataBaseDefault());
     $result = $sesionDao->listAll();
     $sesionDao->close();
     return $result;
  }


}
//That´s all folks!