<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En un lugar de La Mancha, de cuyo nombre no quiero acordarme...  \\


interface IClavesDao {

    /**
     * Guarda un objeto Claves en la base de datos.
     * @param claves objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($claves);
    /**
     * Modifica un objeto Claves en la base de datos.
     * @param claves objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($claves);
    /**
     * Elimina un objeto Claves en la base de datos.
     * @param claves objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($claves);
    /**
     * Busca un objeto Claves en la base de datos.
     * @param claves objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($claves);
    /**
     * Lista todos los objetos Claves en la base de datos.
     * @return Array<Claves> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!