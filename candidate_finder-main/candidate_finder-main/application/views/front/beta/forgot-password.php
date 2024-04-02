
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title><?php echo lang('forgot_password'); ?></title>
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
    top: 48%;
    transform: translateY(-50%);
	  text-align:center;
    width:647px;
    right:0;
    left:0;
    margin:auto;
    height:369px;
    background-color:#9bb1ff;
}
.white-panel{
    background-color: rgba(255,255, 255, 1);
    height:344px;
    position:absolute;
    top:-50px;
    width:500px;
    right:calc(20% - 50px);
    transition:.3s ease-in-out;
    z-index:0;
    box-shadow: 0 0 15px 9px #00000096;
}
.login-reg-panel input[type="radio"]{
    position:relative;
    display:none;
}
/* btnlogin */
.btn-send{
  padding: 10px 0px 0px 160px;
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
    display: block;
    margin:20px 0;
    padding: 15px;
    border-radius: 5px;
    border: 1px solid #101010d1;
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
    display:inline-block;
    padding:10px 0;
}


a{
  text-decoration:none;
  color:#2c7715;
}
/* .email-lable,.pass-lable{
    float: left;
    position: relative;
} */
.email-label {
    display: block;
    margin-bottom: 10px; /* Điều chỉnh khoảng cách giữa label và input */
}
  </style>
</head>
<body>
<?php include(VIEW_ROOT.'/front/beta/partials/breadcrumb.php'); ?>
  <div class="login-reg-panel">				
    <div class="white-panel">
      <div class="login-show">
        <h2><?php echo lang('forgot_password'); ?></h2>
        <form id="forgot_form" action="<?php echo base_url(); ?>send-password-link" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo esc_output($this->security->get_csrf_hash()); ?>">
        <div class="form-group">
          <div class="row">
            <div class="col-12">
              <label class="email-label"><?php echo lang('email'); ?></label>
            </div>
            <div class="col-12">
              <input type="email" name="email" class="form-control" placeholder="<?php echo lang('enter_email_to_receive'); ?>">
            </div>
          </div>
        </div>
            <div class="btn-send">
                <button id="forgot_form_button" title="Save" class="btn-login" type="submit"><?php echo lang('send'); ?></button>
            </div>
        </form>
        <div>
          <a href="<?php echo base_url(); ?>login"><?php echo lang('back_to_login'); ?></a>
        </div>
      </div>
    </div>
  </div>

  <script>
  $(document).ready(function() {
    $('.btn-login').on('click', function() {
      // Xử lý gửi form tại đây, ví dụ:
      $('#forgot_form').submit(); // Gửi form có id là "forgot_form"
    });
  });

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



