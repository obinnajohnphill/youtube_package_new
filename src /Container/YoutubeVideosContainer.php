<?php
/**
 * Created by PhpStorm.
 * User: obinnajohnphill
 * Date: 28/11/18
 * Time: 11:37
 */

namespace Obinna\Container;

use Obinna\Repositories\YoutubeVideosRepository;
use Obinna\YoutubeVideosModel;
use Obinna\Services\YoutubeVideosService;
use Obinna\Router\Router;
use Obinna\Router\Request;


class YoutubeVideosContainer
{
    private $container;

    public function getYoutubeVideosRepository()
    {
        $this->container = new YoutubeVideosModel();
        return new YoutubeVideosRepository($this->container);
    }

    public function getYoutubeRouter()
    {
        $this->container = new Request();
        return new Router($this->container);
    }

    public function getYoutubeVideosService ($video_id,$title)
    {
        return new YoutubeVideosService ($video_id,$title);
    }


}