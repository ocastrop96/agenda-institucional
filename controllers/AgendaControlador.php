<?php
class AgendaControlador
{
    static public function ctrListarActividadesParam($fechaInicial, $fechaFinal)
    {
        $repuesta = AgendaModelo::mdlListarActividadesParam($fechaInicial, $fechaFinal);
        return $repuesta;
    }
}
