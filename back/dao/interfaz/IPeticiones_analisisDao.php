<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\


interface IPeticiones_analisisDao {

    /**
     * Guarda un objeto Peticiones_analisis en la base de datos.
     * @param peticiones_analisis objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($peticiones_analisis);
    /**
     * Modifica un objeto Peticiones_analisis en la base de datos.
     * @param peticiones_analisis objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($peticiones_analisis);
    /**
     * Elimina un objeto Peticiones_analisis en la base de datos.
     * @param peticiones_analisis objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($peticiones_analisis);
    /**
     * Busca un objeto Peticiones_analisis en la base de datos.
     * @param peticiones_analisis objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($peticiones_analisis);
    /**
     * Lista todos los objetos Peticiones_analisis en la base de datos.
     * @return Array<Peticiones_analisis> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!