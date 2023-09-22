<?php

namespace Aimilink\HyperfExt\Tests;

use Aimilink\Hyperf\Yapi\Dto;
use Aimilink\Hyperf\Yapi\TestResponse as TestBaseResponse;

class TestResponse extends TestBaseResponse
{
    /**
     * @param Dto $dto
     * @return bool
     */
    public function build(Dto $dto) :bool
    {
        $dto->builder($this);

        return true;
    }
}
