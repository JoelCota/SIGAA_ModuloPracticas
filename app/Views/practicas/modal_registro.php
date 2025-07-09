
<div class="modal fade" id="modalRegistroPractica" tabindex="-1" role="dialog" aria-labelledby="modalRegistroPracticaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded">
      <form id="formPractica" method="post" action="<?= base_url('practicas/guardar') ?>">
        <div class="modal-header text-white" style="background-color: #0066cc;">
          <h5 class="modal-title" id="modalRegistroPracticaLabel">Registro de Prácticas</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body bg-light">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="tipo">Tipo de práctica:</label>
              <select name="tipo" id="tipo" class="form-control" required>
                <option disabled selected>Seleccione un tipo</option>
                <option>Introducción</option>
                <option>Aproximación</option>
                <option>Simulación</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="nombre">Nombre de la Práctica</label>
              <input type="text" name="nombre" class="form-control" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="fecha_inicio">Fecha de Inicio:</label>
              <input type="date" name="fecha_inicio" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
              <label for="fecha_fin">Fecha de finalización:</label>
              <input type="date" name="fecha_fin" class="form-control" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="horas">Tiempo (Horas):</label>
              <select name="horas" class="form-control" required>
                <option selected disabled>Seleccione número de horas</option>
                <option>20</option>
                <option>40</option>
                <option>60</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="materia">Materia:</label>
              <input type="text" name="materia" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times"></i> Cancelar
          </button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
