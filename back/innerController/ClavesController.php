<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cuantas frases como esta crees que puedo escribir?  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Claves.php';
require_once realpath("../..").'\dao\interfaz\IClavesDao.php';
require_once realpath("../..").'\dto\Usuario.php';

class ClavesController {

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
   * Crea un objeto Claves a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param windows_user
   * @param windows_pass
   * @param correo_user
   * @param correo_pass
   * @param usuario_id
   */
  public static function insert( $id,  $windows_user,  $windows_pass,  $correo_user,  $correo_pass,  $usuario_id){
      $claves = new Claves();
      $claves->setId($id); 
      $claves->setWindows_user($windows_user); 
      $claves->setWindows_pass($windows_pass); 
      $claves->setCorreo_user($correo_user); 
      $claves->setCorreo_pass($correo_pass); 
      $claves->setUsuario_id($usuario_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clavesDao =$FactoryDao->getclavesDao(self::getDataBaseDefault());
     $rtn = $clavesDao->insert($claves);
     $clavesDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Claves de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $claves = new Claves();
      $claves->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clavesDao =$FactoryDao->getclavesDao(self::getDataBaseDefault());
     $result = $clavesDao->select($claves);
     $clavesDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Claves  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param windows_user
   * @param windows_pass
   * @param correo_user
   * @param correo_pass
   * @param usuario_id
   */
  public static function update($id, $windows_user, $windows_pass, $correo_user, $correo_pass, $usuario_id){
      $claves = self::select($id);
      $claves->setWindows_user($windows_user); 
      $claves->setWindows_pass($windows_pass); 
      $claves->setCorreo_user($correo_user); 
      $claves->setCorreo_pass($correo_pass); 
      $claves->setUsuario_id($usuario_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clavesDao =$FactoryDao->getclavesDao(self::getDataBaseDefault());
     $clavesDao->update($claves);
     $clavesDao->close();
  }

  /**
   * Elimina un objeto Claves de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $claves = new Claves();
      $claves->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clavesDao =$FactoryDao->getclavesDao(self::getDataBaseDefault());
     $clavesDao->delete($claves);
     $clavesDao->close();
  }

  /**
   * Lista todos los objetos Claves de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Claves en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clavesDao =$FactoryDao->getclavesDao(self::getDataBaseDefault());
     $result = $clavesDao->listAll();
     $clavesDao->close();
     return $result;
  }


}
//That´s all folks!