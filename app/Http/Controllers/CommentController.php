<?php

namespace App\Http\Controllers;

use App\Comment;
use App\UserProfile;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * @param Request $request
     * @param UserProfile $userProfile
     * @return mixed
     */
    public function addUserProfileComment(Request $request, UserProfile $userProfile)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $comment = new Comment();
        $comment->body = $request->body;
        $comment->user_id = auth()->user()->id;

        $userProfile->comments()->save($comment);

        return back()->withMessage('Comment created!');
    }


    /**
     * @param Request $request
     * @param Comment $comment
     */
    public function update(Request $request, Comment $comment)
    {

    }

    /**
     * @param Request $request
     */
    public function destroy(Request $request)
    {

    }



}
