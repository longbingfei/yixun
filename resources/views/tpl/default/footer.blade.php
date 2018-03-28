<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 g-address col-left">
                    <div>
                        <a target="_blank" href="/news/1">关于我们</a>
                        <span></span>
                        <a target="_blank" href="/news/2">服务条款</a>
                        <span></span>
                        <a target="_blank" href="/news/3">帮助中心</a>
                        <span></span>
                        <a target="_blank" href="/news/4">空间规则</a>
                        <span></span>
                    </div>
                    <div class="space-6"></div>
                    <p class="cor-gray87">地址：{{session('net')['address']}}</p>
                    <p class="cor-gray87 kppw-tit">
                        Powered by <a href="http://kotana.cn" target="_blank">Sign</a>
                        copyright 2012-2022 kotana.cn 版权所有
                    </p>
                </div>
                <div class="col-lg-3 g-contact visible-lg-block hidden-sm hidden-md hidden-xs">
                    <div class="cor-gray71 text-size14 g-contacthd"><span>联系方式</span></div>
                    <div class="space-6"></div>
                    <p class="cor-gray97">QQ：{{session('net')['tel']}}</p>
                    <p class="cor-gray97">Email：{{session('net')['email']}}</p>
                </div>
                <div class="col-lg-3 focusus visible-lg-block hidden-sm hidden-md hidden-xs col-left">
                    <div class="cor-gray71 text-size14 focusushd"><span>微信号</span></div>
                    <div class="space-8"></div>
                    <div class="clearfix">
                        <div class="foc foc-bg">
                            <a class="focususwx foc-wx" href="{{session('net')['wechat_image']}}"></a>
                            <div class="foc-ewm">
                                <div class="foc-ewm-arrow1"></div>
                                <div class="foc-ewm-arrow2"></div>
                                <img src="{{session('net')['wechat_image']}}" alt="" width="100" height="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/asset/web/js/nav.js"></script>
<script src="/asset/web/js/common.js"></script>
<script src="/asset/web/plugins/jquery/superSlide/jquery.SuperSlide.2.1.1.js"></script>
<script src="/asset/web/plugins/jquery/adaptive-backgrounds/jquery.adaptive-backgrounds.js"></script>
<script src="/asset/web/plugins/ace/js/jquery.gritter.min.js"></script>
<script src="/asset/web/js/doc/homepage.js"></script>
<link href="/asset/web/css/share.min.css" type="text/css" rel="stylesheet">
<script src="/asset/web/js/use/jquery.share.min.js"></script>
<script src="/asset/web/js/use/index.js"></script>
{{--<script src="/asset/web/js/doc/layer.js"></script>--}}
</body>
</html>
