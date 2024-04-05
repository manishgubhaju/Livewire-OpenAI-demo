<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OpenAI\Laravel\Facades\OpenAI;



class Post extends Model
{
    use HasFactory;
    /**
     * @return string
     * @param string
     */
    public static function create($content){

        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $content],
            ],
        ]);
        
        return $result->choices[0]->message->content; // Hello! How can I assist you today?
    }
}
