<?php

namespace Acme\Foundation\Session;

/**
 * @author Kabir Baidhya
 */
interface SessionInterface
{

    /**
     * Gets the value of a key set in the session
     *
     * @param string $key
     * @return mixed
     */
    public function get($key);

    /**
     * Checks if session has a key set
     *
     * @param string $key
     * @return bool
     */
    public function has($key);

}
