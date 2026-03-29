<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Paket Dasar',
                'price' => 150000,
                'description' => 'Cocok untuk acara sederhana yang tetap ingin terlihat modern.',
                'features' => json_encode(['1 Template Pilihan', 'Galeri (5 Foto)', 'Google Maps', 'Countdown Timer', 'Revisi 1x']),
            ],
            [
                'name' => 'Paket Premium',
                'price' => 250000,
                'description' => 'Pilihan terbaik untuk momen spesial dengan fitur lengkap.',
                'features' => json_encode(['Semua Fitur Paket Dasar', 'Galeri (15 Foto)', 'Background Music', 'RSVP & Guestbook', 'Love Story Section', 'Revisi 3x']),
            ],
            [
                'name' => 'Paket Platinum',
                'price' => 450000,
                'description' => 'Layanan eksklusif tanpa batas dengan kustomisasi penuh.',
                'features' => json_encode(['Semua Fitur Paket Premium', 'Unlimited Foto', 'Custom Domain', 'Video Prewedding', 'Dashboard Admin Eksklusif', 'Revisi Unlimited']),
            ],
        ];

        foreach ($packages as $package) {
            Package::updateOrCreate(['name' => $package['name']], $package);
        }
    }
}
