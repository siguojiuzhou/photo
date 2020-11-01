
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
	<title>美女写真网 - 专注分享高清美女图片、明星图片等精美图片大全</title>

	<meta name="applicable-device" content="pc">
	<meta name="viewport" content="width=device-width, initial-scale=0.2">
	<meta name="referrer" content="origin">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="mobile-agent" content="format=html5; url=https://www.ku137.net/">
	<meta name="keywords" content="美女写真网,美女图片,高清图片,图片大全,明星图片">
	<meta name="description" content="美女写真网旨在分享美女图片、明星图片、唯美图片等高清精美图片大全，我们以专注分享高质量图片为宗旨，立志成为国内最强大的高清图片网站，为广大摄影爱好者提供服务。">
	<link rel="shortcut icon" href="https://www.ku137.net/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/ku.css">
	<link rel="canonical" href="https://www.ku137.net/">
	<script type="text/javascript" src="/js/common.js"></script>
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/js.js"></script>
	<script type="text/javascript">
		var ubr = navigator.userAgent.toLowerCase();
		if(ubr.indexOf('mobile') > -1){top.location.href = 'https://m.ku137.net/';}
	</script></head>
<body>

<!--top-->
<div class="top">

	@include('header')

	<div class="tit">
		<div class="w1200">
			<div class="b-title"><h1>美图吧 - 高清美女写真</h1></div>
			<div class="b-word">

				@foreach($column as $key=>$item)

					@if($key>0) · @endif
				<a href="{{ url('/list/'.$item['tag_id']) }}" title="{{$item['title']}}" target="_blank">{{$item['name']}}
					@if($key==0)
						<div class="hot-word"></div>
					@endif
				</a>

				@endforeach

			</div>
		</div>
	</div>
	<div class="banner-top"></div>
	<div class="banner" style="background-image: url('./images/banner-1.jpg'); opacity: 1; background-position: center 0px;"></div>
</div>
<!--end-->

<div class="m m1 r1">
	<div class="w1200">
		<div class="m-title">
		</div>
		<div class="m-list ml1">
			<ul class="cl">

				@foreach($list as $item)

				<li><a href="{{ url('/single/'.$item->id) }}" title="{{$item->title}}" target="_blank">
						<img style="width:224px;height:322px;" src="{{$item->front_cover}}" alt="{{$item->title}}">
						<div class="list-tit"><p>{{$item->title}}</p></div>
					</a></li>

				@endforeach


			</ul>
		</div>
		<div class="m-more m-cor1">
			<a href="{{ url('/list/1') }}" title="美女图片"> 查看更多美女图片</a>
		</div>
	</div>
</div>
<!--end-->
	@include('footer')

<div style="display:none;"><script type="text/javascript">tongji()</script><script type="text/javascript" src="./美女写真网 - 专注分享高清美女图片、明星图片等精美图片大全_files/z_stat.php"></script><script src="./美女写真网 - 专注分享高清美女图片、明星图片等精美图片大全_files/core.php" charset="utf-8" type="text/javascript"></script><a href="https://www.cnzz.com/stat/website.php?web_id=1277647049" target="_blank" title="站长统计">站长统计</a>
</div>

</body></html>