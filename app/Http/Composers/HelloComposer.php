<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('view_message', $view->getName());
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
