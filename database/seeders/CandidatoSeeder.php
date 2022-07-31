<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidatos')->insert([         
            [
                'nome' => 'Christianne Varão',
                'numero' => '51222',
                'partido' => 'PEN',
                'cargo' => 'vereador',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Homero do Zé Filho',
                'numero' => '55555',
                'partido' => 'PSL',
                'cargo' => 'vereador',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Dandor',
                'numero' => '43333',
                'partido' => 'PV',
                'cargo' => 'vereador',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Filho',
                'numero' => '15123',
                'partido' => 'MDB',
                'cargo' => 'vereador',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Joel Varão',
                'numero' => '27222',
                'partido' => 'PSDC',
                'cargo' => 'vereador',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Professor Clebson Almeida',
                'numero' => '45000',
                'partido' => 'PSDB',
                'cargo' => 'vereador',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Chiquinho do Adbon',
                'numero' => '12',
                'partido' => 'PDT',
                'cargo' => 'prefeito',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Malrinete Gralhada',
                'numero' => '15',
                'partido' => 'MDB',
                'cargo' => 'prefeito',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Dr. Francisco',
                'numero' => '45',
                'partido' => 'PSC',
                'cargo' => 'prefeito',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Zé Lopes',
                'numero' => '54',
                'partido' => 'PPL',
                'cargo' => 'prefeito',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Lindomar Pescador',
                'numero' => '65',
                'partido' => 'PC do B',
                'cargo' => 'prefeito',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Branco/Nulo',
                'numero' => '00',
                'partido' => 'Branco/Nulo',
                'cargo' => 'prefeito',
                'quant_votos' => 0,
            ],
            [
                'nome' => 'Branco/Nulo',
                'numero' => '00000',
                'partido' => 'Branco/Nulo',
                'cargo' => 'vereador',
                'quant_votos' => 0,
            ],
            ]);
            }
        }
        