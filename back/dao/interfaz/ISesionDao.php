<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Traigo una pizza para ¿y se la creyó?  \\


interface ISesionDao {

    /**
     * Guarda un objeto Sesion en la base de datos.
     * @param sesion objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($sesion);
    /**
     * Modifica un objeto Sesion en la base de datos.
     * @param sesion objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($sesion);
    /**
     * Elimina un objeto Sesion en la base de datos.
     * @param sesion objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($sesion);
    /**
     * Busca un objeto Sesion en la base de datos.
     * @param sesion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($sesion);
    /**
     * Lista todos los objetos Sesion en la base de datos.
     * @return Array<Sesion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!