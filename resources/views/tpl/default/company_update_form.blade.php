@include('tpl.default.header')
<section>
    <div class="container">
        <div class="row">
            <div class="g-taskposition col-xs-12 col-left">
                您的位置：<a href="/">首页</a> > 厂家入驻信息修改
            </div>
            <form class="companyUpdateform" id="companyUpdateform"  method="post">
                <div class="col-xs-12">
                    <div class="row ee">
                        <div style="margin-bottom: 20px;">
                            <div class="g-taskclassify clearfix  table-responsive" style="padding-top: 0px;">
                                <div class="col-xs-12 clearfix task-type cp_h_img">
                                    <span class="glyphicon glyphicon-plus"> 添加企业背景图片</span>
                                </div>
                            </div>
                        </div>
                        <table class="cp_c_table">
                            <tr>
                                <td>logo</td>
                                <td colspan="5" style="width:607px;height:60px;">
                                    <div id="cp_logo_add">
					@if($company->logo)
					<div class="dd_wrap_div" style="width:50px;height:50px;"><span class="glyphicon glyphicon-remove-circle dd_img_delete"></span><img src="{{$company->logo}}" style="width:50px;height:50px;"><input type="hidden" name="logo" value="{{$company->logo}}"></div>
					@else
                                        <i class="glyphicon glyphicon-plus"></i>
					@endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>公司名称</td>
                                <td><input type="text" class="form-control" name="company_name" value="{{$company->company_name}}"></td>
                                <td>姓名</td>
                                <td><input type="text" class="form-control" name="name" value="{{$company->name}}"></td>
                            </tr>
                            <tr>
                                <td>手机号</td>
                                <td><input type="text" class="form-control" name="tel" value="{{$company->tel}}"></td>
                                <td>邮箱</td>
                                <td><input type="text" class="form-control" name="email" value="{{$company->email}}"></td>
                            </tr>
                            <tr>
                                <td>微信</td>
                                <td><input type="text" class="form-control" name="wechat" value="{{$company->wechat}}"></td>
                                <td>QQ</td>
                                <td><input type="text" class="form-control" name="qq" value="{{$company->qq}}"></td>
                            </tr>
                            <tr class="cp_tr_s">
                                <td>企业地址</td>
                                <td>
                                    <select class="form-control cityselector" name="area_ids[]" data-id="1" style="border:0px;width:150px;">
                                        <option value="">请选择</option>
                                        @foreach($provs_1 as $vo)
                                            <option value="{{$vo['id']}}" {{isset($company->up_sort_id[0]) && ($company->up_sort_id[0] == $vo['id']) ? 'selected' :''}}>{{$vo['name']}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control cityselector" name="area_ids[]" data-id="2" style="border:0px;width:150px;">
                                        <option value="">请选择</option>
                                        @if(!empty($provs_2))
                                            @foreach($provs_2 as $vo)
                                                <option value="{{$vo['id']}}" {{isset($company->up_sort_id[1]) && ($company->up_sort_id[1] == $vo['id']) ? 'selected' :''}}>{{$vo['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control cityselector" name="area_ids[]" data-id="3" style="border:0px;width:150px;">
                                        <option value="">请选择</option>
                                        @if(!empty($provs_3))
                                            @foreach($provs_3 as $vo)
                                                <option value="{{$vo['id']}}" {{isset($company->up_sort_id[2]) && ($company->up_sort_id[2] == $vo['id']) ? 'selected' :''}}>{{$vo['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>详细地址</td>
                                <td colspan="5" style="width:607px;">
                                    <input type="text" class="form-control" name="address" value="{{$company->address}}">
                                </td>
                            </tr>
                            <tr class="cp_tr_s1">
                                <td>企业类别</td>
                                <td>
                                    <select class="form-control" name="sort_ids[]">
                                        <option value="0">---请选择--</option>
                                        @foreach($c_sort as $key => $vo)
                                            <option value="{{$key}}" {{isset($company->sort_ids[0]) ? ($key == $company->sort_ids[0] ? 'selected' : ''):'' }}>{{$vo}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="sort_ids[]">
                                        <option value="0">---请选择--</option>
                                        @foreach($c_sort as $key => $vo)
                                            <option value="{{$key}}" {{isset($company->sort_ids[1]) ? ($key == $company->sort_ids[1] ? 'selected' : ''):'' }}>{{$vo}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="sort_ids[]">
                                        <option value="0">---请选择--</option>
                                        @foreach($c_sort as $key => $vo)
                                            <option value="{{$key}}" {{isset($company->sort_ids[2]) ? ($key == $company->sort_ids[2] ? 'selected' : ''):'' }}>{{$vo}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="sort_ids[]">
                                        <option value="0">---请选择--</option>
                                        @foreach($c_sort as $key => $vo)
                                            <option value="{{$key}}" {{isset($company->sort_ids[3]) ? ($key == $company->sort_ids[3] ? 'selected' : ''):'' }}>{{$vo}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr class="cp_tr_s1">
                                <td>经营范围</td>
                                <td>
                                    <input type="text" class="form-control" name="operate_ids[]" value="{{isset($company->operate_ids[0])?$company->operate_ids[0]:''}}">
                                </td>
                                    <td>
                                        <input type="text" class="form-control" name="operate_ids[]" value="{{isset($company->operate_ids[1])?$company->operate_ids[1]:''}}">
                                    </td>
                                <td>
                                    <input type="text" class="form-control" name="operate_ids[]" value="{{isset($company->operate_ids[2])?$company->operate_ids[2]:''}}">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="operate_ids[]" value="{{isset($company->operate_ids[3])?$company->operate_ids[3]:''}}">
                                </td>
                            </tr>
                        </table>
                        <div class="z7">
                            <dl>
                                <dt>企业简介:</dt>
                                <dd style="margin-left: 0px">
                                    <script type="text/plain" id="describe">
				         {!!  $company->describe  !!}
				</script>
                                </dd>
                            </dl>
                        </div>
                        <div style="text-align: center">
                            <button type="button" class="btn company_update_btn"
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
<script type="text/javascript" charset="utf-8" src="{{url('editor/umeditor.config.js')}}"></script>
<script type="text/javascript" charset="utf-8" src="{{url('editor/umeditor.min.js')}}"></script>
<script type="text/javascript" src="{{url('editor/lang/zh-cn/zh-cn.js')}}"></script>
<script>
    var user_id = '{{session("id")}}',
        qiniu_access_token = '{{$qiniu_access_token}}',
        qiniu_img_domain = '{{$qiniu_img_domain}}',
        tmp_img_data = null,
        cid = '{{$company->id}}'| 0,
        um = UM.getEditor('describe');
</script>
@include('tpl.default.footer')
