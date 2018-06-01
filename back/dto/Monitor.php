<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿En serio? ¿Tantos buenos frameworks y estás usando Anarchy?  \\


class Monitor {

  private $id;
  private $marca;
  private $modelo;
  private $serial;
  private $pulgadas;
  private $observacion;
  private $estado;
  private $cargo_id;

    /**
     * Constructor de Monitor
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
     * Devuelve el valor correspondiente a modelo
     * @return modelo
     */
  public function getModelo(){
      return $this->modelo;
  }

    /**
     * Modifica el valor correspondiente a modelo
     * @param modelo
     */
  public function setModelo($modelo){
      $this->modelo = $modelo;
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
     * Devuelve el valor correspondiente a pulgadas
     * @return pulgadas
     */
  public function getPulgadas(){
      return $this->pulgadas;
  }

    /**
     * Modifica el valor correspondiente a pulgadas
     * @param pulgadas
     */
  public function setPulgadas($pulgadas){
      $this->pulgadas = $pulgadas;
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