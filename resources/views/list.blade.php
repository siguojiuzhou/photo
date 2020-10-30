

<!DOCTYPE html>
<html>
<head>
    <title>MiiTao蜜桃社,无圣光vip,蜜桃社下载 - 美女写真网</title>
    <meta charset="gb2312" />
    <meta name="applicable-device" content="pc" />
    <meta name="viewport" content="width=device-width, initial-scale=0.2" />
    <meta name="referrer" content="origin" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="mobile-agent" content="format=html5; url=https://m.ku137.net/b/86/" />
    <meta name="keywords" content="MiiTao蜜桃社套图,MiiTao蜜桃社图片,MiiTao蜜桃社下载" />
    <meta name="description" content="MiiTao蜜桃社是美女聚集首选之地,各款海量美女一顾倾城,倚姣作媚。更是汇集了国内各大超级绝世美模,个个有着美丽的容颜和魔鬼般的身材,让你过目不忘。" />
    <link rel="shortcut icon" href="https://www.ku137.net/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="canonical" href="https://m.ku137.net/b/86/" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script type="text/javascript" src="../js/public.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
    <script type="text/javascript">
        var ubr = navigator.userAgent.toLowerCase();
        if(ubr.indexOf('mobile') > -1){top.location.href = 'https://m.ku137.net/b/86/';}
    </script>
</head>
<body>
<div class="header h-pub">
    @extends('header')
</div>

<div class="position">
    <div class="w1200">
        <span><i></i>当前位置 ：</span> <a href="{{ url('/') }}" title="美女套图">主页</a> > <a href="{{ url('/tag') }}">标签分类</a> > <h1>{{ $list[0]->column }}</h1>
    </div>
</div>
<div class="list">
    <div class="w1200">
        <div class="l-title">
            <h1>{{ $list[0]->column }}({{ $list->total() }}套)</h1>

        </div>
        <div class="l-pub">
            <div class="m-list ml1">
                <ul class="cl">

                    @foreach($list as $item)

                        <li><a href="{{ url('/single/'.$item->id) }}" title="{{$item->title}}" target="_blank">
                                <img style="width:224px;height:322px;" src="{{$item->front_cover}}" alt="{{$item->title}}">
                                <div class="list-tit list-tit-short"><p>{{$item->title}}</p></div>
                                <span class="time">{{$item->count}}P</span>
                            </a></li>

                    @endforeach


                </ul>
            </div>
        </div>
        <div style="text-align: center">
            {{ $list->render() }}
        </div>
    </div>
    <div class="clear"></div>
</div>


@extends('footer')
</body>
</html>