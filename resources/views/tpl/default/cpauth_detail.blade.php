@include('tpl.default.header')
<section>
    <div class="container">
        <div class="row">
            <div class="g-taskposition col-xs-12 col-left">
                您的位置：<a href="/">首页</a> > 厂家认证详情
            </div>
            <form id="cpauthForm" action="" method="post">
                <div class="col-xs-12">
                    <div class="row ee">
                        <table class="cp_c_table cp_p_table" style="margin-top:20px;">
                            <tr style="font-size: 16px;font-weight:bold">
                                <td style="text-align:left;padding-left:2px;">认证厂家</td>
                                <td  style="text-align:left;color:orange">
				  {{$detail->company_name}}
                                </td>
                            </tr>
                            <tr  style="font-size: 16px;font-weight:bold">
                                <td  style="text-align:left;padding-left:2px;">法人姓名</td>
                                <td style="width:200px;color:orange;text-align:left">{{$detail->name}}</td>
                                <td></td>
                                <td></td>
                                <td  style="text-align:left">法人身份证号</td>
                                <td style="width:200px;color:orange;text-align:left">{{$detail->id_card}}</td>
                            </tr>
                        </table>
                        <div class="z7">
                            <dl>
                                <dt>身份证照片:</dt>
                                <dd class="p_img_dd_1" data-name="id_card_img"
                                    style="height:150px;border:1px solid #eaeaea;margin-left: 0px">
                                    <div class="dd_wrap_div"><img src="{{$detail->id_card_img}}"></div>					
				</dd>
                            	<dt>法人半身照:</dt>
                                <dd class="p_img_dd_2" data-name="half_img"
                                      style="height:150px;border:1px solid #eaeaea;margin-left: 0px">
				 <div class="dd_wrap_div"><img src="{{$detail->half_img}}"></div>
				</dd>
				<dt>身份证背面:</dt>
                                <dd class="p_img_dd_3" data-name="id_card_back_img"
                                      style="height:150px;border:1px solid #eaeaea;margin-left: 0px">
				<div class="dd_wrap_div"><img src="{{$detail->id_card_back_img}}"></div>
				</dd>
      			        <dt>营业执照:</dt>
                                <dd class="p_img_dd_4" data-name="store_promote_img"
                                      style="height:150px;border:1px solid #eaeaea;margin-left: 0px">
				 <div class="dd_wrap_div"><img src="{{$detail->store_promote_img}}"></div>
				</dd>
				</dl>
                        </div>
                        <div style="text-align: center">
                            <button type="button" class="btn cpauth_submit_btn"
                                    style="width:100px;background-color: #438eb9;margin:-10px auto 10px auto">提 交
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
	$('.z7 img').click(function(){
	    window.open($(this).attr('src'));
	});
</script>
@include('tpl.default.footer')
