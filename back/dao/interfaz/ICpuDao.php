<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando uses Anarchy, Georgie, tú también flotarás  \\


interface ICpuDao {

    /**
     * Guarda un objeto Cpu en la base de datos.
     * @param cpu objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cpu);
    /**
     * Modifica un objeto Cpu en la base de datos.
     * @param cpu objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cpu);
    /**
     * Elimina un objeto Cpu en la base de datos.
     * @param cpu objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cpu);
    /**
     * Busca un objeto Cpu en la base de datos.
     * @param cpu objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cpu);
    /**
     * Lista todos los objetos Cpu en la base de datos.
     * @return Array<Cpu> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!