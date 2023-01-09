<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\User;
use Carbon\Carbon;

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
        // $schedule->command('inspire')->hourly();

        //Emails regar plantas
        $schedule->call(function () {
            $users = User::all();
            foreach ($users as $user) {
                $gardens = $user->gardens;
                $plantsToWater = [];
                foreach($gardens as $garden) {
                    $plants = $garden->plants;
                    foreach($plants as $plant) {
                        $today = Carbon::now()->format('d-m-Y');
                        if ($plant->next_water_date == $today) {
                            array_push($plantsToWater, $plant);
                        }
                    }
                }
                if (count($plantsToWater) != 0){
                    $plantsToWater['user'] = $user;
                }
            }

        })->daily();
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
