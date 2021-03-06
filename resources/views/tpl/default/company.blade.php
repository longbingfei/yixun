@include('tpl.default.header')

<section>
    <div class="container">
        <div class="row">
            <div class="g-taskposition col-lg-12 col-left">您的位置：<a href="/">首页</a> > 厂家</div>
            <div class="col-lg-9 col-left">
                <div class="g-taskprocess hidden-xs">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <div class="g-taskpro1 pull-left"><span>免费入驻品牌</span>
                                <p>免费发布产品</p></div>
                            <div class="g-taskproico1 pull-right">></div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <div class="g-taskpro2 pull-left"><span>客户选择</span>
                                <p>众多厂家，优质客户</p></div>
                            <div class="g-taskproico2 pull-right">></div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <div class="g-taskpro3"><span>快速交易</span>
                                <p>快速寻找厂家进行交易</p></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="g-taskclassify clearfix  table-responsive">
                        <div class="col-xs-12 clearfix task-type">
                            <div class="row">
                                <div class="col-lg-1 cor-gray51 text-size14 col-sm-2 col-xs-12">厂家分类</div>
                                <div class="col-lg-11 col-sm-10  col-xs-12">
                                    <a href="javascript:;" class="sb bg-blue" data-s="sort_id" data-v="0">不限</a>
                                @foreach($sort as $key => $vo)
                                        <a href="javascript:;" class="sb" data-s="sort_id" data-v="{{$key}}">{{$vo}}</a>
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
                            <a class="sb" href="javascript:;" data-s="order" data-v="2">浏览量</a><span>|</span>
                            <a class="sb" href="javascript:;" data-s="order" data-v="3">入驻时间</a>
                        </div>
                    </div>
                    @if(!collect($data)->toArray()['total'])
                        <div style="height:50px;padding-left: 10px;line-height: 50px;">
                            暂无相关数据
                        </div>
                    @else
                        <ul class="g-taskmainlist js1">
                            @foreach($data as $vo)
                                <li class="clearfix z9" @if($vo->is_auth==1)style="background-size:80px 20px;background-image:url('/asset/web/image/safe.png');background-repeat:no-repeat; background-position:54% 82%"@endif>
                                    <p>
                                        <img src="{{$vo->logo ? $vo->logo : '/asset/web/image/kabuki.jpg'}}">
                                    </p>
                                    <p class="ecli"><a href="/company/{{$vo->id}}" target="_blank">{{$vo->company_name}}</a></p>
                                    <p>{{$vo->operate_ids}}</p>
                                    <p style="text-align: center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i
                                                class="fa fa-star"></i></p>
                                </li>
                            @endforeach
                        </ul>
                        {!! $data->render() !!}
                    @endif
                </div>
                <div class="space-20"></div>
            </div>
            <div class="col-lg-3 col-right" style="border:1px solid #eaeaea;height:100%">
                <h4>推荐厂家</h4>
                @if(!empty($promote_company))
                <ul class="promote_ul">
                    @foreach($promote_company as $vo)
                        <li class="promote_ul_li"><a href="/company/{{$vo['id']}}" target="_blank">{{$vo['company_name']}}</a></li>
                        <li style="width: 250px;height:250px;display:none"><a href="/company/{{$vo['id']}}" target="_blank"><img style="width: 250px;height:250px" src="{{$vo['logo']?:'/asset/web/image/kabuki.jpg'}}"></a></li>
                    @endforeach
                </ul>
                    @else
                    暂无
                @endif
            </div>
        </div>
    </div>
</section>
@include('tpl.default.footer')
