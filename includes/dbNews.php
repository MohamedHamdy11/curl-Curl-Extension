<?php

class dbNews implements newsInterface
{
    public function getNews()
    {
        //db
        $news = [
            [
                "userId"=> 1,
                "id"=> 1,
                "title"=> "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
                "body"=> "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"

            ],
            [
                "userId"=> 2,
                "id"=> 2,
                "title"=> "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
                "body"=> "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"

            ],
            [
                "userId"=> 3,
                "id"=> 3,
                "title"=> "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
                "body"=> "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"

            ],
            [
                "userId"=> 4,
                "id"=> 4,
                "title"=> "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
                "body"=> "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"

            ],
            [
                "userId"=> 5,
                "id"=> 5,
                "title"=> "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
                "body"=> "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"

            ],
            [
                "userId"=> 6,
                "id"=> 6,
                "title"=> "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
                "body"=> "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"

            ]
        ];

        return $news;
    }

    public function getPost($pid)
    {
       $postData = [];
       $postData['post'] = [
           "userId"=> 6,
           "id"=> 6,
           "title"=> "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
           "body"=> "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"
       ];

       $postData['comments'] =[
       [
           "postId"=> 1,
           "id"=> 1,
           "name"=> "id labore ex et quam laborum",
           "email"=> "Eliseo@gardner.biz",
           "body"=> "laudantium enim quasi est quidem magnam voluptate ipsam eos\ntempora quo necessitatibus\ndolor quam autem quasi\nreiciendis et nam sapiente accusantium"
       ],

       [
           "postId"=> 1,
           "id"=> 1,
           "name"=> "id labore ex et quam laborum",
           "email"=> "Eliseo@gardner.biz",
           "body"=> "laudantium enim quasi est quidem magnam voluptate ipsam eos\ntempora quo necessitatibus\ndolor quam autem quasi\nreiciendis et nam sapiente accusantium"
       ],

       [
           "postId"=> 1,
           "id"=> 1,
           "name"=> "id labore ex et quam laborum",
           "email"=> "Eliseo@gardner.biz",
           "body"=> "laudantium enim quasi est quidem magnam voluptate ipsam eos\ntempora quo necessitatibus\ndolor quam autem quasi\nreiciendis et nam sapiente accusantium"
       ]
       ];

       return $postData;
    }

}