<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Generar buen código o poner frases graciosas? ¡La frase! ¡La frase!  \\


interface IPeticiones_soporteDao {

    /**
     * Guarda un objeto Peticiones_soporte en la base de datos.
     * @param peticiones_soporte objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($peticiones_soporte);
    /**
     * Modifica un objeto Peticiones_soporte en la base de datos.
     * @param peticiones_soporte objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($peticiones_soporte);
    /**
     * Elimina un objeto Peticiones_soporte en la base de datos.
     * @param peticiones_soporte objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($peticiones_soporte);
    /**
     * Busca un objeto Peticiones_soporte en la base de datos.
     * @param peticiones_soporte objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($peticiones_soporte);
    /**
     * Lista todos los objetos Peticiones_soporte en la base de datos.
     * @return Array<Peticiones_soporte> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!