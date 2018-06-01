<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Alza el puño y ven! ¡En la hoguera hay de beber!  \\


class Antivirus {

  private $id;
  private $nombre;
  private $fecha_registro;
  private $fecha_vencimiento;

    /**
     * Constructor de Antivirus
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
     * Devuelve el valor correspondiente a fecha_registro
     * @return fecha_registro
     */
  public function getFecha_registro(){
      return $this->fecha_registro;
  }

    /**
     * Modifica el valor correspondiente a fecha_registro
     * @param fecha_registro
     */
  public function setFecha_registro($fecha_registro){
      $this->fecha_registro = $fecha_registro;
  }
    /**
     * Devuelve el valor correspondiente a fecha_vencimiento
     * @return fecha_vencimiento
     */
  public function getFecha_vencimiento(){
      return $this->fecha_vencimiento;
  }

    /**
     * Modifica el valor correspondiente a fecha_vencimiento
     * @param fecha_vencimiento
     */
  public function setFecha_vencimiento($fecha_vencimiento){
      $this->fecha_vencimiento = $fecha_vencimiento;
  }


}
//That´s all folks!