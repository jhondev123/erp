<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::insert('
            INSERT INTO document_types ( name, mask, description )
            VALUES (?, ?, ?)
            ', ['cpf', '###.###.###-##', 'Cadastro de Pessoa Física']);

        DB::insert('
        INSERT INTO document_types ( name, mask, description )
        VALUES (?, ?, ?)
        ', ['cnpj', '##.###.###/####-##', 'Cadastro Nacional de Pessoa Jurídica']);
    }
}
