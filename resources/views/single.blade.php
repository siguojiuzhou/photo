

<!DOCTYPE html>
<html>
<head>
    <title>{{$info->title}} - 美女写真网</title>
    <meta charset="gb2312" />
    <meta name="applicable-device" content="pc" />
    <meta name="viewport" content="width=device-width, initial-scale=0.2" />
    <meta name="referrer" content="origin" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{ url()->current() }}" />
    <meta name="keywords" content="{{$info->title}}" />
    <meta name="description" content="【{{$info->title}}】是美女写真网（www.ku140.com）专门为您收集的YOUMI尤蜜荟，我们还为您准备了海量YOUMI尤蜜荟，如果您喜欢我们的图片，请收藏并持续关注我们。" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link href="/css/ku.css" rel="stylesheet" media="screen" type="text/css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="canonical" href="{{ url()->current() }}" />
    <script src="/js/jquery.js" type="text/javascript"></script>
    <script src="/js/common.js" type="text/javascript"></script>
    <script type="text/javascript">
        var ubr = navigator.userAgent.toLowerCase();
        if(ubr.indexOf('mobile') > -1){top.location.href = '{{ url()->current() }}';}
    </script>
</head>
<body>
<div class="header h-pub">
    @include('header')
</div>

<div class="position">
    <div class="w1200">
        <span><i></i>当前位置 ：</span> <a href="{{ url('/') }}" title="图片吧">主页</a> > <a href="{{ url('/tag') }}">标签分类</a> > <a href="{{ url()->current() }}" title="{{$info->column}}">{{$info->column}}</a> > {{$info->title}}
    </div>
</div>

<div class="pic"></div>
<div class="w1200"></div>



{{--<div class="link2"><script type="text/javascript">neirong_1()</script></div>--}}
{{--<div class="Title111"><h1>所属栏目：<a href="https://www.ku137.net/b/94/" title="YOUMI尤蜜荟打包下载">YOUMI尤蜜荟</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;下载地址：<a href='https://xz.ku137.net/piccc/2020/zip/201022/545016033642338367.zip' target='_blank'>点击打包下载本套图</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在线视频：<script type="text/javascript">wuduo3()</script></h1></div><br />--}}

{{--<div class="link2"><script type="text/javascript">neirong_2()</script></div>--}}
<div class="content">
    @foreach($list as $item)

        <img src="{{ $item }}" alt="{{$info->title}}" class="tupian_img">
    @endforeach


</div>

{{--<div class="page"><a>共9页: </a><a class="no-page page-prev">上一页</a><a class="this-page">1</a><a href='39676_2.html'>2</a><a href='39676_3.html'>3</a><a href='39676_4.html'>4</a><a href='39676_5.html'>5</a><a href='39676_6.html'>6</a><a href='39676_7.html'>7</a><a href='39676_8.html'>8</a><a href='39676_9.html'>9</a><a href='39676_2.html'>下一页</a></div>--}}
<div class="page" style="text-align: center">
    {{ $list->render() }}
</div>

{{--<div class="center"><script>neirong_3()</script></div>--}}
{{--<div class="center"><script>neirong_4()</script></div>--}}
<div class="clear"></div>
</div>
</div>

{{--<div class="channel c-pub">--}}
    {{--<div class="w1200">--}}
        {{--<h2>{{$info->coulumn}}相关推荐</h2>--}}
        {{--<div class="m-list">--}}
            {{--<ul class="cl">--}}

                {{--@foreach($list as $item)--}}
                {{--<li><a href="{{ url('/single/'.$info->id) }}" title="{{$info->title}}" target="_blank">--}}
                        {{--<img style="width:224px;height:322px;" src="{{$info->front_cover}}" alt="{{$info->title}}">--}}
                        {{--<div class="list-tit"><p>{{$info->title}}</p></div>--}}
                    {{--</a></li>--}}
                {{--@endforeach--}}

            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

@include('footer')

</body>
</html>