<?php

namespace App;

trait Followable
{
    public function follows()
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'following_user_id'
        );
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        // if ($this->following($user)) {
        //     return $this->unfollow($user);
        // }

        // return $this->follow($user);

        $this->follows()->toggle($user);
    }

    public function following(User $user)
    {
        return $this->follows()
            ->where(['following_user_id' => $user->id])
            ->exists();
    }
}
