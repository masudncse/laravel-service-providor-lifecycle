<?php


namespace App\Providers\TodoService;

/**
 * Interface TodoInterface
 *
 * @package App\Providers\TodoService
 */
interface TodoInterface
{
    /**
     * @return mixed
     */
    public function get();

    /**
     * @param $value
     * @return mixed
     */
    public function set($value);
}
