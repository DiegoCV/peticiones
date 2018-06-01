<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En esto paso mis sábados en la noche ( ¬.¬)  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Antivirus.php';
require_once realpath("../..").'\dao\interfaz\IAntivirusDao.php';

class AntivirusController {

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
   * Crea un objeto Antivirus a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   * @param fecha_registro
   * @param fecha_vencimiento
   */
  public static function insert( $id,  $nombre,  $fecha_registro,  $fecha_vencimiento){
      $antivirus = new Antivirus();
      $antivirus->setId($id); 
      $antivirus->setNombre($nombre); 
      $antivirus->setFecha_registro($fecha_registro); 
      $antivirus->setFecha_vencimiento($fecha_vencimiento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $antivirusDao =$FactoryDao->getantivirusDao(self::getDataBaseDefault());
     $rtn = $antivirusDao->insert($antivirus);
     $antivirusDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Antivirus de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $antivirus = new Antivirus();
      $antivirus->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $antivirusDao =$FactoryDao->getantivirusDao(self::getDataBaseDefault());
     $result = $antivirusDao->select($antivirus);
     $antivirusDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Antivirus  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   * @param fecha_registro
   * @param fecha_vencimiento
   */
  public static function update($id, $nombre, $fecha_registro, $fecha_vencimiento){
      $antivirus = self::select($id);
      $antivirus->setNombre($nombre); 
      $antivirus->setFecha_registro($fecha_registro); 
      $antivirus->setFecha_vencimiento($fecha_vencimiento); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $antivirusDao =$FactoryDao->getantivirusDao(self::getDataBaseDefault());
     $antivirusDao->update($antivirus);
     $antivirusDao->close();
  }

  /**
   * Elimina un objeto Antivirus de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $antivirus = new Antivirus();
      $antivirus->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $antivirusDao =$FactoryDao->getantivirusDao(self::getDataBaseDefault());
     $antivirusDao->delete($antivirus);
     $antivirusDao->close();
  }

  /**
   * Lista todos los objetos Antivirus de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Antivirus en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $antivirusDao =$FactoryDao->getantivirusDao(self::getDataBaseDefault());
     $result = $antivirusDao->listAll();
     $antivirusDao->close();
     return $result;
  }


}
//That´s all folks!