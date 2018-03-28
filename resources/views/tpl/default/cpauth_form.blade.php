@include('tpl.default.header')
<section>
    <div class="container">
        <div class="row">
            <div class="g-taskposition col-xs-12 col-left">
                您的位置：<a href="/">首页</a> > 厂家认证
            </div>
            <form id="cpauthForm" action="" method="post">
                <div class="col-xs-12">
                    <div class="row ee">
                        <table class="cp_c_table cp_p_table" style="margin-top:20px;">
                            <tr style="font-size: 16px;font-weight:bold">
                                <td style="text-align:left;padding-left:2px;">认证厂家</td>
                                <td  style="text-align:left">
				  {{$detail->company_name}}
                                </td>
                            </tr>
                            <tr  style="font-size: 16px;font-weight:bold">
                                <td  style="text-align:left;padding-left:2px;">法人姓名</td>
                                <td style="width:200px"><input type="text" class="form-control" name="name"></td>
                                <td></td>
                                <td></td>
                                <td  style="text-align:left">法人身份证号</td>
                                <td style="width:200px"><input type="text" class="form-control" name="id_card"></td>
                            </tr>
                        </table>
                        <div class="z7">
                            <dl>
                                <dt>身份证照片:
                                    <button type="button"  class="cp_up" id="cp_qiniu_1">上传图片</button>
                                    <span style="color:red;font-size: 13px;">(法人手持身份证正面，身份证文字需清晰)</span></dt>
                                <dd class="p_img_dd_1" data-name="id_card_img"
                                    style="height:150px;border:1px solid #eaeaea;margin-left: 0px;background-repeat:no-repeat;background-size:197px 147px;background-position:right;background-image:url('/asset/web/image/id_card.jpg')"></dd>
                            	<dt>法人半身照:
                                    <button type="button" class="cp_up" id="cp_qiniu_2">上传图片</button>
                                    <span style="color:red;font-size: 13px;">(请确保法人半身照清晰)</span></dt>
                                <dd class="p_img_dd_2" data-name="half_img"
                                      style="height:150px;border:1px solid #eaeaea;margin-left: 0px;background-repeat:no-repeat;background-size:131px 149px;background-position:right;background-image:url('/asset/web/image/half.jpg')"></dd>
				<dt>身份证背面:
                                    <button type="button" class="cp_up" id="cp_qiniu_3">上传图片</button>
                                    <span style="color:red;font-size: 13px;">(请确保法人身份证真实有效)</span></dt>
                                <dd class="p_img_dd_3" data-name="id_card_back_img"
                                      style="height:150px;border:1px solid #eaeaea;margin-left: 0px"></dd>
      			        <dt>营业执照:
                                    <button type="button" class="cp_up" id="cp_qiniu_4">上传图片</button>
                                     <span style="color:red;font-size: 13px;">(请确保营业执照真实有效)</span></dt>
                                <dd class="p_img_dd_4" data-name="store_promote_img"
                                      style="height:150px;border:1px solid #eaeaea;margin-left: 0px"></dd>

				</dl>
                        </div>
                        <input type="hidden" name="cp_id" value="{{$detail->id}}">
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
<iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>
<script>
    var user_id = '{{session("id")}}',
        qiniu_access_token = '{{$qiniu_access_token}}',
        qiniu_img_domain = '{{$qiniu_img_domain}}',
        tmp_img_data = null;
</script>
@include('tpl.default.footer')
