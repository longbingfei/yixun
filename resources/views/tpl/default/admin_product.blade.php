<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="/asset/web/plugins/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="/asset/web/css/index11.css">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<table class="table">
    <tr>
        <th>序号</th>
        <th>产品名称</th>
        <th>状态</th>
        <th>厂家</th>
        <th>创建者</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>
    @foreach($data as $key=>$vo)
        <tr>
            <td>{{$key+1}}</td>
            <td><a href="/prd/{{$vo->id}}" target="_blank">{{$vo->name}}</td>
            <td>{{$statusShow[$vo->status]}}</td>
            <td><a href="/company/{{$vo->company_id}}" target="_blank">{{$vo->company_name}}</td>
            <td>{{$users[$vo->user_id]}}</td>
            <td>{{$vo->created_at}}</td>
            <td>
                @if(!$vo->status)
                    <button class="btn btn-xs btn-danger admin_need_approve admin_change_prd_status"
                            data-status="0"
                            data-id="{{$vo->id}}">审核
                    </button>
                @endif
		@if($vo->status != 3)
                    <button class="btn btn-xs btn-danger admin_need_back admin_change_prd_status"
                            data-status="1"
                            data-id="{{$vo->id}}">打回
                    </button>
                @endif
                    <a class="btn btn-xs btn-info admin_need_edit" data-status="{{$vo->status}}"
                       data-id="{{$vo->id}}" href="/update_prd/{{$vo->id}}" target="_blank">修改
                    </a>
                    @if($vo->is_promote)
                        <a class="btn btn-xs btn-warning admin_promote _cancel" data-c="prds" data-id="{{$vo->id}}" data-s="{{$vo->status}}" href="javascript:;">取消推荐
                        </a>
                    @else
                        <a class="btn btn-xs btn-warning admin_promote" data-c="prds" data-id="{{$vo->id}}" data-s="{{$vo->status}}" href="javascript:;">推荐
                        </a>
                    @endif
                <button class="btn btn-xs btn-success admin_prd_delete" data-status="{{$vo->status}}"
                        data-id="{{$vo->id}}">删除
                </button>

            </td>
        </tr>
    @endforeach
    {!! $data->render() !!}
</table>
</body>
<script src="/asset/web/js/use/index.js"></script>
</html>
