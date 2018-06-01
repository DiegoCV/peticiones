<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\


class Teclado {

  private $id;
  private $marca;
  private $serial;
  private $observacion;
  private $estado;
  private $cargo_id;

    /**
     * Constructor de Teclado
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
     * Devuelve el valor correspondiente a marca
     * @return marca
     */
  public function getMarca(){
      return $this->marca;
  }

    /**
     * Modifica el valor correspondiente a marca
     * @param marca
     */
  public function setMarca($marca){
      $this->marca = $marca;
  }
    /**
     * Devuelve el valor correspondiente a serial
     * @return serial
     */
  public function getSerial(){
      return $this->serial;
  }

    /**
     * Modifica el valor correspondiente a serial
     * @param serial
     */
  public function setSerial($serial){
      $this->serial = $serial;
  }
    /**
     * Devuelve el valor correspondiente a observacion
     * @return observacion
     */
  public function getObservacion(){
      return $this->observacion;
  }

    /**
     * Modifica el valor correspondiente a observacion
     * @param observacion
     */
  public function setObservacion($observacion){
      $this->observacion = $observacion;
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