<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\


interface ICalidadDao {

    /**
     * Guarda un objeto Calidad en la base de datos.
     * @param calidad objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($calidad);
    /**
     * Modifica un objeto Calidad en la base de datos.
     * @param calidad objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($calidad);
    /**
     * Elimina un objeto Calidad en la base de datos.
     * @param calidad objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($calidad);
    /**
     * Busca un objeto Calidad en la base de datos.
     * @param calidad objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($calidad);
    /**
     * Lista todos los objetos Calidad en la base de datos.
     * @return Array<Calidad> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!