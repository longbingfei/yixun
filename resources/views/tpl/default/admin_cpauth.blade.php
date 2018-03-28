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
        <th>厂家名称</th>
	<th>认证状态</th>
        <th>联系人</th>
        <th>创建者</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>
    @if(!empty($data))
    @foreach($data as $key=>$vo)
        <tr>
            <td>{{$key+1}}</td>
            <td><a href="/company/{{$vo->cp_id}}" target="_blank">{{$vo->cp_name}}</a></td>
	    <td>{{$authShow[$vo->is_auth]}}</td>
            <td>{{$vo->name}}</td>
            <td>{{$users[$vo->user_id]}}</td>
            <td>{{$vo->created_at}}</td>
            <td>
		<a class="btn btn-xs btn-info" href="/cpauth_detail/{{$vo->id}}" target="_blank">认证信息</a> 
                @if($vo->is_auth == 2 || $vo->is_auth == -1)
                    <button class="btn btn-xs btn-success admin_cpauth"
                            data-status="0"
                            data-id="{{$vo->cp_id}}">认证
                    </button>
                @endif
		@if($vo->is_auth == 1)
                    <button class="btn btn-xs btn-danger admin_cpauth"
                            data-status="1"
                            data-id="{{$vo->cp_id}}">取消认证
                    </button>
                @endif
            </td>
        </tr>
    @endforeach
    {!! $data->render() !!}
    @endif
</table>
</body>
<script src="/asset/web/js/use/index.js"></script>
</html>
