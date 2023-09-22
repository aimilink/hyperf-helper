<?php

namespace Aimilink\HyperfExt;

use Aimilink\HyperfExt\Traits\ApiResponse;
use Hyperf\Resource\Json\JsonResource;
use Psr\Http\Message\ResponseInterface;

abstract class BaseResource extends JsonResource
{
    use ApiResponse;

    /**
     * @var bool
     */
    protected $tolerance = true;

    /**
     * @return ResponseInterface
     */
    public function toResponse(): ResponseInterface
    {
        return $this->success($this->tolerance && is_null($this->resource) ? [] : $this->toArray());
    }

}
