<?php
namespace reVoizr\V1\Rest\Pd_queue;

class Pd_queueResourceFactory
{
    public function __invoke($services)
    {
        return new Pd_queueResource();
    }
}
