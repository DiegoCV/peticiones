<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Impresora.php';
require_once realpath("../..").'\dao\interfaz\IImpresoraDao.php';
require_once realpath("../..").'\dto\Cargo.php';

class ImpresoraController {

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
   * Crea un objeto Impresora a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param marca
   * @param modelo
   * @param serial
   * @param tipoConector
   * @param ipImpresora
   * @param observacion
   * @param estado
   * @param cargo_id
   */
  public static function insert( $id,  $marca,  $modelo,  $serial,  $tipoConector,  $ipImpresora,  $observacion,  $estado,  $cargo_id){
      $impresora = new Impresora();
      $impresora->setId($id); 
      $impresora->setMarca($marca); 
      $impresora->setModelo($modelo); 
      $impresora->setSerial($serial); 
      $impresora->setTipoConector($tipoConector); 
      $impresora->setIpImpresora($ipImpresora); 
      $impresora->setObservacion($observacion); 
      $impresora->setEstado($estado); 
      $impresora->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $impresoraDao =$FactoryDao->getimpresoraDao(self::getDataBaseDefault());
     $rtn = $impresoraDao->insert($impresora);
     $impresoraDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Impresora de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $impresora = new Impresora();
      $impresora->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $impresoraDao =$FactoryDao->getimpresoraDao(self::getDataBaseDefault());
     $result = $impresoraDao->select($impresora);
     $impresoraDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Impresora  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param marca
   * @param modelo
   * @param serial
   * @param tipoConector
   * @param ipImpresora
   * @param observacion
   * @param estado
   * @param cargo_id
   */
  public static function update($id, $marca, $modelo, $serial, $tipoConector, $ipImpresora, $observacion, $estado, $cargo_id){
      $impresora = self::select($id);
      $impresora->setMarca($marca); 
      $impresora->setModelo($modelo); 
      $impresora->setSerial($serial); 
      $impresora->setTipoConector($tipoConector); 
      $impresora->setIpImpresora($ipImpresora); 
      $impresora->setObservacion($observacion); 
      $impresora->setEstado($estado); 
      $impresora->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $impresoraDao =$FactoryDao->getimpresoraDao(self::getDataBaseDefault());
     $impresoraDao->update($impresora);
     $impresoraDao->close();
  }

  /**
   * Elimina un objeto Impresora de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $impresora = new Impresora();
      $impresora->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $impresoraDao =$FactoryDao->getimpresoraDao(self::getDataBaseDefault());
     $impresoraDao->delete($impresora);
     $impresoraDao->close();
  }

  /**
   * Lista todos los objetos Impresora de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Impresora en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $impresoraDao =$FactoryDao->getimpresoraDao(self::getDataBaseDefault());
     $result = $impresoraDao->listAll();
     $impresoraDao->close();
     return $result;
  }


}
//That´s all folks!