<?php

namespace App\Exports;

use App\Models\EventRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class RegistrationEventExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return EventRegistration::select('nama', 'nomor_telepon', 'email', 'domisili', 'tanggal_lahir', 'umur', 'kategori_lomba', 'info_event', 'link')->get();
    }

    public function headings(): array
    {
        return ['Nama', 'Nomor Telepon', 'Email', 'Domisili', 'Tanggal Lahir', 'Kategori Umur', 'Kategori Lomba', 'Dapat Info Event', 'Link'];
    }
}