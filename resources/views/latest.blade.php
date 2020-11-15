

<!DOCTYPE html>
<html>
<head>
    <title>美女图片,性感美女,美女,美女套图,套图超市,唯美图片,风景图片,动漫图片 - 美女写真网</title>
    <meta charset="gb2312" />
    <meta name="applicable-device" content="pc" />
    <meta name="viewport" content="width=device-width, initial-scale=0.2" />
    <meta name="referrer" content="origin" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{ url()->current() }}" />
    <meta name="keywords" content="机构套图,机构图片,机构下载" />
    <meta name="description" content="美女套图网为您提供国内外最高人气的美女图片、性感美女，聚集养眼惊艳的国内、日韩、港台等精品美女套图，收集风景图片、唯美图片、动漫图片等图片大全,让您时时刻刻爱上美女套图网。" />
    <link rel="shortcut icon" href="https://www.ku137.net/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="canonical" href="{{ url('/') }}" />
    <script type="text/javascript" src="/js/public.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
    <script type="text/javascript">
        // var ubr = navigator.userAgent.toLowerCase();
        // if(ubr.indexOf('mobile') > -1){top.location.href = 'https://m.ku137.net/b/1/';}
    </script>
</head>
<body>
<div class="header h-pub">
    @include('header')
</div>

<div class="position">
    <div class="w1200">
        <span><i></i>当前位置 ：</span> <a href="{{ url('/') }}" title="美女套图">主页</a> > <a href="{{ url('/tag') }}">标签分类</a> > <h1>机构</h1>
    </div>
</div>
<div class="list">
    <div class="w1200">
        <div class="l-title">
            <h1>机构(39676套)</h1>

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


@include('footer')
</body>
</html>