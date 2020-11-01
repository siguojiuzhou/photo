<div class="header">
    <div class="w1200">
        <div class="logo fl"><a href="/favicon.ico" title="">图片吧</a></div>
        <div class="nav fl">
            <ul class="cl">
                <li><a href="{{ url('/') }}" title="美女写真">首页</a></li>
                <li><a href="{{ url('/latest') }}" title="最新套图">最新</a></li>
                <li><a href="{{ url('/tag') }}" title="标签分类">标签分类</a></li>
            </ul>
        </div>
        <div class="info fr">
            <div class="search fl">
                <div class="search-show">
                    <div class="search-box">
                        <form method="get" action="{{ url('/search') }}" class="new-searching-unit" data-regestered="regestered">
                            <input type="text" size="27" name="q" autocomplete="off" placeholder="" value="">
                            <a href="{{ url('/#') }}" title="" class="go"><input style="width:30px;height:30px;" type="submit" value=""></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="yun fr"><a>搜索</a></div>
        </div>
    </div>
</div>