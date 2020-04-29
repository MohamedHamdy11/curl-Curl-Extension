<?php

class newsSystem
{
    private $newsSource;
    public function __construct(newsInterface $newsSource)
    {
        $this->newsSource = $newsSource;
    }

    public function getNews()
    {
        return $this->newsSource->getNews();
    }

    public function getPost($pid)
    {
        return $this->newsSource->getPost($pid);
    }


}