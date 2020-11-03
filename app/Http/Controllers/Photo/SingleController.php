<?php

namespace App\Http\Controllers\Photo;


use App\Http\Controllers\Controller;
use App\Models\Cover;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class SingleController extends Controller
{

    public function index()
    {
        $list = Cover::query()->select(['*'])->orderByDesc('id')->paginate(40);

        $column = [
            ['tag_id'=>9, 'title'=>'XIUREN秀人网', 'name'=>'秀人网'],
            ['tag_id'=>86, 'title'=>'MiiTao蜜桃社', 'name'=>'蜜桃社'],
            ['tag_id'=>94, 'title'=>'YOUMI尤蜜荟', 'name'=>'尤蜜荟'],
            ['tag_id'=>10, 'title'=>'Ugirls尤果网', 'name'=>'尤果网'],
            ['tag_id'=>96, 'title'=>'FEILIN嗲囡囡', 'name'=>'嗲囡囡'],
            ['tag_id'=>64, 'title'=>'MYGIRL美媛馆', 'name'=>'美媛馆'],
            ['tag_id'=>4, 'title'=>'ROSI写真', 'name'=>'ROSI写真'],
            ['tag_id'=>85, 'title'=>'Qingdouke青豆客', 'name'=>'青豆客'],
            ['tag_id'=>95, 'title'=>'MFStar模范学院', 'name'=>'模范学院'],
            ['tag_id'=>78, 'title'=>'LEGBABY美腿宝贝', 'name'=>'美腿宝贝'],
        ];

        return view('index')->with([
            'list'=>$list,
            'column' => $column
        ]);
    }

    public function single($id, Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 10;

        $result = Cover::query()->where('id', $id)->select(['*'])->first();

        //图片路径
        preg_match('/piccc(.*?)(.zip)$/', $result->download_url, $url);
        $url = str_replace('.zip', '', $url[0]);
        $imgPath = str_replace('zip', 'img', $url);

        $files = scandir('./images/single/'.$imgPath);

        $filesInside = [];
        foreach ($files as $item) {
            if ( preg_match('/\\S+\.(jpg|gif|bmp|bnp|png)/', $item) ) {
                array_push($filesInside, '/images/single/'.$imgPath.'/'.$item);
            }
        }
        $offset = ($page * $perPage) - $perPage;

        $data = new LengthAwarePaginator(
            array_slice($filesInside, $offset, $perPage, true),
            count($filesInside),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
            );

//        $zip = new \ZipArchive();
//        $zip->open('./files/123.zip');
//        $filesInside = [];
//
//        for ($i = 0; $i < $zip->numFiles; $i++) {
//            if ( preg_match('/\\S+\.(jpg|gif|bmp|bnp|png)/', $zip->getNameIndex($i)) ) {
//                array_push($filesInside, $zip->getNameIndex($i));
//            }
//        }
//        $zip->close();
//        var_dump($filesInside,$result);exit;

        return view('single')->with([
            'list' => $data,
            'info' => $result
        ]);
    }

    public function list($columnId)
    {
        $list = Cover::query()->where('column_id', $columnId)->select(['*'])->orderByDesc('id')->paginate(25);

        return view('list')->with([
            'list' => $list
        ]);
    }

    public function tag()
    {
        $list = Cover::query()->selectRaw('`column_id`,`column`,count(*) as num')->groupBy('column_id','column')->get();
//        var_dump($list);

        return view('tag')->with([
            'list' => $list
        ]);
    }

    public function latest()
    {
        $list = Cover::query()->select(['*'])->orderByDesc('id')->paginate(25);

        return view('latest')->with([
            'list' => $list
        ]);
    }
}
