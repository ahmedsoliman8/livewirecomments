<?php

namespace App\Models\Presenters;

use App\Models\Comment;
use Illuminate\Support\HtmlString;


class  CommentPresenter
{

    public $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function markdownBody()
    {
        return new HtmlString(app('markdown')->convertToHtml($this->comment->body));
    }



    public  function relativeCreatedAt(){
        return $this->comment->created_at->diffForHumans();
    }
}
