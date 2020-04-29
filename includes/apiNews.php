<?php

class apiNews implements newsInterface
{
    public function getNews()
    {
        $response = $this->curlRequest('https://jsonplaceholder.typicode.com/posts');
        //json decode :
        $news = json_decode($response,true);

        return $news;

    }

    public function getPost($pid)
    {
        $postData = [];

       //get post :
        $post = $this->curlRequest('https://jsonplaceholder.typicode.com/posts/'.$pid);
        $comments = $this->curlRequest('https://jsonplaceholder.typicode.com/posts/'.$pid.'/comments');
        $postData['post'] = json_decode($post,true);
        $postData['comments'] = json_decode($comments,true);

        return $postData;

    }

    public function curlRequest($url)
    {
        //Init Curl :
        $curl = curl_init();

        //Set Options :
        curl_setopt_array($curl,[
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
        ]);

        //Execute Curl :
        $response = curl_exec($curl);

        //Close Curl :
        curl_close($curl);

        return $response;
    }

}