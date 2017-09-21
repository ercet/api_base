<?php

namespace App\Events;

use Illuminate;

class Event
{
    use Illuminate\Queue\SerializesModels;

    /**
     * the private variables
     */
    private $request;
    private $results;
    private $entity;
    private $exception;

    /**
     * @return mixed
     */
    public function getEntity()
    {
        return $this->entity;
    }
    /**
     * @param mixed $entity
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function setRequest($request)
    {
        $this->request = $request;
    }

    public function getResults()
    {
        return $this->results;
    }

    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * @return mixed
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * @param mixed $exception
     */
    public function setException($exception)
    {
        $this->exception = $exception;
    }
}
