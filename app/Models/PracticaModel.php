<?php
namespace App\Models;

use CodeIgniter\Model;

class PracticaModel extends Model
{
    protected $table = 'practicas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tipo', 'nombre', 'fecha_inicio', 'fecha_fin', 'horas', 'materia'];
    public $timestamps = true;
}
