<?php
/**
 * (c) 2017. 01. 25..
 * Authors: nxu
 */

namespace Nxu\Natasha\Commands;

abstract class Command
{
    /**
     * The triggers of the command.
     *
     * @var array|string[]
     */
    protected $triggers = [];

    /**
     * Returns a value indicating whether the command can handle an input.
     *
     * @param string $input
     * @return bool
     */
    public function canHandle($input)
    {
        foreach ($this->triggers as $trigger) {
            if (mb_substr($input, 0, mb_strlen($trigger)) == $trigger) {
                return true;
            }
        }

        return false;
    }

    /**
     * Executes a command by processing an input
     *
     * @param string $input
     */
    public abstract function execute($input);
}
