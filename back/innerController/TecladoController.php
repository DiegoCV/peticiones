<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Oh! (°o° ) ¡es Fredy Arciniegas, el intelectualoide millonario!  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Teclado.php';
require_once realpath("../..").'\dao\interfaz\ITecladoDao.php';
require_once realpath("../..").'\dto\Cargo.php';

class TecladoController {

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
   * Crea un objeto Teclado a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param marca
   * @param serial
   * @param observacion
   * @param estado
   * @param cargo_id
   */
  public static function insert( $id,  $marca,  $serial,  $observacion,  $estado,  $cargo_id){
      $teclado = new Teclado();
      $teclado->setId($id); 
      $teclado->setMarca($marca); 
      $teclado->setSerial($serial); 
      $teclado->setObservacion($observacion); 
      $teclado->setEstado($estado); 
      $teclado->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tecladoDao =$FactoryDao->gettecladoDao(self::getDataBaseDefault());
     $rtn = $tecladoDao->insert($teclado);
     $tecladoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Teclado de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $teclado = new Teclado();
      $teclado->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tecladoDao =$FactoryDao->gettecladoDao(self::getDataBaseDefault());
     $result = $tecladoDao->select($teclado);
     $tecladoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Teclado  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param marca
   * @param serial
   * @param observacion
   * @param estado
   * @param cargo_id
   */
  public static function update($id, $marca, $serial, $observacion, $estado, $cargo_id){
      $teclado = self::select($id);
      $teclado->setMarca($marca); 
      $teclado->setSerial($serial); 
      $teclado->setObservacion($observacion); 
      $teclado->setEstado($estado); 
      $teclado->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tecladoDao =$FactoryDao->gettecladoDao(self::getDataBaseDefault());
     $tecladoDao->update($teclado);
     $tecladoDao->close();
  }

  /**
   * Elimina un objeto Teclado de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $teclado = new Teclado();
      $teclado->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tecladoDao =$FactoryDao->gettecladoDao(self::getDataBaseDefault());
     $tecladoDao->delete($teclado);
     $tecladoDao->close();
  }

  /**
   * Lista todos los objetos Teclado de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Teclado en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tecladoDao =$FactoryDao->gettecladoDao(self::getDataBaseDefault());
     $result = $tecladoDao->listAll();
     $tecladoDao->close();
     return $result;
  }


}
//That´s all folks!