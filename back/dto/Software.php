<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Documentaqué?  \\


class Software {

  private $id;
  private $sistemaOperativo;
  private $antivirus;
  private $ofimatica;
  private $paqueteContable;
  private $otros;
  private $cargo_id;

    /**
     * Constructor de Software
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
     * Devuelve el valor correspondiente a sistemaOperativo
     * @return sistemaOperativo
     */
  public function getSistemaOperativo(){
      return $this->sistemaOperativo;
  }

    /**
     * Modifica el valor correspondiente a sistemaOperativo
     * @param sistemaOperativo
     */
  public function setSistemaOperativo($sistemaOperativo){
      $this->sistemaOperativo = $sistemaOperativo;
  }
    /**
     * Devuelve el valor correspondiente a antivirus
     * @return antivirus
     */
  public function getAntivirus(){
      return $this->antivirus;
  }

    /**
     * Modifica el valor correspondiente a antivirus
     * @param antivirus
     */
  public function setAntivirus($antivirus){
      $this->antivirus = $antivirus;
  }
    /**
     * Devuelve el valor correspondiente a ofimatica
     * @return ofimatica
     */
  public function getOfimatica(){
      return $this->ofimatica;
  }

    /**
     * Modifica el valor correspondiente a ofimatica
     * @param ofimatica
     */
  public function setOfimatica($ofimatica){
      $this->ofimatica = $ofimatica;
  }
    /**
     * Devuelve el valor correspondiente a paqueteContable
     * @return paqueteContable
     */
  public function getPaqueteContable(){
      return $this->paqueteContable;
  }

    /**
     * Modifica el valor correspondiente a paqueteContable
     * @param paqueteContable
     */
  public function setPaqueteContable($paqueteContable){
      $this->paqueteContable = $paqueteContable;
  }
    /**
     * Devuelve el valor correspondiente a otros
     * @return otros
     */
  public function getOtros(){
      return $this->otros;
  }

    /**
     * Modifica el valor correspondiente a otros
     * @param otros
     */
  public function setOtros($otros){
      $this->otros = $otros;
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