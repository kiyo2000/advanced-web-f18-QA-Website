<?php
/**
 * Created by PhpStorm.
 * User: 6472
 * Date: 11/12/2018
 * Time: 10:18 AM
 */

namespace App;

use App\Entity\Post;
use App\Helper\Database;
use App\Helper\Template;

include "vendor/autoload.php";

//get doctrine entity manager
$entityManager = (new Database())->getEntityManager();

//get all posts
$posts = $entityManager->getRepository(Post::class)->findBy([], ['publishedAt' => 'DESC']);

return new Template('home', ['posts' => $posts]);
