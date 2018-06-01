<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\


class Red {

  private $id;
  private $ip;
  private $masc;
  private $puertaEnlace;
  private $dns1;
  private $dns2;
  private $cargo_id;

    /**
     * Constructor de Red
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
     * Devuelve el valor correspondiente a ip
     * @return ip
     */
  public function getIp(){
      return $this->ip;
  }

    /**
     * Modifica el valor correspondiente a ip
     * @param ip
     */
  public function setIp($ip){
      $this->ip = $ip;
  }
    /**
     * Devuelve el valor correspondiente a masc
     * @return masc
     */
  public function getMasc(){
      return $this->masc;
  }

    /**
     * Modifica el valor correspondiente a masc
     * @param masc
     */
  public function setMasc($masc){
      $this->masc = $masc;
  }
    /**
     * Devuelve el valor correspondiente a puertaEnlace
     * @return puertaEnlace
     */
  public function getPuertaEnlace(){
      return $this->puertaEnlace;
  }

    /**
     * Modifica el valor correspondiente a puertaEnlace
     * @param puertaEnlace
     */
  public function setPuertaEnlace($puertaEnlace){
      $this->puertaEnlace = $puertaEnlace;
  }
    /**
     * Devuelve el valor correspondiente a dns1
     * @return dns1
     */
  public function getDns1(){
      return $this->dns1;
  }

    /**
     * Modifica el valor correspondiente a dns1
     * @param dns1
     */
  public function setDns1($dns1){
      $this->dns1 = $dns1;
  }
    /**
     * Devuelve el valor correspondiente a dns2
     * @return dns2
     */
  public function getDns2(){
      return $this->dns2;
  }

    /**
     * Modifica el valor correspondiente a dns2
     * @param dns2
     */
  public function setDns2($dns2){
      $this->dns2 = $dns2;
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