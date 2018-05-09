@extends('layouts.main')

@section('title', '登录')

@section('body')
<body>
    
    <div class="head">
        <div class="center">
            <a href="javascript:void(0);" class="logo"></a>
        </div>
    </div>
    
    <div class="login-main">
        <div class="center prel">
            <div class="txt pabs">身体更加健壮<br/>性格更加开朗<br/>思维更加灵活</div>
            <div class="login-div r">
                <div class="mk">
                    <div class="tle">
                        <label class="tag">登录</label> | 
                        <label>注册</label>
                    </div>
                    
                    <!--登录-->
                    <div class="pub-lp d01 ">
                        <p><input type="text" name="Login[mobile]" placeholder="手机号" /></p>
                        <p class="code">
                            <input name="Login[code]" placeholder="手机验证码" type="text" />
                            <label id="get_code">获取验证码</label>
                            <!--label>60秒后重新发送</label-->
                        </p>
                        <a class="post" href="javascript:void(0);">登录</a>
                        <div class="btn">
                            <a data-name="d02" href="javascript:void(0);">分馆注册</a> | 
                            <a data-name="d03" href="javascript:void(0);">教练注册</a>
                        </div>
                    </div>
                    <!--登录-->
                    
                    <!--注册(分馆)-->
                    <div class="pub-lp d02 undis">
                        <p>
                            <input class="xl-5" type="text" placeholder="姓名" />
                            <input class="xl-5" type="text" placeholder="性别" />
                        </p>
                        <p>
                            <input class="xl-5" type="text" placeholder="手机号码" />
                            <input class="xl-5" type="text" placeholder="邮箱" />
                        </p>
                        <p>
                            <input class="xl-5" type="text" placeholder="出生日期" />
                            <input class="xl-5" type="text" placeholder="加盟时间" />
                        </p>
                        <p>
                            <input class="xl-5" type="text" placeholder="申请城市" />
                            <input class="xl-5" type="text" placeholder="投资金额" />
                        </p>
                        <p>
                            <input  type="text" placeholder="身份证号" />
                        </p>
                        <p>
                            <input  type="text" placeholder="校区地址" />
                        </p>
                        <a class="post" href="javascript:void(0);">立即注册</a>
                    </div>
                    <!--注册(分馆)-->
                    
                    <!--注册(教练)-->
                    <div class="pub-lp d03 undis">
                        <p>
                            <input class="xl-5" type="text" placeholder="姓名" />
                            <input class="xl-5" type="text" placeholder="性别" />
                        </p>
                        <p>
                            <input class="xl-5" type="text" placeholder="手机号码" />
                            <input class="xl-5" type="text" placeholder="邮箱" />
                        </p>
                        <p>
                            <input  type="text" placeholder="校区地址" />
                        </p>
                        <a class="post" href="javascript:void(0);">立即注册</a>
                    </div>
                    <!--注册(教练)-->
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="foot">
        <div class="center">中国跆拳道教育研发领航者</div>
    </div>
    
    
    <!--获取MAC地址-->
    <object classid="CLSID:76A64158-CB41-11D1-8B02-00600806D9B6" id="locator" style="display:none;visibility:hidden"></object>
    <object classid="CLSID:75718C9A-F029-11d1-A1AC-00C04FB6C223" id="foo" style="display:none;visibility:hidden"></object> 
    <form name="myForm">
    <br/>MAC地址：<input type="text" name="macAddress">
    <br/>IP地址：<input type="text" name="ipAddress">
    <br/>主机名：<input type="text" name="hostName">
    </form>
    <!--获取MAC地址-->
    
    
</body>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        //注册
        $('.btn a').click(function(){
            var type=$(this).data('name');
            $('.pub-lp').hide(); $('.'+type+'').show();
            $('.tle label').removeClass('tag');
            if(type=="d02"){
                $('.tle label:last-child').html('注册(分馆)').addClass('tag');
            }else if(type=="d03"){
                $('.tle label:last-child').html('注册(教练)').addClass('tag');
            }
        });
        
        //点击登录title
        $('.tle label:first-child').click(function(){
            $('.pub-lp').hide(); $('.d01').show();
            $(this).addClass('tag');
            $('.tle label:last-child').html('注册').removeClass('tag');
        });
        
        $('#get_code').click(function() {
            $.ajax({
                method: "POST",
                url: "{{ route('login.code') }}",
                data: { mobile: "18516553344" },
                dataType: 'json'
                success: function(response) {
                    alert('Demo');
                }
            })
        });
        
    });
</script>

<script  type="text/javascript">
// var sMacAddr="";
// var sIPAddr="";
// var sDNSName="";
// var service = locator.ConnectServer();
// service.Security_.ImpersonationLevel=3;
// service.InstancesOfAsync(foo, 'Win32_NetworkAdapterConfiguration');
</script>

<script for="foo" event="OnObjectReady(objObject,objAsyncContext)"  type="text/javascript">
// if(objObject.IPEnabled != null && objObject.IPEnabled != "undefined" && objObject.IPEnabled == true) {
    // if(objObject.IPEnabled && objObject.IPAddress(0) !=null && objObject.IPAddress(0) != "undefined")
        // sIPAddr = objObject.IPAddress(0);
    // if(objObject.MACAddress != null &&objObject.MACAddress != "undefined")
        // sMacAddr = objObject.MACAddress;
    // if(objObject.DNSHostName != null &&objObject.DNSHostName != "undefined")
        // sDNSName = objObject.DNSHostName;
// }
</script>

<script for="foo" event="OnCompleted(hResult,pErrorObject, pAsyncContext)" language="text/javascript">
// myForm.macAddress.value=sMacAddr;
// myForm.ipAddress.value=sIPAddr;
// myForm.hostName.value=sDNSName;
</script>
@endsection