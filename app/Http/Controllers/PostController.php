<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseApi;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    private $responseApi;
    public function __construct()
    {
        $this->responseApi = new ResponseApi();
    }

    public function listPost(Request $request)
    {
        $param = $request->all();
        try {
            $list_post = Post::all();
            return $this->responseApi->success($list_post);
        } catch (\Throwable $th) {
            Log::error($th);
            return $this->responseApi->internalServerError();
        }
    }
}
