<?php
namespace dvwa\BlogPosts;

use Laracasts\Commander\CommandHandler;
use dvwa\BlogPosts\postsRepository;

class PublishBlogPostCommandHandler implements CommandHandler {

    protected $postsRepository;

    public function __construct(postsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function handle($command)
    {
        $BlogPost = BlogPost::PublishPost($command->body);

        $BlogPost = $this->postsRepository->save($BlogPost,$command->userId);

        return $BlogPost;
    }
}