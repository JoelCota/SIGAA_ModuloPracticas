<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>SIGAA - Módulo de Prácticas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
  <!-- Tu CSS -->
  <link rel="stylesheet" href="<?= base_url('/css/styles.css') ?>">
</head>
<body class="bg-light">

  <!-- Aquí insertamos el contenido de las vistas hijas -->
  <?= $this->renderSection('contenido') ?>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- JS personalizado -->
<script src="<?= base_url('assets/js/practicas.js?v=') . time() ?>"></script>


  <!-- Bootstrap JS con Popper -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
