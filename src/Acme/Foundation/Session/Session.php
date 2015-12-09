<?php

namespace Acme\Foundation\Session;

use Acme\Foundation\Database\DatabaseInterface;

/**
 * @author Kabir Baidhya
 */
class Session implements SessionInterface
{

    /**
     * @var DatabaseInterface
     */
    protected $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    /**
     * Gets the value of a key set in the session
     *
     * @param string $key
     * @return string|null
     */
    public function get($key)
    {
        $query = $this->db->createQueryBuilder();

        $value = $query
            ->select('value')
            ->from('sessions')
            ->where($query->expr()->eq('name', ':key'))
            ->setParameter(':key', $key)
            ->execute()->fetchColumn();

        return $value;
    }

    /**
     * Checks if session has a key set
     *
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        $query = $this->db->createQueryBuilder();

        $value = $query
            ->select('count(*)')
            ->from('sessions')
            ->where($query->expr()->eq('name', ':key'))
            ->setParameter(':key', $key)
            ->execute()->fetchColumn();

        return (bool)$value;
    }
}
