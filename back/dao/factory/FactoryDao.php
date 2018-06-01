<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase de prueba ¿Quieres ver la de verdad? ( ͡~ ͜ʖ ͡°)  \\

include_once realpath('../..').'\dao\Conexion\Conexion.php';
include_once realpath('../..').'\dao\interfaz\IFactoryDao.php';

class FactoryDao implements IFactoryDao{
	
     private $conn;
     public static $NULL_GESTOR = -1;
    public static $MYSQL_FACTORY = 0;
    public static $POSTGRESQL_FACTORY = 1;
    public static $ORACLE_FACTORY = 2;
    public static $DERBY_FACTORY = 3;

     public function __construct($gestor){
        $this->conn=new Conexion($gestor);
     }
     /**
     * Devuelve una instancia de AntivirusDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AntivirusDao
     */
     public function getAntivirusDao($dbName){
        return new AntivirusDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CalidadDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CalidadDao
     */
     public function getCalidadDao($dbName){
        return new CalidadDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CargoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CargoDao
     */
     public function getCargoDao($dbName){
        return new CargoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ClavesDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ClavesDao
     */
     public function getClavesDao($dbName){
        return new ClavesDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CpuDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CpuDao
     */
     public function getCpuDao($dbName){
        return new CpuDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de DepartamentosDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de DepartamentosDao
     */
     public function getDepartamentosDao($dbName){
        return new DepartamentosDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ImpresoraDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ImpresoraDao
     */
     public function getImpresoraDao($dbName){
        return new ImpresoraDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de MonitorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de MonitorDao
     */
     public function getMonitorDao($dbName){
        return new MonitorDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de MouseDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de MouseDao
     */
     public function getMouseDao($dbName){
        return new MouseDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Peticiones_analisisDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Peticiones_analisisDao
     */
     public function getPeticiones_analisisDao($dbName){
        return new Peticiones_analisisDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Peticiones_soporteDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Peticiones_soporteDao
     */
     public function getPeticiones_soporteDao($dbName){
        return new Peticiones_soporteDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de RedDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de RedDao
     */
     public function getRedDao($dbName){
        return new RedDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de SesionDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SesionDao
     */
     public function getSesionDao($dbName){
        return new SesionDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de SoftwareDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SoftwareDao
     */
     public function getSoftwareDao($dbName){
        return new SoftwareDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de TecladoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TecladoDao
     */
     public function getTecladoDao($dbName){
        return new TecladoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de UsuarioDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de UsuarioDao
     */
     public function getUsuarioDao($dbName){
        return new UsuarioDao($this->conn->obtener($dbName));
    }

}
//That´s all folks!