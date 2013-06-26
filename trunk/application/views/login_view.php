<!DOCTYPE html>
<html><head>
        <title> Đăng nhập - Chính hãng: Fptshop.com.vn. </title>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="Hàng 100% chính hãng được phân phối bởi hệ thống bán lẻ kỹ thuật số FPTShop cùng với nhiều khuyến mãi hấp dẫn, bảo hành chính hãng. Mua trực tuyến giá rẻ hơn.">
        <meta name="keywords" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta content="INDEX,FOLLOW" name="robots">
        <meta name="viewport" content="width=device-width">
        <meta name="copyright" content="Công ty Cổ phần Bán lẻ Kỹ thuật số FPT">
        <meta name="author" content="Công ty Cổ phần Bán lẻ Kỹ thuật số FPT">
        <meta http-equiv="audience" content="General">
        <meta name="resource-type" content="Document">
        <meta name="distribution" content="Global">
        <meta name="revisit-after" content="1 days">
        <meta name="GENERATOR" content="Công ty Cổ phần Bán lẻ Kỹ thuật số FPT">


        <script type="text/javascript">
            function show_msg (){
                var msg = "<?php echo $msg; ?>";
                alert(msg);
            };
        </script>

        <?php
        if ($msg) {
            echo '<script type="text/javascript">show_msg();</script>';
        }
        ?>


        <script async="" defer="defer" src="DangNhap_files/foconnect.htm" type="text/javascript"></script>
        <script src="<?php echo base_url('public/js/ga.js'); ?>" async="" type="text/javascript"></script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36867340-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>



        <link href="<?php echo base_url('public/css/styles.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/openidstyles.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('public/css/facebookstyles.css'); ?>" rel="stylesheet" type="text/css">

        <script src="<?php echo base_url('public/js/script_head.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('public/js/jquery.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('public/js/openid-jquery-1.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('public/js/openid-en.js'); ?>" type="text/javascript"></script>





        <link rel="shortcut icon" href="https://fptshop.com.vn/favicon.ico">

        <!--Powered by nopCommerce - http://www.nopCommerce.com-->
        <!--Copyright (c) 2008-2012-->
    </head>
    <body>

        <style>
            body{background:#eee !important        }
        </style>
        <div class="backgroundimg">
            <div class="swrapper">
                <div class="swrapperBg"></div>
                <div class="leftColContent">
                    <a href="<?php echo site_url('home'); ?>">
                        <div class="slogo"></div>
                    </a>
                </div>
                <div class="sline"></div>
                <div class="rightColContent">

                    <script language="javascript" type="text/javascript" src="DangNhap_files/foconnect.js"></script>
                    <script type="text/javascript" language="javascript">
                        FOConnect.init({
                            receiver: 'https://fptshop.com.vn/sso',
                            loginurl: 'https://fptshop.com.vn/loginfpt?ac=login_default',
                            logouturl: 'https://fptshop.com.vn/loginfpt?ac=login_default'
                        });
                    </script>
                    <style type="text/css">
                        .img_block img {
                            max-width: 100px !important;
                            max-height: 35px !important;
                            border: none !important;
                        }
                    </style>   
                    <script type="text/javascript">
                        var BASE_URL = 'BASE_URL';
                        var STATIC_URL = 'STATIC_URL';
                        var IMAGE_URL = '~/Themes/FPTShop/Content/images';
                    </script>





                    <div class="topBtn"></div><br> 
                    <form novalidate="novalidate" method="post">        <div class="boxArea">
                            <div class="error">
                            </div>
                            <div class="divcontrol">
                                <label for="Email">Email</label> <span class="colorred">(*)</span><br>                        
                                <input class="sbox" data-val="true" data-val-email="Địa chỉ Email kh&amp;#244;ng hợp lệ" data-val-required="Bắt buộc nhập email" id="Email" name="Email" placeholder="Email" type="text"><br>
                                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>        </div>  
                            <div class="divcontrol">
                                <label for="Password">Mật khẩu</label> <text><span class="colorred">(*)</span></text>  <br>                      
                                <input class="sbox" data-val="true" data-val-required="Bắt buộc nhập mật khẩu" id="Password" name="Password" placeholder="Mật khẩu" type="password"><br>
                                <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                            </div>      
                            <div class="divcontrol">
                                <input data-val="true" data-val-required="&amp;#39;Remember Me&amp;#39; must not be empty." id="RememberMe" name="RememberMe" value="true" type="checkbox"><input name="RememberMe" value="false" type="hidden">
                                <label for="RememberMe">Ghi nhớ thông tin đăng nhập</label>
                            </div>  

                        </div><!---boxArea---->
                        <div class="btnArea">
                            <input class="btnLoginV3" value=" " type="submit">
                            <div class="btnAreaText">
                                <a href="<?php echo site_url('reset_password'); ?>"><i>Quên mật khẩu??</i></a><br>
                                Chưa có tài khoản? <a href="<?php echo site_url('register'); ?>">Đăng ký ngay</a>
                            </div> 
                        </div>
                    </form>        <div class="clearBoth"></div>
                    <div class="account">
                        <div class="linekhac" style="width:410px"></div>
                        <div> ĐĂNG NHẬP BẰNG TÀI KHOẢN KHÁC</div>
                        <div class="linekhac" style="width:410px"></div>
                        <div class="link" "="">
                            <div style="margin-left:-7px;"> 
                                <form novalidate="novalidate" action="/Plugins/ExternalAuthOpenId/Login" id="openid_form" method="post">    <input name="action" value="verify" type="hidden">
                                    <div style="display: block;" id="openid_choice">
                                        <div id="openid_btns">
                                            <a title="log in with Google" href="javascript:openid.signin('google');">
                                                <img alt="login with Google" src="<?php echo base_url('public/img/google-signing.png'); ?>" style=" border: 0px;" height="25px">
                                            </a>
                                            <a title="log in with Yahoo" href="javascript:openid.signin('yahoo');">
                                                <img alt="login with Yahoo" src="<?php echo base_url('public/img/yahoo-signing.png'); ?>" style="margin-left: 5px; border: 0px;" height="25px">
                                            </a>
                                            <a href="https://fptshop.com.vn/Plugins/ExternalAuthFacebook/Login">
                                                <img alt="login with Facebook" src="<?php echo base_url('public/img/facebook-signing.png'); ?>" style="margin-left: 5px; border: 0px;" height="25px">
                                            </a>
                                            <a href="javascript:;" onclick="FOConnect.login()">
                                                <img alt="FptID" src="<?php echo base_url('public/img/logo_FPT_ID.gif'); ?>" style="margin-left: 5px; border: 0px;" height="25px">
                                            </a>
                                        </div>
                                    </div>
                                    <div id="openid_input_area" style="display:none"></div>
                                </form>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        openid.setSignInText('Đăng nhập');
                                        openid.init('ExternalIdentifier', 'https://fptshop.com.vn/');
                                        //openid.setDemoMode(true); //Stops form submission for client javascript-only test purposes
                                    });
                                </script>


                            </div>

                        </div>

                    </div>


                </div>
                <div class="clearBoth"></div>
            </div>
        </div>




        <script src="DangNhap_files/script_foot.js" type="text/javascript"></script>





    </body></html>