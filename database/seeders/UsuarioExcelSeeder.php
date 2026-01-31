<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsuarioImport;


class UsuarioExcelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new UsuarioImport, database_path('curso_web.xlsx'));
    }
}

