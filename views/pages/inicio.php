<div class="content-wrapper">
    <section class="content">
        <div class="card card-olive">
            <div class="card-header">
                <h5 class="card-title m-0 font-weight-bold">Agenda Institucional</h5>
            </div>
            <div class="card-body">
                <button type="btn" class="ml-2 btn btn-success float-right" id="deshacer-filtro-agenda"><i class="fas fa-undo-alt"></i> Deshacer filtro
                </button>
                <button type="button" class="btn btn-default float-right" id="filtro-fecha-agenda">
                    <span>
                        <i class="fa fa-calendar"></i>
                        <?php

                        if (isset($_GET["fechaInicialV"])) {

                            echo $_GET["fechaInicialV"] . " - " . $_GET["fechaFinalV"];
                        } else {

                            echo 'Selecciona un rango de fecha';
                        }

                        ?>
                    </span>
                    <i class="fas fa-caret-down"></i>
                </button>

            </div>
            <div class="card-body">
                <table id="tablaAgenda" class="table table-bordered table-hover dt-responsive tablaAgenda">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th style="width: 10px">Fecha</th>
                            <th>Hora</th>
                            <th>Descripción</th>
                            <th>Lugar</th>
                            <th>Funcionario Público</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET["fechaInicialA"])) {
                            $fechaInicial = $_GET["fechaInicialA"];
                            $fechaFinal = $_GET["fechaFinalA"];
                        } else {
                            $fechaInicial = null;
                            $fechaFinal = null;
                        }
                        $agenda = AgendaControlador::ctrListarActividadesParam($fechaInicial, $fechaFinal);
                        foreach ($agenda as $key => $value) {
                            echo '<tr>
                                <td>' . ($key + 1) . '</td>
                                <td>' . $value["fechaAct"] . '</td>
                                <td>' . $value["horaAct"] . '</td>
                                <td>' . $value["descAct"] . '</td>
                                <td>' . $value["descLugar"] . '</td>
                                <td>' . $value["nombresEmp"] . ' - ' . $value["cargoEmp"] . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>