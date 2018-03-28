@include('tpl.default.header')
<section>
    <div class="container">
        <div class="row">
            <div class="g-taskposition col-xs-12 col-left">
                您的位置：<a href="/">首页</a> > 厂家入驻
            </div>
            <form class="companyform" id="companyForm" action="/establish" method="post">
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
                                        <i class="glyphicon glyphicon-plus"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>公司名称</td>
                                <td><input type="text" class="form-control" name="company_name"></td>
                                <td>姓名</td>
                                <td><input type="text" class="form-control" name="name"></td>
                            </tr>
                            <tr>
                                <td>联系电话</td>
                                <td><input type="text" class="form-control" name="tel"></td>
                                <td>邮箱</td>
                                <td><input type="text" class="form-control" name="email"></td>
                            </tr>
                            <tr>
                                <td>微信</td>
                                <td><input type="text" class="form-control" name="wechat"></td>
                                <td>QQ</td>
                                <td><input type="text" class="form-control" name="qq"></td>
                            </tr>
                            <tr class="cp_tr_s">
                                <td>企业地址</td>
                                <td>
                                    <select class="form-control cityselector" name="area_ids[]" data-id="1">
                                        <option value="0">--请选择--</option>
                                        @foreach($provs as $vo)
                                            <option value="{{$vo['id']}}">{{$vo['name']}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control cityselector" name="area_ids[]" data-id="2">
                                        <option value="0">--请选择--</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control cityselector" name="area_ids[]" data-id="3">
                                        <option value="0">--请选择--</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>详细地址</td>
                                <td colspan="5" style="width:607px;">
                                    <input type="text" class="form-control" name="address">
                                </td>
                            </tr>
                            <tr class="cp_tr_s1">
                                <td>企业类别</td>
                                <td>
                                    <select class="form-control" name="sort_ids[]">
                                        <option value="0">--请选择--</option>
                                        @foreach($c_sort as $k=>$v)
                                            <option value="{{$k}}">{{$v}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="sort_ids[]">
                                        <option value="0">--请选择--</option>
                                        @foreach($c_sort as $k=>$v)
                                            <option value="{{$k}}">{{$v}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="sort_ids[]">
                                        <option value="0">--请选择--</option>
                                        @foreach($c_sort as $k=>$v)
                                            <option value="{{$k}}">{{$v}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-control" name="sort_ids[]">
                                        <option value="0">--请选择--</option>
                                        @foreach($c_sort as $k=>$v)
                                            <option value="{{$k}}">{{$v}}</option>
                                        @endforeach
                                    </select>
                                </td>

                            </tr>
                            <tr class="cp_tr_s1">
                                <td>经营范围</td>
                                <td>
                                    <input type="text" class="form-control" name="operate_ids[]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="operate_ids[]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="operate_ids[]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="operate_ids[]">
                                </td>
                            </tr>
                        </table>
                        <div class="z7">
                            <dl>
                                <dt>企业简介:</dt>
                                <dd style="margin-left: 0px">
                                    <script type="text/plain" id="describe"></script>
                                </dd>
                            </dl>
                        </div>
                        <div style="text-align: center">
                            <button type="button" class="btn company_submit_btn"
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
        um = UM.getEditor('describe'),
        content = '{!!  isset($single_data) ? $single_data['content'] : '' !!}';
        um.setContent(content);
</script>
@include('tpl.default.footer')
