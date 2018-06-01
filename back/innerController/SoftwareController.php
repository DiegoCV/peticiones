<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Les traigo amor  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Software.php';
require_once realpath("../..").'\dao\interfaz\ISoftwareDao.php';
require_once realpath("../..").'\dto\Antivirus.php';
require_once realpath("../..").'\dto\Cargo.php';

class SoftwareController {

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
   * Crea un objeto Software a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param sistemaOperativo
   * @param antivirus
   * @param ofimatica
   * @param paqueteContable
   * @param otros
   * @param cargo_id
   */
  public static function insert( $id,  $sistemaOperativo,  $antivirus,  $ofimatica,  $paqueteContable,  $otros,  $cargo_id){
      $software = new Software();
      $software->setId($id); 
      $software->setSistemaOperativo($sistemaOperativo); 
      $software->setAntivirus($antivirus); 
      $software->setOfimatica($ofimatica); 
      $software->setPaqueteContable($paqueteContable); 
      $software->setOtros($otros); 
      $software->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $softwareDao =$FactoryDao->getsoftwareDao(self::getDataBaseDefault());
     $rtn = $softwareDao->insert($software);
     $softwareDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Software de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $software = new Software();
      $software->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $softwareDao =$FactoryDao->getsoftwareDao(self::getDataBaseDefault());
     $result = $softwareDao->select($software);
     $softwareDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Software  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param sistemaOperativo
   * @param antivirus
   * @param ofimatica
   * @param paqueteContable
   * @param otros
   * @param cargo_id
   */
  public static function update($id, $sistemaOperativo, $antivirus, $ofimatica, $paqueteContable, $otros, $cargo_id){
      $software = self::select($id);
      $software->setSistemaOperativo($sistemaOperativo); 
      $software->setAntivirus($antivirus); 
      $software->setOfimatica($ofimatica); 
      $software->setPaqueteContable($paqueteContable); 
      $software->setOtros($otros); 
      $software->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $softwareDao =$FactoryDao->getsoftwareDao(self::getDataBaseDefault());
     $softwareDao->update($software);
     $softwareDao->close();
  }

  /**
   * Elimina un objeto Software de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $software = new Software();
      $software->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $softwareDao =$FactoryDao->getsoftwareDao(self::getDataBaseDefault());
     $softwareDao->delete($software);
     $softwareDao->close();
  }

  /**
   * Lista todos los objetos Software de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Software en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $softwareDao =$FactoryDao->getsoftwareDao(self::getDataBaseDefault());
     $result = $softwareDao->listAll();
     $softwareDao->close();
     return $result;
  }


}
//That´s all folks!