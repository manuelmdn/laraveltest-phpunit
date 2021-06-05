<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{

    public function test_set_name_in_lowercase()
    {
        $post = new Post();
        $post->name = "PHPUnit project";

        $this->assertEquals("phpunit project",$post->name);
    }

    public function test_get_slug_from_name()
    {
        $post = new Post();
        $post->name = "PHPUnit project";

        $this->assertEquals("phpunit-project",$post->slug);
    }
}
