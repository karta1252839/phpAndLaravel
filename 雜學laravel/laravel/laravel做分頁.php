<?php
// 後端
class ClassName extends AnotherClass implements Interface
{
  public function index()
  {
    $posts=Post::paginate(10);
    return view('posts', compact('posts'));
  }
}

// 前端
{{ posts->links() }}