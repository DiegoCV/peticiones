<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El coronel necesitó setenta y cinco años -los setenta y cinco años de su vida, minuto a minuto- para llegar a ese instante. Se sintió puro, explícito, invencible, en el momento de responder:  \\


interface IMonitorDao {

    /**
     * Guarda un objeto Monitor en la base de datos.
     * @param monitor objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($monitor);
    /**
     * Modifica un objeto Monitor en la base de datos.
     * @param monitor objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($monitor);
    /**
     * Elimina un objeto Monitor en la base de datos.
     * @param monitor objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($monitor);
    /**
     * Busca un objeto Monitor en la base de datos.
     * @param monitor objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($monitor);
    /**
     * Lista todos los objetos Monitor en la base de datos.
     * @return Array<Monitor> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!