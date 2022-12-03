<?php

namespace App\Providers\TodoService;

use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Str;

/**
 * Class TodoManager
 *
 * @package App\Providers\TodoService
 */
class TodoBuilder
{
    /**
     * @var
     */
    private $encryption;

    /**
     * TodoBuilder constructor.
     *
     * @param $encryption
     */
    public function __construct($encryption)
    {
        $this->encryption = $encryption;
    }

    /**
     * @return $this
     */
    public function addTodo()
    {
        Todo::set('Interface');

        return $this;
    }

    /**
     * @return $this
     */
    public function addTodoEncrypt()
    {
        Todo::set(Str::upper($this->encryption));

        return $this;
    }
}
