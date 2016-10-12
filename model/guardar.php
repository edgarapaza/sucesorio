<?php
require_once "../coreapp/conection.php";

/**
*
*/
class Expediente
{
    private $id;
    private $expediente;
    private $fechaInicio;
    private $fechaFallecido;
    private $apellidos;
    private $nombres;
    private $numLegajo;
    private $numFolio;
    private $obs;
    const TABLA = 'sunat';

    function __construct($expediente,$fechaInicio,$fechaFallecido,$apellidos,$nombres,$numLegajo,$numFolio,$obs)
    {
        $this->expediente = $expediente;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFallecido = $fechaFallecido;
        $this->apellidos = $apellidos;
        $this->nombres = $nombres;
        $this->numLegajo = $numLegajo;
        $this->numFolio = $numFolio;
        $this->obs = $obs;
    }

    public function Guardar()
    {
        include "../coreapp/conection.php";

        $sql = "INSERT INTO ".self::TABLA ." (num_exp,fec_inicio,fec_fallecio, apellidos,nombres,num_leg,num_folios,obs) VALUES('$this->expediente','$this->fechaInicio','$this->fechaFallecido','$this->apellidos','$this->nombres','$this->numLegajo', '$this->numFolio','$this->obs');";
        $result = $mysqli->query($sql);

        if($result)
        {
            header("Location: ../view/nuevo.php");
            return True;
        }
        else
        {
            echo "No se guardo nada Verifica". mysql_error();
            return False;
        }
    }

    public function Modificar()
    {
        include "../coreapp/conection.php";

        $sql = "UPDATE";
        $mysqli->query($sql);
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    private function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of expediente.
     *
     * @return mixed
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Sets the value of expediente.
     *
     * @param mixed $expediente the expediente
     *
     * @return self
     */
    private function _setExpediente($expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Gets the value of fechaInicio.
     *
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Sets the value of fechaInicio.
     *
     * @param mixed $fechaInicio the fecha inicio
     *
     * @return self
     */
    private function _setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Gets the value of fechaFallecido.
     *
     * @return mixed
     */
    public function getFechaFallecido()
    {
        return $this->fechaFallecido;
    }

    /**
     * Sets the value of fechaFallecido.
     *
     * @param mixed $fechaFallecido the fecha fallecido
     *
     * @return self
     */
    private function _setFechaFallecido($fechaFallecido)
    {
        $this->fechaFallecido = $fechaFallecido;

        return $this;
    }

    /**
     * Gets the value of apellidos.
     *
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Sets the value of apellidos.
     *
     * @param mixed $apellidos the apellidos
     *
     * @return self
     */
    private function _setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Gets the value of nombres.
     *
     * @return mixed
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Sets the value of nombres.
     *
     * @param mixed $nombres the nombres
     *
     * @return self
     */
    private function _setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Gets the value of numLegajo.
     *
     * @return mixed
     */
    public function getNumLegajo()
    {
        return $this->numLegajo;
    }

    /**
     * Sets the value of numLegajo.
     *
     * @param mixed $numLegajo the num legajo
     *
     * @return self
     */
    private function _setNumLegajo($numLegajo)
    {
        $this->numLegajo = $numLegajo;

        return $this;
    }

    /**
     * Gets the value of numFolio.
     *
     * @return mixed
     */
    public function getNumFolio()
    {
        return $this->numFolio;
    }

    /**
     * Sets the value of numFolio.
     *
     * @param mixed $numFolio the num folio
     *
     * @return self
     */
    private function _setNumFolio($numFolio)
    {
        $this->numFolio = $numFolio;

        return $this;
    }

    /**
     * Gets the value of obs.
     *
     * @return mixed
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Sets the value of obs.
     *
     * @param mixed $obs the obs
     *
     * @return self
     */
    private function _setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

}

?>
