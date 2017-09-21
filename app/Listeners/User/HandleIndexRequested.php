<?php

namespace App\Listeners\User;

use App\Events\User\IndexRequested;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Jobs\User\Index;
use Illuminate;

class HandleIndexRequested
{
    use Illuminate\Foundation\Bus\DispatchesJobs;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  IndexRequested  $event
     * @return void
     */
    public function handle(IndexRequested $event)
    {
        // instantiate the job
        $job = new Index($event->getRequest()->all());

        // fire the job and absorb the results
        $results = $this->dispatchNow($job);
        $event->setResults($results);
    }
}
