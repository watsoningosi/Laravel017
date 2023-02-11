<?php

namespace App\Policies;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        if($user->id === 1){
            return true;
        }
    }

    public function create(User $user, Conversation $conversation)
    {
        return $conversation->user->is($user);
    }

}
