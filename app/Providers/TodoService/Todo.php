<?php

namespace App\Providers\TodoService;

use Illuminate\Support\Facades\Facade;

/**
 * Class Todo
 *
 * @package App\Providers\TodoService
 *
 * @method static get()
 * @method static set(string $value)
 *
 * @see \App\Providers\TodoService\TodoManager
 */
class Todo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'todo';
    }
}
