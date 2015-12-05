<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap/css/bootstrap.min.css" type="text/css" media="Screen" />
<div id="full_page_wrapper">
<div id="full_page_body">
<?php echo validation_errors(); ?>
<?php echo form_open('verifylogin'); ?>
 <label for="username">Username:</label>
 <input type="text" size="20" id="username" name="username"/>
 <br/>
 <label for="password">Password:</label>
 <input type="password" size="20" id="passowrd" name="password"/>
 <br/>
 <input type="submit" value="Login"/>
 </form>
 </div>
 </div>