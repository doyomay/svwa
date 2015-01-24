<?php

namespace dvwa\BlogPosts;

use dvwa\users\User;
class postsRepository {

    public function save(BlogPost $BlogPost,$userId)
    {
        return User::findorFail($userId)->blogPosts()->save($BlogPost);
    }

    public function getAllUsersPosts()
    {
        return BlogPost::all();
    }
}