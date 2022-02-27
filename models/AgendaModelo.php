<?php
require_once "connectDBV.php";
class AgendaModelo
{
    static public function mdlListarActividadesParam($fechaInicial, $fechaFinal)
    {
        if ($fechaInicial == null) {
            $stmt = Conexion::conectar()->prepare("CALL LISTAR_ACTIVIDADES_WEB()");

            $stmt->execute();
            return $stmt->fetchAll();
        } else if ($fechaInicial == $fechaFinal) {

            $stmt = Conexion::conectar()->prepare("CALL LISTAR_ACTIVIDADES_WEB_2(:fechaFinal);");
            $stmt->bindParam(":fechaFinal", $fechaFinal, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $fechaActual = new DateTime();
            $fechaActual->add(new DateInterval("P1D"));
            $fechaActualMasUno = $fechaActual->format("Y-m-d");

            $fechaFinal2 = new DateTime($fechaFinal);
            $fechaFinal2->add(new DateInterval("P1D"));
            $fechaFinalMasUno = $fechaFinal2->format("Y-m-d");

            if ($fechaFinalMasUno == $fechaActualMasUno) {
                $stmt = Conexion::conectar()->prepare("CALL LISTAR_ACTIVIDADES_WEB_3(:fechaInicial,:fechaFinalMasUno)");
                $stmt->bindParam(":fechaInicial", $fechaInicial, PDO::PARAM_STR);
                $stmt->bindParam(":fechaFinalMasUno", $fechaFinalMasUno, PDO::PARAM_STR);
            } else {
                $stmt = Conexion::conectar()->prepare("CALL LISTAR_ACTIVIDADES_WEB_3(:fechaInicial,:fechaFinal)");
                $stmt->bindParam(":fechaInicial", $fechaInicial, PDO::PARAM_STR);
                $stmt->bindParam(":fechaFinal", $fechaFinal, PDO::PARAM_STR);
            }
            $stmt->execute();
            return $stmt->fetchAll();
        }

        //Cerramos la conexion por seguridad
        $stmt->close();
        $stmt = null;
    }
}
