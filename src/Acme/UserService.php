<?php

namespace Acme;

/**
 * @author Kabir Baidhya
 */
class UserService
{

    /**
     * @var SessionInterface
     */
    protected $session;

    /**
     * @var UserRepositoryInterface
     */
    protected $repository;

    /**
     * @param SessionInterface $session
     * @param UserRepositoryInterface $repository
     */
    public function __construct(SessionInterface $session, UserRepositoryInterface $repository)
    {
        $this->session = $session;
        $this->repository = $repository;
    }

    public function getCurrentUser()
    {
        $userId = $this->session->get('user_id');
        $user = $this->repository->getUserById($userId);

        return $user;
    }
}
