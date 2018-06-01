<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Oh gloria de las glorias, oh divino testamento de la eterna majestad de la creación de dios  \\

include_once realpath('../..').'\dao\entities\AntivirusDao.php';
include_once realpath('../..').'\dao\entities\CalidadDao.php';
include_once realpath('../..').'\dao\entities\CargoDao.php';
include_once realpath('../..').'\dao\entities\ClavesDao.php';
include_once realpath('../..').'\dao\entities\CpuDao.php';
include_once realpath('../..').'\dao\entities\DepartamentosDao.php';
include_once realpath('../..').'\dao\entities\ImpresoraDao.php';
include_once realpath('../..').'\dao\entities\MonitorDao.php';
include_once realpath('../..').'\dao\entities\MouseDao.php';
include_once realpath('../..').'\dao\entities\Peticiones_analisisDao.php';
include_once realpath('../..').'\dao\entities\Peticiones_soporteDao.php';
include_once realpath('../..').'\dao\entities\RedDao.php';
include_once realpath('../..').'\dao\entities\SesionDao.php';
include_once realpath('../..').'\dao\entities\SoftwareDao.php';
include_once realpath('../..').'\dao\entities\TecladoDao.php';
include_once realpath('../..').'\dao\entities\UsuarioDao.php';


interface IFactoryDao {
	
     /**
     * Devuelve una instancia de AntivirusDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AntivirusDao
     */
     public function getAntivirusDao($dbName);
     /**
     * Devuelve una instancia de CalidadDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CalidadDao
     */
     public function getCalidadDao($dbName);
     /**
     * Devuelve una instancia de CargoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CargoDao
     */
     public function getCargoDao($dbName);
     /**
     * Devuelve una instancia de ClavesDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ClavesDao
     */
     public function getClavesDao($dbName);
     /**
     * Devuelve una instancia de CpuDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CpuDao
     */
     public function getCpuDao($dbName);
     /**
     * Devuelve una instancia de DepartamentosDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de DepartamentosDao
     */
     public function getDepartamentosDao($dbName);
     /**
     * Devuelve una instancia de ImpresoraDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ImpresoraDao
     */
     public function getImpresoraDao($dbName);
     /**
     * Devuelve una instancia de MonitorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de MonitorDao
     */
     public function getMonitorDao($dbName);
     /**
     * Devuelve una instancia de MouseDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de MouseDao
     */
     public function getMouseDao($dbName);
     /**
     * Devuelve una instancia de Peticiones_analisisDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Peticiones_analisisDao
     */
     public function getPeticiones_analisisDao($dbName);
     /**
     * Devuelve una instancia de Peticiones_soporteDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Peticiones_soporteDao
     */
     public function getPeticiones_soporteDao($dbName);
     /**
     * Devuelve una instancia de RedDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de RedDao
     */
     public function getRedDao($dbName);
     /**
     * Devuelve una instancia de SesionDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SesionDao
     */
     public function getSesionDao($dbName);
     /**
     * Devuelve una instancia de SoftwareDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SoftwareDao
     */
     public function getSoftwareDao($dbName);
     /**
     * Devuelve una instancia de TecladoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TecladoDao
     */
     public function getTecladoDao($dbName);
     /**
     * Devuelve una instancia de UsuarioDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de UsuarioDao
     */
     public function getUsuarioDao($dbName);

}
//That´s all folks!