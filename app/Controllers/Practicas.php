<?php

namespace App\Controllers;

use App\Models\PracticaModel;
use CodeIgniter\Controller;

class Practicas extends Controller
{
    public function index()
    {
        $modelo = new PracticaModel();
        $data['practicas'] = $modelo->findAll();

        return view('practicas/registro_practicas', $data);
    }

    public function guardar()
    {
        $modelo = new PracticaModel();
        $modelo->insert([
            'tipo' => $this->request->getPost('tipo'),
            'nombre' => $this->request->getPost('nombre'),
            'fecha_inicio' => $this->request->getPost('fecha_inicio'),
            'fecha_fin' => $this->request->getPost('fecha_fin'),
            'horas' => $this->request->getPost('horas'),
            'materia' => $this->request->getPost('materia'),
        ]);

        return redirect()->to('/practicas');
    }

    public function eliminar($id)
    {
        $modelo = new PracticaModel();
        if ($modelo->delete($id)) {
            return $this->response->setJSON(['status' => 'ok']);
        } else {
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error']);
        }
    }
}
