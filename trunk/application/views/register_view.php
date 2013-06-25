<!DOCTYPE html>
<html><head>
        <title> Đăng ký - Chính hãng: Fptshop.com.vn. </title>
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

        <?php
        $public_folder = 'http://localhost:81/CodeIgniterBeginning/public/';
        $root_link = 'http://localhost:81/CodeIgniterBeginning/index.php/';
        ?>

        <script src="<?php echo $public_folder . 'js/ga.js'; ?>" async="" type="text/javascript"></script><script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36867340-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <link href="<?php echo $public_folder . 'css/styles.css'; ?>" rel="stylesheet" type="text/css">
        <script src="<?php echo $public_folder . 'js/script_head.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo $public_folder . 'js/jquery.js'; ?>" type="text/javascript"></script>
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
                    <a href="<?php echo $root_link.'home'; ?>">
                        <div class="slogo"></div>
                    </a>
                </div>
                <div class="sline"></div>
                <div class="rightColContent">



                    <script type="text/javascript">
                        $(function() {
                            ///XUANDT ADD PROVINCE DEFAULT TPHCM
                            $("#StateProvinceId option[value='23']").attr("selected", "selected");

                            $("#CountryId").change(function() {
                                var selectedItem = $(this).val();
                                var ddlStates = $("#StateProvinceId");
                                var statesProgress = $("#states-loading-progress");
                                statesProgress.show();
                                $.ajax({
                                    cache: false,
                                    type: "GET",
                                    url: "/country/getstatesbycountryid",
                                    data: { "countryId": selectedItem, "addEmptyStateIfRequired": "true" },
                                    success: function (data) {
                                        ddlStates.html('');
                                        $.each(data, function(id, option) {
                                            ddlStates.append($('<option></option>').val(option.id).html(option.name));
                                        });
                                        statesProgress.hide();
                                    },
                                    error:function (xhr, ajaxOptions, thrownError){
                                        alert('Failed to retrieve states.');
                                        statesProgress.hide();
                                    }  
                                });
                            });


                            $("#StateProvinceId").change(function() {
                                var selectedItemfd = $(this).val();
                                var ddlFrtDistrict = $("#FrtDistrictId");
                                var statesProgressd = $("#states-loading-progressds");
                                statesProgressd.show();
                                $.ajax({
                                    cache:false,
                                    type: "GET",
                                    url: "/country/getfrtDistrictbystateId",
                                    data: { "stateProvinceId": selectedItemfd, "addEmptyFrtDistrictIfRequired": "true" },
                                    success: function (data) {
                                        ddlFrtDistrict.html('');
                                        $.each(data, function(id, option) {
                                            ddlFrtDistrict.append($('<option></option>').val(option.id).html(option.name));
                                            statesProgressd.hide();
                                        });
                                    },
                                    error:function (xhr, ajaxOptions, thrownError){
                                        alert('Failed to retrieve district.');
                                        statesProgressd.hide();
                                    }  
                                });
                            });



           
                            $("#Email").blur(function () {    
                                // alert("ttt");
                                var emailtt=$("#Email").val();
                                $.ajax({
                                    cache: false,
                                    type: "POST",                    
                                    url:"/Customer/CheckEmailAvailability",                        
                                    data: { "email": emailtt  },                        
                                    success: function (data) {
                                        //  alert(data.Available);
                                        if(data.Available==true){
                                            $("#checkemailtt").html(data.pResult);
                                            $("#checkemailtt").css('color','#FF0000');
                   
                                            return false;
                                        }else{
                                            $("#checkemailtt").html("");
                                            return true;
                                        }

                                    },
                                    error:function (xhr, ajaxOptions, thrownError){
                                        alert('Lỗi, bạn hãy thử lại.');
                                    }  
                                });         
             
                            });
       
                        });
                    </script>
                    <form novalidate="novalidate" action="/dang-ky" method="post"><input name="__RequestVerificationToken" value="VcCH2afm0XYfUyKHkXnx8kAh8gSJNBEaTRO2wl+mmmZ86FUTGjLaJK/YUopEEz6FKDWQ2s4iyi65TKBKIz6oOakEJDYk2VvurVIBZPFXFjkzmVZn9GaoQSGTeK2H1kZxB8puTYG+s95qmsa240f5mQk1TSveq14pw3LOF71KQ5I=" type="hidden">        <div>
                            <div class="logoregister"></div>
                            <!-- <div class="message-error">
                                     Html.ValidationSummary(true)
                                 </div>-->
                            <div class="error">
                                <ul>
                                </ul>
                            </div>
                            <div class="clear">
                            </div>
                            <table class="tbRegister">
                                <tbody>
                                    <tr>
                                        <td> <label for="Email">Email</label> <span class="colorred">(*)</span><br>
                                            <input class="sbox" data-val="true" data-val-email="Sai email" data-val-required="Bắt buộc nhập email" id="Email" name="Email" type="text"><br>                       
                                            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                            <div id="checkemailtt"> </div>
                                        </td>
                                    </tr>
                                    <tr>


                                        <td><label for="Password">Mật khẩu</label> <span class="colorred">(*)</span><br>
                                            <input class="sbox" data-val="true" data-val-length="Mật khẩu phải c&amp;#243; &amp;#237;t nhất 6 k&amp;#237; tự" data-val-length-max="999" data-val-length-min="6" data-val-required="Bắt buộc nhập mật khẩu" id="Password" name="Password" type="password"><br>
                                            <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                                        </td>

                                    </tr>
                                    <tr>

                                        <td> <label for="ConfirmPassword">Xác nhận mật khẩu</label><span class="colorred">(*)</span><br>
                                            <input class="sbox" data-val="true" data-val-equalto="Mật khẩu v&amp;#224; x&amp;#225;c nhận mật khẩu kh&amp;#244;ng giống nhau" data-val-equalto-other="*.Password" data-val-required="Bắt buộc nhập mật khẩu" id="ConfirmPassword" name="ConfirmPassword" type="password"><br>

                                            <span class="field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="padding-top:15px;">
                                            <input class="check-box" data-val="true" data-val-required="&amp;#39;Newsletter&amp;#39; must not be empty." id="Newsletter" name="Newsletter" value="true" type="checkbox"><input name="Newsletter" value="false" type="hidden">
                                            &nbsp;<label for="Newsletter">Nhận thư, tin tức từ Fptshop</label><span><span class="field-validation-valid" data-valmsg-for="Newsletter" data-valmsg-replace="true"></span></span> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="padding-top:15px;">

                                            <input checked="checked" class="check-box" data-val="true" data-val-required="&amp;#39;Frt Default Address&amp;#39; must not be empty." id="FrtDefaultAddress" name="FrtDefaultAddress" value="true" type="checkbox"><input name="FrtDefaultAddress" value="false" type="hidden">&nbsp;Sử dụng địa chỉ này làm địa chỉ giao hàng

                                        </td>
                                    </tr>
                                </tbody></table>


                            <div class="qaLine1020" style="width:100%"></div>

                        </div>
                        <div>
                            <div class="addrRowTitle">THÔNG TIN TÀI KHOẢN</div>
                            <div style="margin-top:10px">
                                <table class="tbRegister">
                                    <tbody>
                                        <tr>

                                            <td><label for="FirstName">Tên</label> <span class="colorred">(*)</span><br>
                                                <input class="sbox" data-val="true" data-val-required="Bắt buộc nhập t&amp;#234;n" id="FirstName" name="FirstName" type="text">    <br>                   
                                                <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span></td>



                                        </tr>
                                        <tr>

                                            <td><label for="Phone">Điện thoại</label>
                                                <span class="colorred">(*)</span>
                                                <br>
                                                <input class="sbox" data-val="true" data-val-regex="Bắt buộc nhập kiểu số." data-val-regex-pattern="[0-9]*" data-val-required="Bắt buộc nhập số điện thoại" id="Phone" name="Phone" type="text"><br>
                                                <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span></td>
                                        </tr>
                                        <tr>

                                            <td><label for="StreetAddress">Địa chỉ</label> 
                                                <span class="colorred">(*)</span>
                                                <br>
                                                <input class="sbox" data-val="true" data-val-required="Bắt buộc nhập địa chỉ" id="StreetAddress" name="StreetAddress" type="text"><br>                      
                                                <span class="field-validation-valid" data-valmsg-for="StreetAddress" data-valmsg-replace="true"></span></td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <label for="StateProvinceId">Tỉnh</label><br>
                                                <select class="sbox" data-val="true" data-val-number="The field Tỉnh must be a number." data-val-required="&amp;#39;State Province Id&amp;#39; must not be empty." id="StateProvinceId" name="StateProvinceId" style="width:400px"><option value="17">Đà
                                                        Nẵng 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="26">Hà Nội 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option selected="selected" value="23">Hồ Chí Minh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="1">An Giang</option>
                                                    <option value="9">Bà Rịa Vũng Tàu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="4">Bắc Giang 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="5">Bắc Kạn 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="6">Bạc Liêu 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="7">Bắc Ninh 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="10">Bến Tre 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="3">Bình Định 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="2">Bình Dương &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="8">Bình Phước &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="11">Bình Thuận &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="13">Cà Mau 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="14">Cần Thơ 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="12">Cao Bằng 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="16">Đak Lak 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="19">Đak Nông 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="15">Điện Biên 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="18">Đồng Nai 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="20">Đồng Tháp 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="21">Gia Lai 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="25">Hà Giang 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="27">Hà Nam 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="30">Hà Tây 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="29">Hà Tĩnh 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="24">Hải Dương 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="28">Hải Phòng 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="32">Hậu Giang 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="22">Hòa Bình 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="31">Huế 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="33">Hưng Yên 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="35">Khánh Hòa 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="34">Kiên Giang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="36">Kon Tum 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="39">Lai châu 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="40">Lâm Đồng 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="41">Lạng Sơn 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="38">Lào Cai 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="37">Long An 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="44">Nam Định 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="42">Nghệ An 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="43">Ninh Bình 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="45">Ninh Thuận &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="46">Phú Thọ 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="47">Phú Yên 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="48">Quảng Bình &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="51">Quảng Nam 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="50">Quảng Ngãi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="49">Quảng Ninh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="52">Quảng Trị 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="54">Sóc Trăng 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="53">Sơn La 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="58">Tây Ninh 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="55">Thái Bình 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="59">Thái Nguyên &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="57">Thanh Hóa 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="56">Tiền Giang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="61">Trà Vinh 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="60">Tuyên Quang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="62">Vĩnh Long 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="63">Vĩnh Phúc 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="64">Yên Bái 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                </select>
                                                <span id="states-loading-progress" style="display: none;">Chờ đợi...
                                                    <img src="<?php echo $public_folder.'img/ajax_loader_small.gif';?>" alt="Chờ đợi...">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <label for="FrtDistrictId">Quận</label><br>
                                                <select class="sbox" data-val="true" data-val-number="The field Quận must be a number." data-val-required="&amp;#39;Frt District Id&amp;#39; must not be empty." id="FrtDistrictId" name="FrtDistrictId" style="width:400px"><option selected="selected" value="225">Quận
                                                        1 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="226">Quận 2 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="227">Quận 3 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="228">Quận 4 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="229">Quận 5 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="230">Quận 6 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="231">Quận 7 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="232">Quận 8 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="233">Quận 9 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="234">Quận 10 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="235">Quận 11 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="236">Quận 12 
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="237">Quận Bình Thạnh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="238">Huyện Bình Chánh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="239">Quận Bình Tân &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="240">Huyện Củ Chi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="241">Huyện Cần Giờ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="242">Quận Gò Vấp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="243">Huyện Hóc Môn &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="244">Huyện Nhà Bè &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="245">Quận Phú Nhuận &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="246">Quận Tân Bình &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="247">Quận Thủ Đức &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                    <option value="248">Quận Tân Phú &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                </select>
                                                <span id="states-loading-progressds" style="display: none;">Chờ đợi...
                                                    <img src="<?php echo $public_folder.'img/ajax_loader_small.gif';?>" alt="Chờ đợi...">
                                                </span>
                                            </td>
                                        </tr>


                                    </tbody></table>

                            </div>
                        </div><!--col1020-->
                        <div class="btnArea">
                            <input name="register" value=" " class="btnRegisterV3" type="submit">
                            <div class="btnAreaText" style="margin-right:40px;margin-top:5px">
                                Đã có tài khoản? <a href="<?php echo $root_link.'login';?>">Đăng nhập</a>
                            </div> 
                        </div>
                    </form>


                </div>
                <div class="clearBoth"></div>
            </div>
        </div>
       <script src="<?php echo $public_folder.'js/script_foot.js';?>" type="text/javascript"></script>
    </body></html>