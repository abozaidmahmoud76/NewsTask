<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListNewsRequest;
use App\Http\Resources\NewsResource;
use App\ThirdParty\News\News;
use Illuminate\Http\JsonResponse;

class NewsController extends Controller
{
    private News $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function list(ListNewsRequest $request):JsonResponse
    {
        $news = $this->news->list($request->q);
        return response()->json(['status' => true, 'news' => NewsResource::collection($news['articles'])]);
    }

}
