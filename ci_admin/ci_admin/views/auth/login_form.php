<?php
$public_html = config_item("public_html");
$username = array(
	'name'	=> 'username',
	'id'	=> 'username',
	'size'	=> 30,
	'value' => set_value('username')
);

$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30
);

$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0'
);

$confirmation_code = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8
);
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登录</title>
<style type="text/css">
<!--
html{color:#000;background:#fff;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td,hr,button,article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}audio,canvas,video{display:inline-block;*display:inline;*zoom:1}body,button,input,select,textarea{font:12px/1.5 tahoma,arial,微软雅黑,\5b8b\4f53}input,select,textarea{font-size:100%}table{border-collapse:collapse;border-spacing:0}th{text-align:inherit}fieldset,img{border:0}iframe{display:block}abbr,acronym{border:0;font-variant:normal}del{text-decoration:line-through}address,caption,cite,code,dfn,em,th,var{font-style:normal;font-weight:500}ol,ul{list-style:none}caption,th{text-align:left}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:500}q:before,q:after{content:''}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}a:hover{text-decoration:underline}
body{background:#fff;margin:0;padding:0;color:#333;}
h1{float:left;width:410px;margin:20px;display:inline;}
h1 img{float:left;}
h1 span{float:right;width:290px;height:47px;background:#ebebeb;font:22px/46px "黑体";text-indent:20px;}
.login-body{margin-top:50px;height:392px;width:100%;background:url(<?php echo $public_html; ?>/images/lor_bg.gif) repeat-x;}
.login-con{width:450px;height:392px;background:url(<?php echo $public_html; ?>/images/login_bg.gif) no-repeat;margin:0 auto;}
.login{float:right;width:400px;margin-right:20px;display:inline}
.login li{float:left;width:100%;margin-bottom:20px;}
.login label{float:left;width:100%;font-size:14px;margin-bottom:3px;}
.login input{float:left;padding:4px 2px;margin:0}
.submit{float:left;border:none;width:70px; height:28px;background:transparent url(<?php echo $public_html; ?>/images/lg_buttom.gif) no-repeat;cursor: pointer;font-size:14px;color:#fff;font-weight:bold;}
-->
</style>
</head>
<body>
<div class="login-body">
<div class="login-con">
<h1><img src="<?php echo $public_html; ?>/images/login_logo.gif" alt="分数宝后台" /><span>数据管理后台</span></h1>
<div class="login">
<?php echo form_open($this->uri->uri_string()); ?>	 
<?php echo $this->dx_auth->get_auth_error(); ?>  
<dl>	
	<dt><?php echo form_label('用户名', "username");?></dt>
	<dd>
		<?php echo form_input($username)?>
    <?php echo form_error("username"); ?>
	</dd>
  <dt><?php echo form_label('密码', $password['id']);?></dt>
	<dd>
		<?php echo form_password($password)?>
    <?php echo form_error($password['name']); ?>
	</dd>

<?php if ($show_captcha): ?>

	<dt>Enter the code exactly as it appears. There is no zero.</dt>
	<dd><?php echo $this->dx_auth->get_captcha_image(); ?></dd>

	<dt><?php echo form_label('Confirmation Code', $confirmation_code['id']);?></dt>
	<dd>
		<?php echo form_input($confirmation_code);?>
		<?php echo form_error($confirmation_code['name']); ?>
	</dd>
	
<?php endif; ?>

	<!-- <dt></dt>
	<dd>
		<?php echo form_checkbox($remember);?> <?php echo form_label('Remember me', $remember['id']);?> 
		<?php echo anchor($this->dx_auth->forgot_password_uri, 'Forgot password');?> 
		<?php
			if ($this->dx_auth->allow_registration) {
				echo anchor($this->dx_auth->register_uri, 'Register');
			};
		?>
	</dd> -->

	<dt></dt>
	<dd><?php echo form_submit(array("name"=>'login','value'=>'登录',"class"=>"submit"));?></dd>
</dl>



         
 </form>  
</div>
            
</div>
</div>
</body>
</html>
