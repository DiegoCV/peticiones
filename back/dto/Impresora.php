<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Vaya! ¡Al fin harás algo mejor que una calculadora!  \\


class Impresora {

  private $id;
  private $marca;
  private $modelo;
  private $serial;
  private $tipoConector;
  private $ipImpresora;
  private $observacion;
  private $estado;
  private $cargo_id;

    /**
     * Constructor de Impresora
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
     * Devuelve el valor correspondiente a tipoConector
     * @return tipoConector
     */
  public function getTipoConector(){
      return $this->tipoConector;
  }

    /**
     * Modifica el valor correspondiente a tipoConector
     * @param tipoConector
     */
  public function setTipoConector($tipoConector){
      $this->tipoConector = $tipoConector;
  }
    /**
     * Devuelve el valor correspondiente a ipImpresora
     * @return ipImpresora
     */
  public function getIpImpresora(){
      return $this->ipImpresora;
  }

    /**
     * Modifica el valor correspondiente a ipImpresora
     * @param ipImpresora
     */
  public function setIpImpresora($ipImpresora){
      $this->ipImpresora = $ipImpresora;
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