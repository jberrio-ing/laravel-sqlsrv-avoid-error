<?php

namespace SqlsrvAvoidError\Providers;

use Illuminate\Support\ServiceProvider;
use SqlsrvAvoidError\Database\Connectors\SqlServerConnector;

class SqlsrvAvoidErrorProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('db.connector.sqlsrv', SqlServerConnector::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
