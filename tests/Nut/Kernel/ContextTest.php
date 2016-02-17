<?php

namespace Nut\Kernel;

use Nut\Test\TestCase;

class ContextTest extends TestCase
{
    public function testGetEnv()
    {
        $_SERVER['__test'] = 1;

        $Context = new Context();

        $this->assertEquals($Context->getEnv('__test'), 1);
        $this->assertEquals($Context->getEnv('__test', 'fallback'), 1);
        $this->assertEquals($Context->getEnv('__fail', 'fallback'), 'fallback');
        $this->assertEquals($Context->getEnv('__fail'), null);

        unset($_SERVER['__test']);
    }
}

