<?php

namespace Tests\Unit\app\Http\Controllers;

use Tests\TestCase;

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
