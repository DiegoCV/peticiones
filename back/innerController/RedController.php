<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tu alma nos pertenece... Salve Mr. Arciniegas  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Red.php';
require_once realpath("../..").'\dao\interfaz\IRedDao.php';
require_once realpath("../..").'\dto\Cargo.php';

class RedController {

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
   * Crea un objeto Red a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param ip
   * @param masc
   * @param puertaEnlace
   * @param dns1
   * @param dns2
   * @param cargo_id
   */
  public static function insert( $id,  $ip,  $masc,  $puertaEnlace,  $dns1,  $dns2,  $cargo_id){
      $red = new Red();
      $red->setId($id); 
      $red->setIp($ip); 
      $red->setMasc($masc); 
      $red->setPuertaEnlace($puertaEnlace); 
      $red->setDns1($dns1); 
      $red->setDns2($dns2); 
      $red->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $redDao =$FactoryDao->getredDao(self::getDataBaseDefault());
     $rtn = $redDao->insert($red);
     $redDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Red de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $red = new Red();
      $red->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $redDao =$FactoryDao->getredDao(self::getDataBaseDefault());
     $result = $redDao->select($red);
     $redDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Red  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param ip
   * @param masc
   * @param puertaEnlace
   * @param dns1
   * @param dns2
   * @param cargo_id
   */
  public static function update($id, $ip, $masc, $puertaEnlace, $dns1, $dns2, $cargo_id){
      $red = self::select($id);
      $red->setIp($ip); 
      $red->setMasc($masc); 
      $red->setPuertaEnlace($puertaEnlace); 
      $red->setDns1($dns1); 
      $red->setDns2($dns2); 
      $red->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $redDao =$FactoryDao->getredDao(self::getDataBaseDefault());
     $redDao->update($red);
     $redDao->close();
  }

  /**
   * Elimina un objeto Red de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $red = new Red();
      $red->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $redDao =$FactoryDao->getredDao(self::getDataBaseDefault());
     $redDao->delete($red);
     $redDao->close();
  }

  /**
   * Lista todos los objetos Red de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Red en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $redDao =$FactoryDao->getredDao(self::getDataBaseDefault());
     $result = $redDao->listAll();
     $redDao->close();
     return $result;
  }


}
//That´s all folks!