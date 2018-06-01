<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Mátalos a todos, y que dios elija  \\


class Cpu {

  private $id;
  private $tipoCpu;
  private $marca;
  private $modelo;
  private $serial;
  private $memoria;
  private $discoduro;
  private $procesador;
  private $dvd;
  private $observacion;
  private $estado;
  private $cargo_id;

    /**
     * Constructor de Cpu
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
     * Devuelve el valor correspondiente a tipoCpu
     * @return tipoCpu
     */
  public function getTipoCpu(){
      return $this->tipoCpu;
  }

    /**
     * Modifica el valor correspondiente a tipoCpu
     * @param tipoCpu
     */
  public function setTipoCpu($tipoCpu){
      $this->tipoCpu = $tipoCpu;
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
     * Devuelve el valor correspondiente a memoria
     * @return memoria
     */
  public function getMemoria(){
      return $this->memoria;
  }

    /**
     * Modifica el valor correspondiente a memoria
     * @param memoria
     */
  public function setMemoria($memoria){
      $this->memoria = $memoria;
  }
    /**
     * Devuelve el valor correspondiente a discoduro
     * @return discoduro
     */
  public function getDiscoduro(){
      return $this->discoduro;
  }

    /**
     * Modifica el valor correspondiente a discoduro
     * @param discoduro
     */
  public function setDiscoduro($discoduro){
      $this->discoduro = $discoduro;
  }
    /**
     * Devuelve el valor correspondiente a procesador
     * @return procesador
     */
  public function getProcesador(){
      return $this->procesador;
  }

    /**
     * Modifica el valor correspondiente a procesador
     * @param procesador
     */
  public function setProcesador($procesador){
      $this->procesador = $procesador;
  }
    /**
     * Devuelve el valor correspondiente a dvd
     * @return dvd
     */
  public function getDvd(){
      return $this->dvd;
  }

    /**
     * Modifica el valor correspondiente a dvd
     * @param dvd
     */
  public function setDvd($dvd){
      $this->dvd = $dvd;
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