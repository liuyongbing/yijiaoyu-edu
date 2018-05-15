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
                        <label class="tag">登录</label>
                    </div>
                    
                    <!--登录-->
                    <div class="pub-lp d01 ">
                        <form id="form_login" action="{{ route('auth') }}" method="post">
                            {{ csrf_field() }}
                            <input id="mac_token" name="Login[mac_token]" value="" type="hidden" />
                            <p><input type="text" id="mobile" name="Login[mobile]" placeholder="手机号" /></p>
                            <p class="code">
                                <input name="Login[code]" placeholder="手机验证码" type="text" />
                                <label id="get_code">获取验证码</label>
                                <!--label>60秒后重新获取</label-->
                            </p>
                            <a class="post" href="javascript:void(0);">登录</a>
                        </form>
                    </div>
                    <!--登录-->
                    
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
    $(document).ready(function() {
        
        $('#get_code').click(function() {
            
            var mac_token = getMac();
            if (!mac_token) {
                alert('请使用指定浏览器');
                return false;
            }
            
            var mobile = $('#mobile').val();
            if (!mobile) {
                alert('请输入手机号');
                return false;
            }
            
            $.ajax({
                method: "POST",
                url: "{{ route('sms.send') }}",
                data: { 
                    _token : '{{ csrf_token() }}',
                    mobile : mobile 
                },
                dataType: 'json',
                success: function(response) {
                    
                }
            });
        });
        
        $('a.post').click(function() {
            $('#mac_token').val(getMac());
            $('#form_login').submit();
        });
        
    });
    
    function getMac()
    {
        return 'mac_token';
    }
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