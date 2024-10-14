<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('notify:preitem')->everyMinute();
        // $schedule->command('send:itemsupdate')->everyFiveMinutes();
        // $schedule->command('send:itemsupdate')->everyOneMinutes();
        // $schedule->command('send:itemsupdate')->everyFiveMinutes();
    //    $schedule->command('send:updates')->everyMinute();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
