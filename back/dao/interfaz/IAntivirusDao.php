<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En lo que a mí respecta, señor Dix, lo imprevisto no existe  \\


interface IAntivirusDao {

    /**
     * Guarda un objeto Antivirus en la base de datos.
     * @param antivirus objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($antivirus);
    /**
     * Modifica un objeto Antivirus en la base de datos.
     * @param antivirus objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($antivirus);
    /**
     * Elimina un objeto Antivirus en la base de datos.
     * @param antivirus objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($antivirus);
    /**
     * Busca un objeto Antivirus en la base de datos.
     * @param antivirus objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($antivirus);
    /**
     * Lista todos los objetos Antivirus en la base de datos.
     * @return Array<Antivirus> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!