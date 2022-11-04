<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class Post
{
//    use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Ahmad Blog",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Reyhan Ronaldo",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio dolore doloremque error est et eveniet impedit ipsum minima nesciunt perferendis, quae, quam quasi quibusdam, quo sed sequi similique tempora veniam voluptatibus. A adipisci alias aliquid debitis dolor dolorem eligendi esse est eveniet fuga laudantium modi mollitia nam nihil numquam, quo reprehenderit, vero vitae? A aliquam asperiores blanditiis consequuntur cumque cupiditate ea eaque exercitationem facere incidunt, inventore itaque libero minima natus necessitatibus neque nisi numquam odit officia quae quaerat qui quos reprehenderit repudiandae rerum sapiente sed ullam. Doloremque harum molestias quas quidem voluptatibus. Accusantium adipisci consectetur eum eveniet sit vel?"
        ],
        [
            "title" => "Ahmad Blog",
            "slug" => "judul-post-kedua",
            "author" => "Ahmad Reyhan Ronaldo",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio dolore doloremque error est et eveniet impedit ipsum minima nesciunt perferendis, quae, quam quasi quibusdam, quo sed sequi similique tempora veniam voluptatibus. A adipisci alias aliquid debitis dolor dolorem eligendi esse est eveniet fuga laudantium modi mollitia nam nihil numquam, quo reprehenderit, vero vitae? A aliquam asperiores blanditiis consequuntur cumque cupiditate ea eaque exercitationem facere incidunt, inventore itaque libero minima natus necessitatibus neque nisi numquam odit officia quae quaerat qui quos reprehenderit repudiandae rerum sapiente sed ullam. Doloremque harum molestias quas quidem voluptatibus. Accusantium adipisci consectetur eum eveniet sit vel?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
