<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuenta la leyenda que si gritas 'Soy programador' las nenas caerán a tus pies  \\


interface ISoftwareDao {

    /**
     * Guarda un objeto Software en la base de datos.
     * @param software objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($software);
    /**
     * Modifica un objeto Software en la base de datos.
     * @param software objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($software);
    /**
     * Elimina un objeto Software en la base de datos.
     * @param software objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($software);
    /**
     * Busca un objeto Software en la base de datos.
     * @param software objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($software);
    /**
     * Lista todos los objetos Software en la base de datos.
     * @return Array<Software> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!