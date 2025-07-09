<?= $this->extend('plantilla') ?>
<?= $this->section('contenido') ?>

<div class="container">

    <!-- Registro de Prácticas -->
    <div class="cv-container mt-5">
        <h2 class="header-title mb-0">
            <i class="fas fa-clipboard-list"></i> Reportes y Estadisticas
        </h2>
        <hr class="mt-2">

        <div class="alert alert-light border d-flex align-items-center" role="alert">
            <i class="fas fa-info-circle mr-2 text-primary"></i>
            <div>Aqui puedes realizar el reporte de las practicas profesionales propias de la Licenciatura en Turismo.</div>
        </div>

        <!-- Filtros -->
            <div class="form-row align-items-end">
                <div class="form-group col-md-3">
                    <select class="form-control" id="filtroTipo" name="tipo">
                        <option selected disabled>Tipo de práctica</option>
                        <option value="introduccion">Introducción</option>
                        <option value="aproximacion">Aproximación</option>
                        <option value="simulacion">Simulación</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <select class="form-control" id="filtroSemestre" name="semestre">
                        <option selected disabled>Semestre</option>
                        <option value="1-3">1° - 3° Sem</option>
                        <option value="4-6">4° - 6° Sem</option>
                        <option value="7-8">7° - 8° Sem</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <select class="form-control" id="filtroEstado" name="estado">
                        <option selected disabled>Estado</option>
                        <option value="cumple">Cumple</option>
                        <option value="nocumple">No cumple</option>
                    </select>
                </div>
                <div class="form-group row-md-3 d-flex justify-content-end">
                    <div>
                        <button class="btn btn-primary mr-2 ml-1" id="btnBuscar">
                            <i class="fas fa-search"></i> Buscar
                        </button>
                        <button class="btn btn-success" id="btnExportar">
                            <i class="fas fa-file-excel"></i> Exportar a Excel
                        </button>
                    </div>
                </div>
            </div>

        <div class="row">
            <!-- Gráfica -->
            <div class="col-md-6">
                <h5 class="font-weight-bold text-secondary">Distribución por tipo</h5>
                <div class="chart-wrapper mt-3">
                    <canvas id="graficaDistribucion" class="w-75"></canvas>
                </div>
                <ul class="list-group mt-3">
                    <li class="list-group-item"><i class="fas fa-circle" style="color:#006db6;"></i> Introducción</li>
                    <li class="list-group-item"><i class="fas fa-circle" style="color:#0066cc;"></i> Aproximación</li>
                    <li class="list-group-item"><i class="fas fa-circle" style="color:#cbd5e1;"></i> Simulación</li>
                </ul>
            </div>

            <!-- Cumplimiento -->
            <div class="col-md-6 mt-5">
                <h5 class="font-weight-bold text-secondary">Cumplimiento Global</h5>
                <table class="table table-bordered text-center mt-3">
                    <thead class="thead-light">
                        <tr>
                            <th>Semestre</th>
                            <th>Porcentaje</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1° - 3° Sem</td>
                            <td>85%</td>
                            <td class="text-success">Cumple</td>
                        </tr>
                        <tr>
                            <td>4° - 6° Sem</td>
                            <td>62%</td>
                            <td class="text-danger">No cumple</td>
                        </tr>
                        <tr>
                            <td>7° - 8° Sem</td>
                            <td>91%</td>
                            <td class="text-success">Cumple</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>



<?= $this->endSection() ?>