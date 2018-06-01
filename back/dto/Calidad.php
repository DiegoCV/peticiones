<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    In Anarchy we trust  \\


class Calidad {

  private $id;
  private $cargo_id;
  private $cambio_contra;
  private $bloquea_auto;
  private $bloqueo;
  private $copia_seguridad;
  private $antivirus;
  private $progra_no_auto;
  private $carpeta_compartido;

    /**
     * Constructor de Calidad
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
    /**
     * Devuelve el valor correspondiente a cambio_contra
     * @return cambio_contra
     */
  public function getCambio_contra(){
      return $this->cambio_contra;
  }

    /**
     * Modifica el valor correspondiente a cambio_contra
     * @param cambio_contra
     */
  public function setCambio_contra($cambio_contra){
      $this->cambio_contra = $cambio_contra;
  }
    /**
     * Devuelve el valor correspondiente a bloquea_auto
     * @return bloquea_auto
     */
  public function getBloquea_auto(){
      return $this->bloquea_auto;
  }

    /**
     * Modifica el valor correspondiente a bloquea_auto
     * @param bloquea_auto
     */
  public function setBloquea_auto($bloquea_auto){
      $this->bloquea_auto = $bloquea_auto;
  }
    /**
     * Devuelve el valor correspondiente a bloqueo
     * @return bloqueo
     */
  public function getBloqueo(){
      return $this->bloqueo;
  }

    /**
     * Modifica el valor correspondiente a bloqueo
     * @param bloqueo
     */
  public function setBloqueo($bloqueo){
      $this->bloqueo = $bloqueo;
  }
    /**
     * Devuelve el valor correspondiente a copia_seguridad
     * @return copia_seguridad
     */
  public function getCopia_seguridad(){
      return $this->copia_seguridad;
  }

    /**
     * Modifica el valor correspondiente a copia_seguridad
     * @param copia_seguridad
     */
  public function setCopia_seguridad($copia_seguridad){
      $this->copia_seguridad = $copia_seguridad;
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
     * Devuelve el valor correspondiente a progra_no_auto
     * @return progra_no_auto
     */
  public function getProgra_no_auto(){
      return $this->progra_no_auto;
  }

    /**
     * Modifica el valor correspondiente a progra_no_auto
     * @param progra_no_auto
     */
  public function setProgra_no_auto($progra_no_auto){
      $this->progra_no_auto = $progra_no_auto;
  }
    /**
     * Devuelve el valor correspondiente a carpeta_compartido
     * @return carpeta_compartido
     */
  public function getCarpeta_compartido(){
      return $this->carpeta_compartido;
  }

    /**
     * Modifica el valor correspondiente a carpeta_compartido
     * @param carpeta_compartido
     */
  public function setCarpeta_compartido($carpeta_compartido){
      $this->carpeta_compartido = $carpeta_compartido;
  }


}
//That´s all folks!