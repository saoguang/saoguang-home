<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BasicController extends Controller
{
    /**
     * 上传图片，到服务器。存储Markdown编辑器上传的图片
     * @param Request $request
     * @return string
     */
    public function uploadImg(Request $request){
        $path = $request->file('editormd-image-file')->store('public/img');
        $res = new \stdClass();
        $res->success = 1;
        $res->message = '图片上传成功';
        $res->url = url(Storage::url($path));
        return json_encode($res);
    }

    /**
     * about-me页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aboutme(){
        return view('aboutme');
    }

    /**
     * wall页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function wall(){
        return view('wall');
    }

    /**
     * IT学习资料页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function itResource(){
        return view('errors.default',[
            'errorCode' => '0618',
            'errorMsg' => 'IT学习资料页面正在建设中!',
        ]);
    }

    /**
     * 文章分类管理页面
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function folderIndex($id){
        return view('errors.default',[
            'errorCode' => '0618',
            'errorMsg' => '文章分类管理页面正在建设中!',
        ]);
    }
}
