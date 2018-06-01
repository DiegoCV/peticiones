<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Más delgado  \\


class Peticiones_analisis {

  private $id;
  private $peticion;
  private $fecha_ini;
  private $fecha_fin;
  private $solucion;
  private $estado;
  private $usuario_id;

    /**
     * Constructor de Peticiones_analisis
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
     * Devuelve el valor correspondiente a peticion
     * @return peticion
     */
  public function getPeticion(){
      return $this->peticion;
  }

    /**
     * Modifica el valor correspondiente a peticion
     * @param peticion
     */
  public function setPeticion($peticion){
      $this->peticion = $peticion;
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
     * Devuelve el valor correspondiente a solucion
     * @return solucion
     */
  public function getSolucion(){
      return $this->solucion;
  }

    /**
     * Modifica el valor correspondiente a solucion
     * @param solucion
     */
  public function setSolucion($solucion){
      $this->solucion = $solucion;
  }
    /**
     * Devuelve el valor correspondiente a estado
     * @return estado
     */
  public function getEstado(){
      return $this->estado;
  }

    /**
     * Modifica el valor correspondiente a estado
     * @param estado
     */
  public function setEstado($estado){
      $this->estado = $estado;
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