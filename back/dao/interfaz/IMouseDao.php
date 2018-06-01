<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\


interface IMouseDao {

    /**
     * Guarda un objeto Mouse en la base de datos.
     * @param mouse objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($mouse);
    /**
     * Modifica un objeto Mouse en la base de datos.
     * @param mouse objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($mouse);
    /**
     * Elimina un objeto Mouse en la base de datos.
     * @param mouse objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($mouse);
    /**
     * Busca un objeto Mouse en la base de datos.
     * @param mouse objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($mouse);
    /**
     * Lista todos los objetos Mouse en la base de datos.
     * @return Array<Mouse> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!