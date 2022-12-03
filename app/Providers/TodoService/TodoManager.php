<?php

namespace App\Providers\TodoService;

use Illuminate\Log\Logger;

/**
 * Class TodoManager
 *
 * @package App\Providers\TodoService
 */
class TodoManager implements TodoInterface
{
    /**
     * @var
     */
    private $app;

    /**
     * @var
     */
    private $log;

    /**
     * @var array
     */
    private $items = [];

    /**
     * TodoManager constructor.
     *
     * @param $app
     * @param $log
     */
    public function __construct($app, $log)
    {
        $this->app = $app;
        $this->log = $log;
    }

    /**
     * @return array|mixed
     */
    public function get()
    {
        return $this->items;
    }

    /**
     * @param $value
     * @return mixed|void
     */
    public function set($value)
    {
        // $this->app['log']->info($value . '- Todo Added.');
        $this->log->info($value . '- Todo Added.');

        array_push($this->items, $value);
    }
}
