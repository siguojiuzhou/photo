

<!DOCTYPE html>
<html>
<head>
    <title>美女标签 - 美女写真网</title>
    <meta charset="gb2312" />
    <meta name="applicable-device" content="pc" />
    <meta name="viewport" content="width=device-width, initial-scale=0.2" />
    <meta name="referrer" content="origin" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="mobile-agent" content="format=html5; url=https://m.ku137.net/b/tag/" />
    <meta name="keywords" content="标签套图,标签图片,标签下载" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="canonical" href="https://m.ku137.net/b/tag/" />
    <script type="text/javascript" src="/js/public.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
</head>
<body>
<div class="header h-pub">
    @include('header')
</div>

<div class="position">
    <div class="w1200">
        <span><i></i>当前位置 ：</span> <a href="{{ url('/') }}" title="美女套图">主页</a> > <h1>标签</h1>
    </div>
</div>
<div class="list">
    <div class="w1200">
        <div class="l-title">
            <h1>标签(38491套)</h1>

        </div>
        <div class="l-pub">


            <div class="jigou">
                <ul>

                    @foreach($list as $item)
                        <li><a href='/list/{{$item->column_id}}/' target='_blank' style='overflow: hidden'>{{$item->column}}</a><br/><span>{{$item->num}} 套</span> </li>
                    @endforeach

                </ul>
            </div>


        </div>
        <div class="page"></div>
    </div>
    <div class="clear"></div>
</div>


@include('footer')
</body>
</html>