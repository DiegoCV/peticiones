<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\


interface IRedDao {

    /**
     * Guarda un objeto Red en la base de datos.
     * @param red objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($red);
    /**
     * Modifica un objeto Red en la base de datos.
     * @param red objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($red);
    /**
     * Elimina un objeto Red en la base de datos.
     * @param red objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($red);
    /**
     * Busca un objeto Red en la base de datos.
     * @param red objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($red);
    /**
     * Lista todos los objetos Red en la base de datos.
     * @return Array<Red> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!