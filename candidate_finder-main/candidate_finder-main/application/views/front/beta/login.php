
<?php include(VIEW_ROOT.'/front/beta/partials/breadcrumb.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Login</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Mukta');
body{
  font-family: 'Mukta', sans-serif;
	height:100vh;
	min-height:550px;
	background-image: url(http://www.planwallpaper.com/static/images/Free-Wallpaper-Nature-Scenes.jpg);
	background-repeat: no-repeat;
	background-size:cover;
	background-position:center;
	position:relative;
    overflow-y: hidden;
}
a{
  text-decoration:none;
  color:#444444;
}
.login-reg-panel{
    position: relative;
    top: 50%;
    transform: translateY(25%);
	text-align:center;
    width:80%;
	right:0;left:0;
    margin:auto;
    height:400px;
    background-color:#9bb1ff;
}
.white-panel{
    background-color: rgba(255,255, 255, 1);
    height:550px;
    position:absolute;
    top:-50px;
    width:50%;
    right:calc(50% - 50px);
    transition:.3s ease-in-out;
    z-index:0;
    box-shadow: 0 0 15px 9px #00000096;
    display: flex;
    justify-content: center; /* Canh giữa theo chiều ngang */
    align-items: center; /* Canh giữa theo chiều dọc */
    min-height: 70vh;
}
.login-reg-panel input[type="radio"]{
    position:relative;
    display:none;
}
/* btnlogin */
.btn{
    padding: 10px;
    margin: 11px 105px;
    width: 133px;
}
.btn-login {
    background-color: #beddff; /* Màu xanh của nền */
    color: #000000; /* Màu đen của chữ */
    border: none; /* Loại bỏ đường viền */
    padding: 10px 20px; /* Đặt khoảng cách padding */
    border-radius: 5px; /* Đường cong viền */
    cursor: pointer; /* Đổi con trỏ khi hover */
    text-decoration: none; /* Loại bỏ gạch chân khi hover */
  }
  
  .btn-login:hover {
    background-color: #057cfc; /* Màu nền xanh đậm khi hover */
    color: #ffffff; /* Chữ trắng khi hover */
  }
  .login-show .check-box-login {
    padding-left: 20px;
}
  .text-muted{
    color: #6DB2FC !important;
  }
  .login-show .check-box-login{
    padding-right: 290px;
  }
  /* end */
.login-reg-panel{
    color:#B8B8B8;
}
.login-reg-panel #label-login, 
.login-reg-panel #label-register{
    border:1px solid white;
    color: white;
    padding:5px 5px;
    width:150px;
    display:block;
    text-align:center;
    cursor:pointer;
    font-weight: 600;
    font-size: 18px;
}
.login-info-box{
    width:30%;
    padding:0 0px 0 100px;
    top:20%;
    left:0;
    position:absolute;
    text-align:left;
}
.login-info-box h2{
  color: black;
  font-size: 1.5rem;
}
.register-info-box{
    width:30%;
    padding:0 0px;
    padding-left: 0px;
    top:20%;
    right:0;
    position:absolute;
    text-align:left;
    
}
.register-info-box h2{
  color: black;
  
}
.right-log{
  right:50px !important;
  width: 500px;
  
}

