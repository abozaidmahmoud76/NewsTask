<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListNewsRequest;
use App\Services\GetNews;
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
        GetNews::list();


        $news = $this->news->search($request->q)->get();
        return response()->json(['status' => true, 'news' => $news]);
    }

}
