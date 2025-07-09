<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePracticasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'tipo' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'fecha_inicio' => [
                'type' => 'DATE',
            ],
            'fecha_fin' => [
                'type' => 'DATE',
            ],
            'horas' => [
                'type' => 'INT',
            ],
            'materia' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('practicas');
    }

    public function down()
    {
        $this->forge->dropTable('practicas');
    }
}
