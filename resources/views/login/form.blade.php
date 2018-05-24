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
                            <p>
                                <input type="text" id="mobile" name="Login[mobile]" placeholder="手机号" />
                            </p>
                            <p class="code">
                                <input id="code" name="Login[code]" placeholder="手机验证码" type="text" />
                                <label>
                                    <input id="get_code" type="button" value="获取验证码" onclick="sendcode()" />
                                </label>
                            </p>
                            <a class="post" href="javascript:void(0);">无法获取MAC地址, 不能登录</a>
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
</body>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        var mac_token = getMac();
        if (!mac_token) {
            alert('无法获取MAC地址, 请使用指定浏览器.');
        }
        $('#mac_token').val(mac_token);
        $('a.post').html('登录');
        
        $('a.post').click(function() {
            var mobile = $('#mobile').val();
            if (!mobile) {
                alert('请输入手机号');
                return false;
            }
            var code = $('#code').val();
            if (!code) {
                alert('请输入验证码');
                return false;
            }
            var mac_token = $('#mac_token').val();
            if (!mac_token) {
                alert('无法获取MAC地址, 请使用指定浏览器.');
                return false;
            }
            
            //$('#form_login').submit();
            $.ajax({
                method: "POST",
                url: "{{ route('auth') }}",
                data: { 
                    '_token' : '{{ csrf_token() }}',
                    'Login[mobile]' : mobile,
                    'Login[code]' : code,
                    'Login[mac_token]' : mac_token,
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status != 'success') {
                        alert(response.message);
                        return false;
                    }
                    
                    window.location.href = "/";
                },
                error: function (XMLHttpRequest, textStatus, errorThrown)
                {
                    alert('服务器错误');
                }
            })
        });
    });
    
    function getMac()
    {
        var mac = null;
        var locator = new ActiveXObject ("WbemScripting.SWbemLocator");
        var service = locator.ConnectServer(".");
        var properties = service.ExecQuery("Select * from Win32_NetworkAdapterConfiguration Where IPEnabled = True");
        var e = new Enumerator (properties);
        {
            var p = e.item();
            mac = p.MACAddress;
        }
        
        return mac;
    }
    
    //验证码
    var countdown = 120; 
    function sendcode() {
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
        var obj = $("#get_code");
        settime(obj);
    }
    function settime(obj) { //发送验证码倒计时
        if (countdown == 0) { 
            obj.attr('disabled',false); 
            //obj.removeattr("disabled"); 
            obj.val("获取验证码");
            countdown = 120; 
            return;
        } else { 
            obj.attr('disabled',true);
            obj.val("重新发送(" + countdown + ")");
            countdown--; 
        } 
        setTimeout(function() { 
            settime(obj) 
        } ,1000) 
    }
</script>
@endsection