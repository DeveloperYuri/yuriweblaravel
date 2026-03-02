<?php

namespace App\Exports;

use App\Models\EventRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize; // Tambahkan ini
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment; // Tambahkan ini

class RegistrationEventExport implements FromCollection, WithHeadings, WithMapping, WithDrawings, WithStyles, ShouldAutoSize
{
    protected $rows = 0;

    public function collection()
    {
        return EventRegistration::all();
    }

    /**
    * Map data ke kolom Excel.
    * Sekarang ada 13 kolom (No di awal, Struk di akhir).
    */
    public function map($registration): array
    {
        $this->rows++; // Increment nomor urut setiap baris
        return [
            $this->rows,                    // A - Nomor Urut (1, 2, 3...)
            $registration->nama,            // B
            $registration->nomor_telepon,   // C
            $registration->email,           // D
            $registration->alamat,          // E
            $registration->provinsi,        // F
            $registration->kota,            // G
            $registration->umur,            // H
            $registration->instagram,       // I
            $registration->tiktok,          // J
            $registration->info_event,      // K
            $registration->link,            // L
            '',                             // M (Dikosongkan untuk tempat gambar struk)
        ];
    }

    public function headings(): array
    {
        return [
            'No',              // Kolom A
            'Nama',            // Kolom B
            'Nomor Telepon',
            'Email',
            'Alamat',
            'Provinsi',
            'Kota',
            'Kategori Umur',
            'Akun Instagram',
            'Akun Tiktok',
            'Dapat Info Event',
            'Link',
            'Struk Pembelian' // Sekarang bergeser ke Kolom M
        ];
    }

    public function drawings()
    {
        $drawings = [];
        $registrations = EventRegistration::all();

        foreach ($registrations as $index => $reg) {
            if ($reg->image_upload) {
                $path = public_path('storage/registrationevent/' . $reg->image_upload);
                
                if (file_exists($path)) {
                    $drawing = new Drawing();
                    $drawing->setName('Struk');
                    $drawing->setPath($path);
                    $drawing->setHeight(120); 
                    
                    // Koordinat bergeser ke M karena ada kolom No di depan
                    $drawing->setCoordinates('M' . ($index + 2));
                    
                    $drawing->setOffsetX(20); 
                    $drawing->setOffsetY(10);
                    
                    $drawings[] = $drawing;
                }
            }
        }
        return $drawings;
    }

    public function styles(Worksheet $sheet)
    {
        for ($i = 2; $i <= ($this->rows + 1); $i++) {
            $sheet->getRowDimension($i)->setRowHeight(140);
        }

        // Atur Lebar Kolom No agar tidak terlalu lebar
        $sheet->getColumnDimension('A')->setAutoSize(false);
        $sheet->getColumnDimension('A')->setWidth(5);

        // Atur Lebar Kolom Struk (M)
        $sheet->getColumnDimension('M')->setAutoSize(false);
        $sheet->getColumnDimension('M')->setWidth(50);

        // Rata Tengah dari A sampai M
        $sheet->getStyle('A1:M' . ($this->rows + 1))->getAlignment()->applyFromArray([
            'vertical' => Alignment::VERTICAL_CENTER,
            'horizontal' => Alignment::HORIZONTAL_CENTER,
            'wrapText' => true,
        ]);

        return [
            1 => [
                'font' => ['bold' => true],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => ['rgb' => 'EFEFEF'],
                ],
            ],
        ];
    }
}

// class RegistrationEventExport implements FromCollection, WithHeadings, WithMapping, WithDrawings, WithStyles, ShouldAutoSize
// {
//     protected $rows = 0;

//     public function collection()
//     {
//         return EventRegistration::all();
//     }

//     public function map($registration): array
//     {
//         $this->rows++;
//         return [
//             $registration->nama,
//             $registration->nomor_telepon,
//             $registration->email,
//             $registration->alamat,
//             $registration->provinsi,
//             $registration->kota,
//             $registration->umur,
//             $registration->instagram,
//             $registration->tiktok,
//             // $registration->kategori_lomba,
//             $registration->info_event,
//             $registration->link,
//             '', // Kolom K untuk gambar
//         ];
//     }

//     public function headings(): array
//     {
//         return [
//             'Nama',
//             'Nomor Telepon',
//             'Email',
//             'Alamat',
//             'Provinsi',
//             'Kota',
//             // 'Tanggal Lahir',
//             'Kategori Umur',
//             'Akun Instagram',
//             'Akun Tiktok',
//             // 'Kategori Lomba',
//             'Dapat Info Event',
//             'Link',
//             'Struk Pembelian'
//         ];
//     }

//     public function drawings()
//     {
//         $drawings = [];
//         $registrations = EventRegistration::all();

//         foreach ($registrations as $index => $reg) {
//             if ($reg->image_upload) {
//                 $path = public_path('storage/registrationevent/' . $reg->image_upload);
//                 if (file_exists($path)) {
//                     $drawing = new Drawing();
//                     $drawing->setName('Struk');
//                     $drawing->setPath($path);
//                     $drawing->setHeight(100);
//                     $drawing->setOffsetX(15); // Geser dikit agar ke tengah kolom K
//                     $drawing->setOffsetY(10);
//                     $drawing->setCoordinates('K' . ($index + 2));
//                     $drawings[] = $drawing;
//                 }
//             }
//         }
//         return $drawings;
//     }

//     public function styles(Worksheet $sheet)
//     {
//         // 1. Mengatur Tinggi Baris
//         for ($i = 2; $i <= ($this->rows + 1); $i++) {
//             $sheet->getRowDimension($i)->setRowHeight(90);
//         }

//         // 2. Mengatur Lebar Kolom Khusus (Kolom Gambar)
//         // Karena ShouldAutoSize kadang tidak akurat untuk kolom gambar
//         $sheet->getColumnDimension('K')->setAutoSize(false);
//         $sheet->getColumnDimension('K')->setWidth(60);

//         // 3. Membuat semua teks Rata Tengah (Vertikal & Horizontal)
//         $sheet->getStyle('A1:K' . ($this->rows + 1))->getAlignment()->applyFromArray([
//             'vertical' => Alignment::VERTICAL_CENTER,
//             'horizontal' => Alignment::HORIZONTAL_CENTER,
//             'wrapText' => true, // Agar teks panjang otomatis turun ke bawah (patah)
//         ]);

//         return [
//             // Header Tebal
//             1 => [
//                 'font' => ['bold' => true],
//                 'fill' => [
//                     'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
//                     'startColor' => ['rgb' => 'EFEFEF'], // Warna background header abu muda
//                 ],
//             ],
//         ];
//     }
// }

// use App\Models\EventRegistration;
// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\WithHeadings;


// class RegistrationEventExport implements FromCollection, WithHeadings
// {
//     public function collection()
//     {
//         return EventRegistration::select('nama', 'nomor_telepon', 'email', 'provinsi', 'kota', 'tanggal_lahir', 'umur', 'kategori_lomba', 'info_event', 'link')->get();
//     }

//     public function headings(): array
//     {
//         return ['Nama', 'Nomor Telepon', 'Email', 'Provinsi', 'Kota', 'Tanggal Lahir', 'Kategori Umur', 'Kategori Lomba', 'Dapat Info Event', 'Link'];
//     }
// }