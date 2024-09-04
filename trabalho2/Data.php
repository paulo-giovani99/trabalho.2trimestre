<?php
class Data {

    private int $dia;
    private int $mes;
    private int $ano;
   
    
    public function __construct($dia, $mes, $ano, )
    {
        $this->dia =$dia;
        $this->mes =$mes;
        $this->ano =$ano;
       
    }

    public function getDia()
    {
        return $this->dia;
    }
    public function setDia($dia)
    {
        $this->dia = $dia;
    }

    public function getMes()
    {
        return $this->mes;
    }
    public function setMes($mes)
    {
        $this->mes = $mes;
    }

    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    public function imprimirDataBanco(){
        echo "Hoje é dia: " . date("Y/m/d") . "<br>";
    }
}
