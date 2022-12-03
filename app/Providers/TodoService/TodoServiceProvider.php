<?php

namespace App\Providers\TodoService;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

/**
 * Class TodoServiceProvider
 *
 * @package App\Providers\TodoService
 */
class TodoServiceProvider extends ServiceProvider
{
    public function __construct($app)
    {
        parent::__construct($app);

        Log::info('################# START #################');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Log::info('before register');

        $this->app->singleton('todo', function ($app) {
            $app['log']->info('callback register');
            return new TodoManager($app, $app['log']);
        });

        $this->app->bind(TodoBuilder::class, function () {
            return new TodoBuilder(Str::random(6));
        });

        Log::info('after register');
    }

    /**
     * @param TodoBuilder $builder
     */
    public function boot(TodoBuilder $builder)
    {
        Log::info('boot');

        $this->addManyTodo(new TodoFactory());

        $builder->addTodo()->addTodoEncrypt();
    }

    /**
     * @param TodoFactory $factory
     */
    private function addManyTodo(TodoFactory $factory)
    {
        $factory->setMany(['A', 'B', 'C']);
    }
}
