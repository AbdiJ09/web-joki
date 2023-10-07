<?php

namespace App\Console;

use App\Models\JokiRank;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            // Hapus pesanan yang telah kadaluwarsa
            JokiRank::where('payment_expiry', '<=', now())->delete();
        })->everyMinute(); // Ganti dengan frekuensi yang sesuai
    }
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
