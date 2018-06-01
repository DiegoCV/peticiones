<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Departamentos.php';
require_once realpath("../..").'\dao\interfaz\IDepartamentosDao.php';

class DepartamentosController {

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
   * Crea un objeto Departamentos a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   */
  public static function insert( $id,  $nombre){
      $departamentos = new Departamentos();
      $departamentos->setId($id); 
      $departamentos->setNombre($nombre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $departamentosDao =$FactoryDao->getdepartamentosDao(self::getDataBaseDefault());
     $rtn = $departamentosDao->insert($departamentos);
     $departamentosDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Departamentos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $departamentos = new Departamentos();
      $departamentos->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $departamentosDao =$FactoryDao->getdepartamentosDao(self::getDataBaseDefault());
     $result = $departamentosDao->select($departamentos);
     $departamentosDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Departamentos  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   */
  public static function update($id, $nombre){
      $departamentos = self::select($id);
      $departamentos->setNombre($nombre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $departamentosDao =$FactoryDao->getdepartamentosDao(self::getDataBaseDefault());
     $departamentosDao->update($departamentos);
     $departamentosDao->close();
  }

  /**
   * Elimina un objeto Departamentos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $departamentos = new Departamentos();
      $departamentos->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $departamentosDao =$FactoryDao->getdepartamentosDao(self::getDataBaseDefault());
     $departamentosDao->delete($departamentos);
     $departamentosDao->close();
  }

  /**
   * Lista todos los objetos Departamentos de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Departamentos en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $departamentosDao =$FactoryDao->getdepartamentosDao(self::getDataBaseDefault());
     $result = $departamentosDao->listAll();
     $departamentosDao->close();
     return $result;
  }


}
//That´s all folks!