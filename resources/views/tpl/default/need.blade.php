@include('tpl.default.header')
<section>
    <div class="container">
        <div class="row">
            <div class="g-taskposition col-lg-12 col-left">您的位置：<a href="/">首页</a> > 需求</div>
            <div class="col-lg-12 col-left">
                <div class="g-taskprocess hidden-xs">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <div class="g-taskpro1 pull-left"><span>免费发布需求</span>
                                <p>免费发布</p></div>
                            <div class="g-taskproico1 pull-right">></div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <div class="g-taskpro2 pull-left"><span>厂家投标</span>
                                <p>众多企业，技术前沿</p></div>
                            <div class="g-taskproico2 pull-right">></div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <div class="g-taskpro3"><span>快速交易</span>
                                <p>挑选合适厂家交易</p></div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="g-taskclassify clearfix  table-responsive">
                        <div class="col-xs-12 clearfix task-type">
                            <div class="row">
                                <div class="col-lg-1 cor-gray51 text-size14 col-sm-2 col-xs-12">需求类别</div>
                                <div class="col-lg-11 col-sm-10  col-xs-12">
                                    <a href="javascript:;" class="sb bg-blue" data-s="sort_id" data-v="0">不限</a>
                                    @foreach($sorts as $k => $v)
                                    <a href="javascript:;" class="sb" data-s="sort_id" data-v="{{$k}}">{{$v}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 clearfix task-type">
                            <div class="row">
                                <div class="col-lg-1 cor-gray51 text-size14 col-sm-2 col-xs-12" style="margin-top: 10px;">所在地区</div>
                                <div class="col-lg-11 col-sm-10  col-xs-12">
                                    <table>
                                        <tr class="cp_tr_s">
                                            <td style="width:150px;border:0px;">
                                                <select class="form-control cityselector city_s city_s_1" name="area_ids[]" data-id="1" style="border:0px;">
                                                    <option value="0">不限</option>
                                                    @foreach($provs as $vo)
                                                        <option value="{{$vo['id']}}">{{$vo['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td style="width:150px;border:0px;">
                                                <select class="form-control cityselector city_s city_s_2" name="area_ids[]" data-id="2"  style="border:0px;">
                                                    <option value="0">不限</option>
                                                </select>
                                            </td>
                                            <td style="width:150px;border:0px;">
                                                <select class="form-control cityselector city_s city_s_3" name="area_ids[]" data-id="3"  style="border:0px;">
                                                    <option value="0">不限</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 clearfix task-type">
                            <div class="row">
                                <div class="col-lg-1 cor-gray51 text-size14 col-sm-2 col-xs-12" style="margin-top:7px;">项目周期</div>
                                <div class="col-lg-11 col-sm-10  col-xs-12">
                                    <select class="form-control period_s" name="period"  style="border:0px;width:150px;">
                                    	@foreach($needPeriods as $k=>$v)
                                	<option value="{{$k}}">{{$v}}</option>
                                	@endforeach
				    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 clearfix">
                            <div class="row">
                                <div class="col-lg-1 col-sm-2 col-md-2 cor-gray51 text-size14 col-xs-12">需求状态</div>
                                <div class="col-lg-11 col-sm-10 col-md-10 col-xs-12">
                                    <a class="bg-blue sb" href="javascript:;" data-s="status" data-v="0">不限</a>
                                    <a href="javascript:;" class="sb" data-s="status" data-v="1">报名中</a>
                                    <a href="javascript:;" class="sb" data-s="status" data-v="5">线下对接中</a>
                                    <a href="javascript:;" class="sb" data-s="status" data-v="3">已完成</a>
                                    <a href="javascript:;" class="sb" data-s="status" data-v="-2">流标</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 clearfix keywords1" style="display:none">
                            <div class="row">
                                <div class="col-lg-1 col-sm-2 col-md-2 cor-gray51 text-size14 col-xs-12">关键词</div>
                                <div class="col-lg-11 col-sm-10 col-md-10 col-xs-12">
                                    <a class="bg-blue sb keywords2" href="javascript:;" data-s="keywords" data-v=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-taskmain">
                    <div class="clearfix g-taskmainhd">
                        <div class="pull-left">
                            <a class="sb bg-blue" href="javascript:;" data-s="order" data-v="1">默认</a><span>|</span>
                            <a class="sb" href="javascript:;" data-s="order" data-v="2">发布时间</a><span>|</span>
                            <a class="sb" href="javascript:;" data-s="order" data-v="3">热度</a>
                        </div>
                    </div>
                    @if(!$_data['total'])
                        <div style="height:50px;padding-left: 10px;line-height: 50px;">
                            暂无相关数据
                        </div>
                    @else
                        <ul class="g-taskmainlist">
                            @foreach($_data['data'] as $vo)
                                <li class="clearfix zz1">
                                    <div class="row zz">
                                        <div class="col-lg-9 col-sm-8">
                                            <div class="text-size16">
                                                <a href="need/{{$vo->id}}" target="_blank">
                                                    <b>{{$vo->title}}</b>
                                                </a>
                                            </div>
                                            <div class="z4">
                                                <p>
                                                    <span>{{$vo->budget}}</span>
                                                    <span>预算金额</span>
                                                </p>
                                                <p>
                                                    <span>{{$vo->baomingshu}}</span>
                                                    <span>报名人数</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="cor-gray87 text-size14 pull-up hidden-xs col-lg-3 col-sm-4">
                                            <div class="z5">
                                                <a href="need/{{$vo->id}}" target="_blank">查看详情</a>
                                            </div>
                                        </div>
                                        <div class="z6">
                                            <span title="需求类型"><i class="glyphicon glyphicon-th-large"></i> <span
                                                        class="info">{{$vo->sort_name}}</span></span>
                                            <span title="发布地址"><i class="glyphicon glyphicon-map-marker"></i> <span
                                                        class="info">{{$vo->add}}</span></span>
                                            <span title="发布时间"><i class="glyphicon glyphicon-time"></i> <span
                                                        class="info">{{Date('Y-m-d',strtotime($vo->created_at))}}</span></span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        {!! $data->render() !!}
                    @endif
                </div>
                <div class="space-20"></div>
            </div>
        </div>
    </div>
</section>
<script>
    var CITY = JSON.parse('{!! json_encode($provs) !!}');
</script>
@include('tpl.default.footer')
