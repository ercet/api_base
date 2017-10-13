<?php

namespace Tests\Unit\app\Http\Controllers;

use Tests\TestCase;
use DB;
use Illuminate\Support\Facades\Artisan;

abstract class BaseControllerTest extends TestCase
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $method;



    /**
     * Sets up.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        // drop and re-created the database
        $dbname = config('database.connections.mysql.database');
        $sql = "DROP DATABASE IF EXISTS `$dbname`;CREATE SCHEMA `$dbname`;USE `$dbname`;";
        DB::connection('mysql')->getPdo()->exec($sql);

        // migrations
        Artisan::call('migrate');

        // seeders
        $seeder = new \DatabaseSeeder();
        $seeder->run();
    }


    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
    }
}
