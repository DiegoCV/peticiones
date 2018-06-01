<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Usuario.php';
require_once realpath("../..").'\dao\interfaz\IUsuarioDao.php';
require_once realpath("../..").'\dto\Cargo.php';

class UsuarioController {

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
   * Crea un objeto Usuario a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   * @param contrasena
   * @param roll
   * @param estado
   * @param cargo_id
   */
  public static function insert( $id,  $nombre,  $contrasena,  $roll,  $estado,  $cargo_id){
      $usuario = new Usuario();
      $usuario->setId($id); 
      $usuario->setNombre($nombre); 
      $usuario->setContrasena($contrasena); 
      $usuario->setRoll($roll); 
      $usuario->setEstado($estado); 
      $usuario->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $rtn = $usuarioDao->insert($usuario);
     $usuarioDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $usuario = new Usuario();
      $usuario->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->select($usuario);
     $usuarioDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Usuario  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   * @param contrasena
   * @param roll
   * @param estado
   * @param cargo_id
   */
  public static function update($id, $nombre, $contrasena, $roll, $estado, $cargo_id){
      $usuario = self::select($id);
      $usuario->setNombre($nombre); 
      $usuario->setContrasena($contrasena); 
      $usuario->setRoll($roll); 
      $usuario->setEstado($estado); 
      $usuario->setCargo_id($cargo_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $usuarioDao->update($usuario);
     $usuarioDao->close();
  }

  /**
   * Elimina un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $usuario = new Usuario();
      $usuario->setId($id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $usuarioDao->delete($usuario);
     $usuarioDao->close();
  }

  /**
   * Lista todos los objetos Usuario de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Usuario en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->listAll();
     $usuarioDao->close();
     return $result;
  }

  /**
   * Selecciona un objeto Usuario de la base de datos a partir de los atributos de inicio de sesión.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param nombre
   * @param contrasena
   * @return El objeto en base de datos o Null
   */
  public static function login($nombre, $contrasena){
      $usuario = new Usuario();
      $usuario->setNombre($nombre); 
      $usuario->setContrasena($contrasena); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $usuarioDao =$FactoryDao->getusuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->login($usuario);
     $usuarioDao->close();
     return $result;
  }


}
//That´s all folks!