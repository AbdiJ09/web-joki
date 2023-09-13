<?php

namespace App\Console\Commands;

use App\Models\JokiRank;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DeletePesananKadaluwarsa extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pesanan:delete-pesanan-kadaluwarsa';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menghapus pesanan yang telah kadaluwarsa';
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentTime = Carbon::now('Asia/Jakarta');
        $thresholdTime = $currentTime->subMinutes(5); // Subtraksi 5 menit dari waktu saat ini

        $kadaluwarsaPesanan = JokiRank::where('payment_expiry', '<', $thresholdTime)->get();

        foreach ($kadaluwarsaPesanan as $pesanan) {
            // Hapus pesanan yang kadaluwarsa
            $pesanan->delete();
        }

        $this->info('Pesanan yang kadaluwarsa telah dihapus.');
    }
}
