<?php
/**
 * (c) 2017. 01. 25..
 * Authors: nxu
 */

namespace Nxu\Natasha;

use Nxu\Natasha\Commands\Command;

class CommandRunner
{
    /**
     * @var array
     */
    protected $commands;

    /**
     * CommandRunner constructor.
     *
     * @param array $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    /**
     * Executes a command by parsing the provided input.
     *
     * @param string $input
     */
    public function execute($input)
    {
        foreach ($this->commands as $class) {
            $command = new $class();

            if (! ($command instanceof Command)) {
                throw new \InvalidArgumentException("$class is not an instance of Nxu\\Natasha\\Commands\\Command");
            }

            $command->execute($input);
        }
    }
}