.login-show, 
.register-show{
    z-index: 1;
    display:none;
    opacity:0;
    transition:0.3s ease-in-out;
    color:#242424;
    text-align:left;
    padding:50px;
}
.show-log-panel{
    display:block;
    opacity:0.9;
}
.show-log-panel h2{
  text-align: center;
}
.login-show input[type="text"], .login-show input[type="password"]{
    width: 100%;
    height: 40px;
    display: block;
    margin:-3px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.login-show input[type="button"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.login-show a{
  display: flex;
    align-items: center;
    text-decoration: none; /* Loại bỏ gạch chân */
    color: white; /* Màu chữ */
    margin-right: 10px;
}
.login-show a span{
  margin-right: 5px;
}

.register-show input[type="text"], .register-show input[type="password"]{
    width: 100%;
    height: 40px;
    display: block;
    margin:-9px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.register-show input[type="button"] {
    max-width: 150px;
    width: 100%;
    background: #057cfc;
    border-radius: 5px;
    border-radius: 5px;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.register-info-box h2{
    font-size: 1.5rem;
}
.credit {
    position:absolute;
    bottom:10px;
    left:10px;
    color: #3B3B25;
    margin: 0;
    padding: 0;
    font-family: Arial,sans-serif;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 99;
}
a{
  text-decoration:none;
  color:#2c7715;
}
.email-lable,.pass-lable{
    float: left;
    position: relative;
}
/* input-register */
.input-container {
        display: flex;
        justify-content: space-between;
        padding: 0 0 15px;
    }
.input-container div {
        margin-right: 10px;
        
}
.input-container label{
  margin-top: 10px;
}
.input-container input {
        border-radius: 5px;
        padding: 5px;
        border: 1px solid #ccc;
}

.input-container label {
      margin-bottom: 0.5rem;
}
#gender{
    height: 38px;
    margin-top: -8px;
    border-radius: 5px;
    width: 114px;
    text-align: center;
}
.email-container{
  padding: 0px 0px 25px;
}

/* end */
.mb-3{
  padding: 0px;
}
.btn-register button{
  padding: 10px;
    margin: 40px 132px;
    width: 139px;
    background: #057cfc;
    color: white;
}
.btn-primary-register:hover {
    background-color: initial; /* Đặt lại màu nền khi hover (bạn có thể cần chỉ định một màu cụ thể thay vì 'initial' tùy thuộc vào nhu cầu của bạn) */
    color: white; /* Đặt lại màu của text (tương tự như trên, 'initial' có thể cần được thay thế bằng một giá trị cụ thể) */
    background: #057cfc;
    /* Thêm bất kỳ thay đổi nào khác bạn muốn áp dụng cho trạng thái :hover của nút */
}

</style>
<body>
  

<div class="container">
<div class="login-reg-panel">
    <div class="login-info-box">
      <h2>Bạn đã có tài khoản</h2>
      <label id="label-register" for="log-reg-show">Đăng nhập ngay</label>
      <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
    </div>
    
    <div class="register-info-box">
      <h2>Bạn chưa có tài khoản?</h2>
      <label id="label-login" for="log-login-show">Đăng ký ngay</label>
      <input type="radio" name="active-log-panel" id="log-login-show">
    </div>
 
    <!-- Login/Register toggling not included in this example for brevity -->
    <div class="white-panel">
      <div class="login-show">
        <h2><?php echo lang('login'); ?></h2>
        <form action="<?php echo base_url(); ?>post-login" method="post">
          <input type="hidden" name="csrf_token" value="<?php echo esc_output($this->security->get_csrf_hash()); ?>">
          <div class="col-12 mb-3 form-group">
            <label for="email"><?php echo lang('email'); ?></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo lang('email'); ?>">
          </div>
          <div class="col-12 mb-3 form-group">
            <label for="password"><?php echo lang('password'); ?></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo lang('password'); ?>">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember"><?php echo lang('remember_me'); ?></label>
          </div>
          <button type="submit" class="btn btn-primary"><?php echo lang('login'); ?></button>
          <?php include(VIEW_ROOT.'/front/beta/partials/messages.php'); ?>
          <!-- Optional Forgot Password and Register links -->
          <?php if(setting('enable-forgot-password') == 'yes') { ?>
          <a style="justify-content: center;" href="<?php echo base_url(); ?>forgot-password" class="text-muted"><?php echo lang('forgot_password'); ?></a>
          <?php } ?>
          <h6 style="text-align: center; color: black;padding:7px;" class="loginby">Đăng nhập bằng</h6>
          <!-- register -->
          <!-- <?php if(setting('enable-register') == 'yes') { ?>
          <a href="<?php echo base_url(); ?>register" class="text-muted"><?php echo lang('register'); ?></a>
          <?php } ?> register end --> 
          <!-- Optional Social Logins -->
          <div class="btn-gg" style="width:282px;padding:10px 0 0 67px;">
              <?php if(setting('enable-google-login') == 'yes') { ?>
              <a  href="<?php echo $googleLogin; ?>" style="height: 31px;" class="btn-social btn-google">
                <span  class="fab fa-google"></span> <?php echo lang('sign_in_google'); ?>
              </a>
              <?php } ?>
          </div>
          <div class="btn-link" style="padding: 10px 0 0 65px; width: 282px;">
              <?php if(setting('enable-linkedin-login') == 'yes') { ?>
              <a href="<?php echo $linkedinLogin; ?>" style="height: 31px;" class="btn-social btn-linkedin">
                <span class="fab fa-linkedin"></span> <?php echo lang('sign_in_linkedin'); ?>
              </a>
              <?php } ?>
          </div>
        </form>
      </div>

      <div class="register-show">
        <h2><?php echo lang('register'); ?></h2>
        <form id="register_form">
            <input type="hidden" name="csrf_token" value="<?php echo esc_output($this->security->get_csrf_hash()); ?>">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="register-firstname"><?php echo lang('first_name'); ?></label>
                  <input type="text" class="form-control" id="register-firstname" name="first_name" />
                  <small id="first-name-help" class="form-text text-muted"></small>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="register-lastname"><?php echo lang('last_name'); ?></label>
                  <input type="text" class="form-control" id="register-lastname" name="last_name" />
                  <small id="last-name-help" class="form-text text-muted"></small>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="gender"><?php echo lang('gender'); ?></label>
                  <select class="form-control" id="gender" name="gender">
                  <option value="male"><?php echo lang('male'); ?></option>
                  <option value="female"><?php echo lang('female'); ?></option>
                  <option value="other"><?php echo lang('other'); ?></option>
                  </select>
                  <small id="gender-help" class="form-text text-muted"></small>
                </div>
                <div class="col-md-11 mb-3 form-group">
                    <label><?php echo lang('email'); ?></label>
                    <input type="text" class="form-control" id="email" >
                    <small id="confirm-password-help" class="form-text text-muted"></small>
                </div>
                <div class="col-md-11 mb-3 form-group">
                    <label for="register-password"><?php echo lang('password'); ?></label>
                    <input type="password" class="form-control" id="register-password" name="password">
                    <small id="password-help" class="form-text text-muted"></small>
                </div>
                <div class="col-md-11 mb-3 form-group">
                    <label for="confirm-password"><?php echo lang('retype_password'); ?></label>
                    <input type="password" class="form-control" id="confirm-password" name="retype_password">
                    <small id="confirm-password-help" class="form-text text-muted"></small>
                </div>
                
                <!-- <div class="btn-register">
                  <div class="col-md-11 mb-3 form-group">
                      <button type="submit" class="btn btn-primary-register"><?php echo lang('register'); ?></button>
                  </div>
                </div> -->
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group form-group-account login-other-btns">
                            <?php if(setting('enable-register') == 'yes') { ?>
                            <div class="btn-register">
                            <button type="submit" class="btn btn-primary-register"><a style="text-decoration: none; color: white;" href="<?php echo base_url(); ?>register"><?php echo lang('register'); ?></a></button>
                            </div>
                            <?php } ?>
                        </div>
                        <Br />
                    </div>
                </div>

            </div>
        </form>
        <!-- <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="form-group form-group-account login-other-btns">
                    <a href="<?php echo base_url(); ?>login"><?php echo lang('back_to_login'); ?></a><br />
                </div>
            </div>
        </div> -->
      </div>

    </div>
  </div>
</div>


  <script>
       $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
  

  </script>
</body>
</html>