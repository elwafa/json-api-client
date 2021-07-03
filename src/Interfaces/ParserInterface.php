<?php

namespace Swis\JsonApi\Client\Interfaces;

interface ParserInterface
{
    /**
     * @param string $json
     *
     * @return \Swis\JsonApi\Client\Interfaces\DocumentInterface
     */
    public function deserialize(string $json): DocumentInterface;
}
