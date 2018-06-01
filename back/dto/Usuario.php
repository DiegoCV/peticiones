<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Todos los animales son iguales, pero algunos animales son más iguales que otros  \\


class Usuario {

  private $id;
  private $nombre;
  private $contrasena;
  private $roll;
  private $estado;
  private $cargo_id;

    /**
     * Constructor de Usuario
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
     * Devuelve el valor correspondiente a nombre
     * @return nombre
     */
  public function getNombre(){
      return $this->nombre;
  }

    /**
     * Modifica el valor correspondiente a nombre
     * @param nombre
     */
  public function setNombre($nombre){
      $this->nombre = $nombre;
  }
    /**
     * Devuelve el valor correspondiente a contrasena
     * @return contrasena
     */
  public function getContrasena(){
      return $this->contrasena;
  }

    /**
     * Modifica el valor correspondiente a contrasena
     * @param contrasena
     */
  public function setContrasena($contrasena){
      $this->contrasena = $contrasena;
  }
    /**
     * Devuelve el valor correspondiente a roll
     * @return roll
     */
  public function getRoll(){
      return $this->roll;
  }

    /**
     * Modifica el valor correspondiente a roll
     * @param roll
     */
  public function setRoll($roll){
      $this->roll = $roll;
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
     * Devuelve el valor correspondiente a cargo_id
     * @return cargo_id
     */
  public function getCargo_id(){
      return $this->cargo_id;
  }

    /**
     * Modifica el valor correspondiente a cargo_id
     * @param cargo_id
     */
  public function setCargo_id($cargo_id){
      $this->cargo_id = $cargo_id;
  }


}
//That´s all folks!