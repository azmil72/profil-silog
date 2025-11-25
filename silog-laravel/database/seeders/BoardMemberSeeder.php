<?php

namespace Database\Seeders;

use App\Models\BoardMember;
use Illuminate\Database\Seeder;

class BoardMemberSeeder extends Seeder
{
    public function run(): void
    {
        // Sample Direksi
        BoardMember::create([
            'name' => 'Dr. Ir. Ahmad Santoso, M.M.',
            'position' => 'Direktur Utama',
            'type' => 'direksi',
            'profile' => 'Dr. Ir. Ahmad Santoso, M.M. adalah seorang profesional berpengalaman dengan lebih dari 20 tahun di industri logistik dan supply chain management.',
            'experiences' => [
                ['year' => '2020 - Sekarang', 'title' => 'Direktur Utama', 'institution' => 'PT Semen Indonesia Logistik (SILOG)'],
                ['year' => '2015 - 2020', 'title' => 'Direktur Operasional', 'institution' => 'PT Semen Indonesia (Persero) Tbk'],
                ['year' => '2010 - 2015', 'title' => 'General Manager Logistik', 'institution' => 'PT Holcim Indonesia Tbk']
            ],
            'educations' => [
                ['year' => '2008', 'title' => 'Doktor (Dr.)', 'institution' => 'Institut Teknologi Bandung (ITB)'],
                ['year' => '2000', 'title' => 'Magister Manajemen (M.M.)', 'institution' => 'Universitas Indonesia']
            ],
            'sort_order' => 1,
            'is_active' => true
        ]);

        BoardMember::create([
            'name' => 'Ir. Budi Hartono, M.T.',
            'position' => 'Direktur Operasional',
            'type' => 'direksi',
            'profile' => 'Ir. Budi Hartono, M.T. memiliki keahlian mendalam dalam manajemen operasional dan pengembangan infrastruktur logistik.',
            'experiences' => [
                ['year' => '2019 - Sekarang', 'title' => 'Direktur Operasional', 'institution' => 'PT Semen Indonesia Logistik (SILOG)'],
                ['year' => '2014 - 2019', 'title' => 'General Manager Operasi', 'institution' => 'PT Semen Indonesia (Persero) Tbk']
            ],
            'educations' => [
                ['year' => '2005', 'title' => 'Magister Teknik (M.T.)', 'institution' => 'Institut Teknologi Bandung (ITB)'],
                ['year' => '1995', 'title' => 'Sarjana Teknik Industri', 'institution' => 'Institut Teknologi Bandung (ITB)']
            ],
            'sort_order' => 2,
            'is_active' => true
        ]);

        // Sample Komisaris
        BoardMember::create([
            'name' => 'Prof. Dr. Ir. Siti Nurhaliza, M.Sc.',
            'position' => 'Komisaris Utama',
            'type' => 'komisaris',
            'profile' => 'Prof. Dr. Ir. Siti Nurhaliza, M.Sc. adalah akademisi dan praktisi di bidang manajemen strategis yang aktif sebagai pengajar di universitas ternama.',
            'experiences' => [
                ['year' => '2019 - Sekarang', 'title' => 'Komisaris Utama', 'institution' => 'PT Semen Indonesia Logistik (SILOG)'],
                ['year' => '2015 - 2019', 'title' => 'Komisaris Independen', 'institution' => 'PT Bank Rakyat Indonesia (Persero) Tbk']
            ],
            'educations' => [
                ['year' => '2005', 'title' => 'Doktor (Dr.)', 'institution' => 'Institut Teknologi Bandung (ITB)'],
                ['year' => '1998', 'title' => 'Magister Manajemen (M.M.)', 'institution' => 'Universitas Indonesia']
            ],
            'sort_order' => 1,
            'is_active' => true
        ]);

        BoardMember::create([
            'name' => 'Drs. Bambang Wijaya, M.B.A.',
            'position' => 'Komisaris Independen',
            'type' => 'komisaris',
            'profile' => 'Drs. Bambang Wijaya, M.B.A. memiliki pengalaman luas dalam bidang keuangan dan tata kelola perusahaan.',
            'experiences' => [
                ['year' => '2020 - Sekarang', 'title' => 'Komisaris Independen', 'institution' => 'PT Semen Indonesia Logistik (SILOG)'],
                ['year' => '2016 - 2020', 'title' => 'Direktur Keuangan', 'institution' => 'PT Astra International Tbk']
            ],
            'educations' => [
                ['year' => '2010', 'title' => 'Master of Business Administration (M.B.A.)', 'institution' => 'University of Chicago Booth School of Business'],
                ['year' => '1990', 'title' => 'Sarjana Ekonomi', 'institution' => 'Universitas Indonesia']
            ],
            'sort_order' => 2,
            'is_active' => true
        ]);
    }
}