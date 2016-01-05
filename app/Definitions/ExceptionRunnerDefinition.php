<?php

namespace App\Definitions;

use App\Exceptions\Runner;
use Fresco\Contracts\Application;
use Fresco\Contracts\Exceptions\ExceptionRunner;
use Fresco\Exceptions\Formatters\HtmlFormatter;
use Fresco\Exceptions\Formatters\WhoopsFormatter;
use Fresco\Exceptions\Handlers\LogHandler;
use Fresco\Foundation\Components\Definition;

class ExceptionRunnerDefinition implements Definition
{

    /**
     * @var Application
     */
    private $app;

    /**
     * ExceptionHandlerDefinition constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @return mixed
     */
    public function define()
    {
        $handler = new Runner($this->app);

        if($this->app->isLocal()) {
            $handler->setFormatter(WhoopsFormatter::class);
        } else {
            $handler->setFormatter(HtmlFormatter::class);
        }

        $handler->addHandler(LogHandler::class);

        return $handler;
    }

    /**
     * @return string
     */
    public function defineAs() : string
    {
        return ExceptionRunner::class;
    }
}
