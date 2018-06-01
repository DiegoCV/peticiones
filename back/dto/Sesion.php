<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un tequila, antes de que empiecen los trancazos  \\


class Sesion {

  private $id;
  private $fecha_ini;
  private $fecha_fin;
  private $usuario;

    /**
     * Constructor de Sesion
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
     * Devuelve el valor correspondiente a fecha_ini
     * @return fecha_ini
     */
  public function getFecha_ini(){
      return $this->fecha_ini;
  }

    /**
     * Modifica el valor correspondiente a fecha_ini
     * @param fecha_ini
     */
  public function setFecha_ini($fecha_ini){
      $this->fecha_ini = $fecha_ini;
  }
    /**
     * Devuelve el valor correspondiente a fecha_fin
     * @return fecha_fin
     */
  public function getFecha_fin(){
      return $this->fecha_fin;
  }

    /**
     * Modifica el valor correspondiente a fecha_fin
     * @param fecha_fin
     */
  public function setFecha_fin($fecha_fin){
      $this->fecha_fin = $fecha_fin;
  }
    /**
     * Devuelve el valor correspondiente a usuario
     * @return usuario
     */
  public function getUsuario(){
      return $this->usuario;
  }

    /**
     * Modifica el valor correspondiente a usuario
     * @param usuario
     */
  public function setUsuario($usuario){
      $this->usuario = $usuario;
  }


}
//That´s all folks!