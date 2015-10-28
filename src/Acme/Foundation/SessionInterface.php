<?php

namespace Acme\Foundation;

/**
 * @author Kabir Baidhya
 */
interface SessionInterface
{

    /**
     * @param string $key
     * @return mixed
     */
    public function get($key);
}
