<?php


namespace App\Http\Repository;
use App\Http\Utils\Anydata;

class PostRepository
{
     public static function  PostsMainContent($posts){
        $temp = [];
        foreach ($posts as $post){
            $array  = array(
                'id' => $post->id,
                'categoria' => Anydata::getCategoria($post->categoria_id),
                'imagen' => $post->contenidoimagen,
            );
            array_push($temp,$array);
        }
        return $temp;
     }
}
