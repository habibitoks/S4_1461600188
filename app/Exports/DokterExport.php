<?php

namespace App\Exports;

use App\Models\Dokter;
use Maatwebsite\Excel\Concerns\FromCollection;

class DokterExport implements FromCollection
{
    public function collection()
    {
        return Dokter::all();
    }
}