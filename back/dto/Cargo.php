<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ella no te quiere </3 mejor ponte a programar  \\


class Cargo {

  private $id;
  private $nombre;
  private $departamentos_id;

    /**
     * Constructor de Cargo
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
     * Devuelve el valor correspondiente a departamentos_id
     * @return departamentos_id
     */
  public function getDepartamentos_id(){
      return $this->departamentos_id;
  }

    /**
     * Modifica el valor correspondiente a departamentos_id
     * @param departamentos_id
     */
  public function setDepartamentos_id($departamentos_id){
      $this->departamentos_id = $departamentos_id;
  }


}
//That´s all folks!