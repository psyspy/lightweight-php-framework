<?php /* Smarty version Smarty-3.1.13, created on 2013-02-08 14:45:33
         compiled from ".\templates\default\plugins\common_user\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207025114ec0444f685-98474591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6feb507c176db0b8331b00d34c4757af9389004d' => 
    array (
      0 => '.\\templates\\default\\plugins\\common_user\\login.tpl',
      1 => 1360331072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207025114ec0444f685-98474591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5114ec0447e621_38970549',
  'variables' => 
  array (
    'login_error' => 0,
    'login_name' => 0,
    'register_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5114ec0447e621_38970549')) {function content_5114ec0447e621_38970549($_smarty_tpl) {?>

	<section>
          <div class="row-fluid">
            <div class="span6">
				<form action="?p=common_user&a=login" method="POST" class="form-signin row-fluid">
					<h2 class="form-signin-heading">Please sign in</h2>
					
						  <div class="control-group <?php echo $_smarty_tpl->tpl_vars['login_error']->value;?>
">
							<div class="controls">
							  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['login_name']->value;?>
" name="username" class="input-block-level" placeholder="Login name">
							</div>
						  </div>
						  <div class="control-group <?php echo $_smarty_tpl->tpl_vars['login_error']->value;?>
">
							<div class="controls">
							  <input name="pass" type="password" class="input-block-level" placeholder="Password">
							</div>
						  </div>
						  
							<div class="control-group">
							  <label class="checkbox">
								<input type="checkbox" id="optionsCheckbox2" value="true" name="remember">
								Remember me.
							  </label>
							</div>

					<button class="btn btn-large btn-primary" type="submit">Sign in</button>

				</form>
            </div>
			
            <div class="span6">
				<form action="?p=common_user&a=login" method="POST" class="form-signin">
					<h2 class="form-signin-heading">or register</h2>
					
						  <div class="control-group <?php echo $_smarty_tpl->tpl_vars['register_error']->value;?>
">
							<div class="controls">
							  <input type="text" name="email" class="input-block-level" placeholder="Email address">
							</div>
						  </div>
						  <div class="control-group <?php echo $_smarty_tpl->tpl_vars['register_error']->value;?>
">
							<div class="controls">
							  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['login_name']->value;?>
" name="username" class="input-block-level" placeholder="Login name">
							</div>
						  </div>
						  <div class="control-group <?php echo $_smarty_tpl->tpl_vars['register_error']->value;?>
">
							<div class="controls">
							  <input name="pass" type="password" class="input-block-level" placeholder="Password">
							</div>
						  </div>

					<button class="btn btn-large btn-primary" type="submit">Sign in</button>

				</form>
          </div>
		  
	</section><?php }} ?>