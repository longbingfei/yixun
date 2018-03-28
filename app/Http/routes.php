<?php
Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'WebController@index');
    Route::get('/index', 'WebController@index');

    //需求
    Route::get('/need', 'WebController@need');
    Route::get('/need/{id}', 'WebController@needDetail');
    Route::post('/need_baoming', 'WebController@needBaoming');
    Route::get('/create_need', 'WebController@needForm');
    Route::get('/update_need/{id}', 'WebController@needUpdateForm');
    Route::post('/update_need/{id}', 'WebController@needUpdate');
    Route::get('/delete_need/{id}', 'WebController@needDelete');
    Route::post('/create_need', 'WebController@createNeed');
    Route::get('/choose_need/{nid}', 'WebController@chooseNeed');
//    Route::get('/over_need/{nid}', 'WebController@overNeed');
    Route::get('/lock_need/{nid}', 'WebController@lockNeed');
    Route::get('/throw_need/{nid}', 'WebController@throwNeed');

    //企业
    Route::get('/establish', 'WebController@companyForm');
    Route::post('/establish', 'WebController@establish');
    Route::get('/company', 'WebController@company');
    Route::get('/company/{id}', 'WebController@companyDetail');
    Route::get('/update_company/{id}', 'WebController@companyUpdateForm');
    Route::post('/update_company/{id}', 'WebController@companyUpdate');
    Route::get('/delete_company/{id}', 'WebController@companyDelete');
    Route::get('/cpauth/{id}', 'WebController@cpauthForm');
    Route::post('/cpauth', 'WebController@cpauth');
    Route::get('/cpauth_detail/{id}', 'WebController@cpauthDetail');

    //产品
    Route::get('/p', 'WebController@product');
    Route::get('/prd', 'WebController@productForm');
    Route::post('/prd', 'WebController@productCreate');
    Route::get('/update_prd/{id}', 'WebController@productUpdateForm');
    Route::post('/update_prd/{id}', 'WebController@productUpdate');
    Route::get('/prd/{id}', 'WebController@productDetail');
    Route::get('/delete_prd/{id}', 'WebController@productDelete');

    //search
    Route::get('/_need/keywords/{id?}', function($id=""){
        return redirect("/need?keywords={$id}");
    });
    Route::get('/_company/keywords/{id?}', function($id=""){
        return redirect("/company?keywords={$id}");
    });
    Route::get('/_p/keywords/{id?}', function($id=""){
        return redirect("/p?keywords={$id}");
    });

    //用户操作
    Route::get('/register', function () {
        $image = \Illuminate\Support\Facades\DB::table('net')->first()->login_image;
        return view('tpl.default.register', ['image' => $image]);
    });
    Route::post('/register', 'WebController@register');
    Route::get('/login', function () {
        $image = \Illuminate\Support\Facades\DB::table('net')->first()->login_image;
        return view('tpl.default.login', ['image' => $image]);
    });
    Route::post('/login', 'WebController@login');
    Route::get('/logout', 'WebController@logout');
    Route::get('/zone/{id}', 'WebController@zone');
    Route::get('/admin_zone', 'WebController@adminZone');

    Route::get('/admin_user', 'WebController@adminUser');
    Route::post('/admin_change_user_status', 'WebController@adminCUS');

    Route::get('/admin_need', 'WebController@adminNeed');
    Route::post('/admin_change_need_status', 'WebController@adminCNS');
    Route::get('/admin_change_need_delete/{id}', 'WebController@adminDN');

    Route::get('/admin_company', 'WebController@adminCompany');
    Route::post('/admin_change_company_status', 'WebController@adminCCS');
    Route::get('/admin_change_company_delete/{id}', 'WebController@adminDC');
    Route::get('/admin_cpauth', 'WebController@adminCPA');
    Route::post('/admin_cpauth', 'WebController@adminCPAU');

    Route::get('/admin_prd', 'WebController@adminPrd');
    Route::post('/admin_change_prd_status', 'WebController@adminCPS');
    Route::get('/admin_change_prd_delete/{id}', 'WebController@adminDP');

    Route::get('/news', 'WebController@news');
    Route::get('/news/{id}', 'WebController@newsDetail');
    Route::post('/news', 'WebController@adminNewsCreate');
    Route::post('/news/{id}', 'WebController@adminNewsUpdate');

    Route::get('/admin_news', 'WebController@adminNews');
    Route::post('/admin_news', 'WebController@adminNewsCreate');
    Route::post('/admin_news/{id}', 'WebController@adminNewsUpdate');
    Route::post('/admin_change_news_status', 'WebController@adminCNES');
    Route::get('/admin_news_delete/{id}', 'WebController@adminDNES');

    Route::get('/admin_net', 'WebController@adminNet');
    Route::post('/admin_net', 'WebController@adminNetUpdate');


    Route::post('/admin_promote/{id}', 'WebController@adminPromote');
    Route::post('/admin_cancel_promote/{id}', 'WebController@adminCancelPromote');

    //七牛上传回调
    Route::post('/qiniu_callback', 'WebController@qiniuCallback');
    Route::get('/task', 'WebController@task');

    //获取城市
    Route::get('/city/{pid}', 'WebController@getCity');

    //厂家分类
    Route::get('/c_sort','WebController@c_sort_list');
    Route::get('/c_sort/{id}','WebController@c_sort_detail');
    Route::post('/c_sort','WebController@c_sort_create');
    Route::post('/c_sort/{id}','WebController@c_sort_update');
    Route::delete('/c_sort/{id}','WebController@c_sort_delete');

    //需求分类
    Route::get('/n_sort','WebController@n_sort_list');
    Route::get('/n_sort/{id}','WebController@n_sort_detail');
    Route::post('/n_sort','WebController@n_sort_create');
    Route::post('/n_sort/{id}','WebController@n_sort_update');
    Route::delete('/n_sort/{id}','WebController@n_sort_delete');

    //产品分类
    Route::get('/p_sort','WebController@p_sort_list');
    Route::get('/p_sort/{id}','WebController@p_sort_detail');
    Route::post('/p_sort','WebController@p_sort_create');
    Route::post('/p_sort/{id}','WebController@p_sort_update');
    Route::delete('/p_sort/{id}','WebController@p_sort_delete');

    //厂家转让
    Route::post('/c_exchange','WebController@c_exchange');

    //忘记密码
    Route::get('/forget_pass',function(){
        return view('tpl/default/forget_form');
    });
    Route::get('/resetpassword/{id}','WebController@ResetPasswdForm');
    Route::post('/reset_password','WebController@ResetPasswd');

    //邮件发送
    Route::post('/send_email','WebController@Email');
});

