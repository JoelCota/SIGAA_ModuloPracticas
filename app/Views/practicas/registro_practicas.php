<?= $this->extend('plantilla') ?>

<?= $this->section('contenido') ?>

<div class="container">

  <!-- Registro de Prácticas -->
  <div class="cv-container mt-5">
    <h2 class="header-title mb-0">
      <i class="fas fa-clipboard-list"></i> Registro de Prácticas
    </h2>
    <hr class="mt-2">

    <div class="alert alert-light border d-flex align-items-center" role="alert">
      <i class="fas fa-info-circle mr-2 text-primary"></i>
      <div>En esta sección, puedes registrar tus prácticas profesionales de la Licenciatura en Turismo.</div>
    </div>

    <button class="btn btn-primary float-right mb-3 shadow-sm" data-toggle="modal" data-target="#modalRegistroPractica">
        <i class="fas fa-plus-circle"></i> Agregar Práctica
      </button>


    <div class="table-responsive">
      <table id="tablaPracticas" class="table table-striped table-bordered dataTable">
        <thead class="thead text-center">
          <tr>
            <th><i class="fas fa-tasks"></i> Nombre de la Práctica</th>
            <th><i class="fas fa-tags"></i> Tipo de Práctica</th>
            <th><i class="fas fa-calendar-alt"></i> Fecha Inicio</th>
            <th><i class="fas fa-calendar-check"></i> Fecha Fin</th>
            <th><i class="fas fa-clock"></i> Tiempo (Horas)</th>
            <th><i class="fas fa-book"></i> Materia</th>
            <th><i class="fas fa-cogs"></i> Acciones</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php if (!empty($practicas)): ?>
            <?php foreach ($practicas as $p): ?>
              <tr>
                <td><?= esc($p['nombre']) ?></td>
                <td><?= esc($p['tipo']) ?></td>
                <td><?= esc($p['fecha_inicio']) ?></td>
                <td><?= esc($p['fecha_fin']) ?></td>
                <td><?= esc($p['horas']) ?></td>
                <td><?= esc($p['materia']) ?></td>
                <td>
                  <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                </td>
              </tr>
            <?php endforeach ?>
          <?php else: ?>
            <tr>
              <td colspan="7" class="text-center">Ningún dato disponible en esta tabla</td>
            </tr>
          <?php endif ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal de Registro -->
  <?= view('practicas/modal_registro') ?>
  <?= view('practicas/reportes_admin') ?>

</div>



<?= $this->endSection() ?>