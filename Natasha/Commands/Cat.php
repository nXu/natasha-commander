<?php
/**
 * (c) 2017. 01. 25..
 * Authors: nxu
 */

namespace Nxu\Natasha\Commands;

class Cat extends Command
{
    protected $triggers = [
        'cat',
        'echo',
        'visszhang',
        'ismételd',
        'mondd utánam'
    ];

    /**
     * Executes a command by processing an input
     *
     * @param string $input
     */
    public function execute($input)
    {
        echo $input;
    }
}
