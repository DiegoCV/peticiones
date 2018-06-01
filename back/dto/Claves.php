<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cansado de escribir bugs? tranquilo, los escribimos por ti  \\


class Claves {

  private $id;
  private $windows_user;
  private $windows_pass;
  private $correo_user;
  private $correo_pass;
  private $usuario_id;

    /**
     * Constructor de Claves
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a id
     * @return id
     */
  public function getId(){
      return $this->id;
  }

    /**
     * Modifica el valor correspondiente a id
     * @param id
     */
  public function setId($id){
      $this->id = $id;
  }
    /**
     * Devuelve el valor correspondiente a windows_user
     * @return windows_user
     */
  public function getWindows_user(){
      return $this->windows_user;
  }

    /**
     * Modifica el valor correspondiente a windows_user
     * @param windows_user
     */
  public function setWindows_user($windows_user){
      $this->windows_user = $windows_user;
  }
    /**
     * Devuelve el valor correspondiente a windows_pass
     * @return windows_pass
     */
  public function getWindows_pass(){
      return $this->windows_pass;
  }

    /**
     * Modifica el valor correspondiente a windows_pass
     * @param windows_pass
     */
  public function setWindows_pass($windows_pass){
      $this->windows_pass = $windows_pass;
  }
    /**
     * Devuelve el valor correspondiente a correo_user
     * @return correo_user
     */
  public function getCorreo_user(){
      return $this->correo_user;
  }

    /**
     * Modifica el valor correspondiente a correo_user
     * @param correo_user
     */
  public function setCorreo_user($correo_user){
      $this->correo_user = $correo_user;
  }
    /**
     * Devuelve el valor correspondiente a correo_pass
     * @return correo_pass
     */
  public function getCorreo_pass(){
      return $this->correo_pass;
  }

    /**
     * Modifica el valor correspondiente a correo_pass
     * @param correo_pass
     */
  public function setCorreo_pass($correo_pass){
      $this->correo_pass = $correo_pass;
  }
    /**
     * Devuelve el valor correspondiente a usuario_id
     * @return usuario_id
     */
  public function getUsuario_id(){
      return $this->usuario_id;
  }

    /**
     * Modifica el valor correspondiente a usuario_id
     * @param usuario_id
     */
  public function setUsuario_id($usuario_id){
      $this->usuario_id = $usuario_id;
  }


}
//That´s all folks!