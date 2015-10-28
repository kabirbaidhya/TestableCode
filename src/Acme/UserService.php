<?php

namespace Acme;

/**
 * @author Kabir Baidhya
 */
class UserService
{

    public function getCurrentUser()
    {
        $userId = $_SESSION['user_id'];

        $user = App::db()->select('id, username')
            ->where('id', $userId)
            ->limit(1)
            ->get();

        if ($user->num_results() > 0) {
            return $user->row();
        }

        return false;
    }
}
