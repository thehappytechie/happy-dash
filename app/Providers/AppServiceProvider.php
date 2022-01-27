<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Spatie\Health\Facades\Health;
use Illuminate\Support\ServiceProvider;
use Spatie\Activitylog\Models\Activity;
use DeviceDetector\Parser\Client\Browser;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Activity::saving(function (Activity $activity) {
            $activity->properties = $activity->properties->put('agent', [
                'ip', request()->ip(),
                'browser' => \Browser::browserName(),
                'os' => \Browser::platformName(),
            ]);
        });

        Health::checks([
            UsedDiskSpaceCheck::new(),
            DatabaseCheck::new(),
            EnvironmentCheck::new(),
            DebugModeCheck::new(),
            ScheduleCheck::new(),
            CacheCheck::new(),
        ]);
    }
}
