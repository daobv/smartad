<link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/register.css"/>
<div id="body">
    <!-- body container -->
    <div id="body-container">
        <!-- center content -->
        <div id="content-container" data-role="content">
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'widget_login_form',
                'enableClientValidation'=>true,
                'enableAjaxValidation'=>true,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            )); ?>
            <div class="group-label">
                <div class="txt_reg" style="float:left;">
                    <h4>Đăng nhập</h4>
                    <p>
                        <?php echo Setting::getSetting('title');?>
                    </p>
                </div>
                <div class="social_reg" style="float:right;margin-top: 22px;">
                    <a id="fb_loginbtn12" href="#"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/facebooklogin.png"
                                                          alt="Kết nối Facebook" /></a>
                </div>
            </div>
            <div class="blockbody formcontrols" style="clear:both;">
                <div class="section">
                    <div class="blockrow ">
                            <fieldset>
                                <div class="formrowLogin logindetails">
                                    <div id="loginform">
                                        <p>Đăng nhập bằng tài khoản Megadoc.vn</p>
                                    </div>
                                    <p><label for="email" style="float:left;width: 100px">Email:</label>
                                        <input type="text" name="email" id="email" class="required email" /></p>
                                    <p><label for="password" style="float:left;width: 100px">Password:</label>
                                        <input type="password" name="password" id="password" class="required"/></p>
                                    <p>
                                        <label for="message" style="float:left;width: 100px"></label>
                                        <div class="message" style="display:none;"></div>
                                    </p><br/>
                                    <p>
                                    <label for="message" style="float:left;width: 100px">
                                    </label><div id="remember"">
                                    <input type="checkbox" name="remember" value="1" id="cb_cookieuser_navbar" checked="checked" class="cb_cookieuser_navbar" accesskey="c" tabindex="103" />
                                    Duy trì đăng nhập
                                    </p>
                                    <div class = "login-button" style="float:">
                                        <input type="submit" class="signin-button" id="submit" style="margin-right:5px;margin-top: 0px" tabindex="104" value="Ðăng Nhập" />
                                    </div>
                                </div>
                            </fieldset>
                            <div class="chuacotaikhoan">
                                <a style="color: #0072bc;text-align:center" href="<?php echo Yii::app()->createUrl('user/register')?>">Tạo tài khoản mới</a> |
                                <a style="color: #0072bc;text-align:center" href="<?php echo Yii::app()->createUrl('user/forgotPassword')?>">Quên mật khẩu</a>
                            </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>