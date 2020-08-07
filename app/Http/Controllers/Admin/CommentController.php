<?php

namespace App\Http\Controllers\Admin;

use App\Model\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use DataTables;
use DB;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:comment-list', ['only' => ['index']]);
    }

    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.comment',compact('comments'));
    }

    public function create(){}

    public function store(Request $request){}

    public function edit($id){}

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->status = 1;
        $comment->save();
        return redirect()->route('comment.index')->with('success','Comment updated successfully');
    }

    public function show($id){}

    public function destroy($id){}
}
