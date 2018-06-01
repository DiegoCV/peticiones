<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\


interface IImpresoraDao {

    /**
     * Guarda un objeto Impresora en la base de datos.
     * @param impresora objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($impresora);
    /**
     * Modifica un objeto Impresora en la base de datos.
     * @param impresora objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($impresora);
    /**
     * Elimina un objeto Impresora en la base de datos.
     * @param impresora objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($impresora);
    /**
     * Busca un objeto Impresora en la base de datos.
     * @param impresora objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($impresora);
    /**
     * Lista todos los objetos Impresora en la base de datos.
     * @return Array<Impresora> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!