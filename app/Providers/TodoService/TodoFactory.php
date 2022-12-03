<?php

namespace App\Providers\TodoService;

use Illuminate\Log\Logger;

/**
 * Class TodoManager
 *
 * @package App\Providers\TodoService
 */
class TodoFactory
{
    public function setMany($items = [])
    {
        $collection = collect($items);

        $collection->map(function ($item) {
            Todo::set($item);
        });
    }
}
