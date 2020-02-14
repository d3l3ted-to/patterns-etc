<?php

namespace App\ChainOfResponsibility\Classes;

use App\ChainOfResponsibility\Contracts\HandlerContract;

abstract class Handler implements HandlerContract
{
    /** @var HandlerContract $next */
    public $next;

    public function __construct(HandlerContract $next = null)
    {
        if ($next) {
            $this->next = $next;
        }
    }

    public function setNext($next)
    {
        $this->next = $next;
    }
}