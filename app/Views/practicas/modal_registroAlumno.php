<!-- Modal Registro de Alumno -->
<div class="modal fade" id="modalRegistroAlumno" tabindex="-1" role="dialog" aria-labelledby="modalRegistroAlumnoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded shadow-sm">
      <form id="formRegistroAlumno" method="post" action="<?= base_url('alumnos/guardar') ?>">
        <div class="modal-header text-white" style="background-color: #0361DA;">
          <h5 class="modal-title font-weight-bold" id="modalRegistroAlumnoLabel">
            Registro de Alumno
          </h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body bg-light">
          <div class="form-group">
            <label class="font-weight-bold text-primary" for="practica_id">Nombre de la Práctica</label>
            <select name="practica_id" id="practica_id" class="form-control" required>
              <option disabled selected>Selecciona una práctica</option>
              <?php foreach ($practicas as $practica): ?>
                <option value="<?= esc($practica['id']) ?>"><?= esc($practica['nombre']) ?></option>
              <?php endforeach ?>
            </select>
          </div>

          <div class="form-group">
            <label class="font-weight-bold text-primary" for="matricula">Matrícula del Alumno</label>
            <div class="input-group">
              <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Ej. 12345678">
              <div class="input-group-append">
                <button type="button" class="btn btn-outline-primary" id="btnBuscarAlumno">
                  Buscar
                </button>
              </div>
            </div>
          </div>

          <div class="table-responsive mt-4">
            <table class="table table-bordered text-center">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th>Matrícula</th>
                  <th>Nombre completo</th>
                  <th>Carrera</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody id="tablaAlumnos">
                <!-- Aquí se agregan dinámicamente las filas -->
                <tr>
                  <td>1</td>
                  <td>12345678</td>
                  <td>
                    Ana Rodríguez Pérez
                  </td>
                  <td>ISC</td>
                  <td>
                    <button type="button" class="btn btn-sm btn-danger">
                      <i class="fas fa-times"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
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
