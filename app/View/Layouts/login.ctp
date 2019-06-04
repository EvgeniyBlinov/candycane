<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title><?php echo $title_for_layout; ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo Configure::read('app_title'); ?>" />
<?php //echo $this->Html->css('application'); ?>
<?php //echo $this->element('ui_theme'); ?>
<?php //echo $this->Html->script(array('prototype','effects','dragdrop','controls','application')); ?>
<?php //echo $this->Html->script('https://raw.github.com/cognitom/StaffRoll.net-Libraries-and-Themes/master/include.staffroll.net/github/script/1.0/load.js?theme=underground');?>
<?php //echo $this->Html->css('jstoolbar');  ?>
<?php //if (isset($header_tags)) echo $header_tags; ?>
<?php //echo $this->fetch('meta'); ?>
<?php //echo $this->fetch('css'); ?>
<?php //echo $this->fetch('script'); ?>
<style>
body {
    font-family: helvetica, Arial;
    color: #444;
    font-size: 13px;
    min-width: 0;
    background: #f1f1f1 none repeat scroll 0 0;
}
#main {
	margin: auto;
	width: 400px;
}
h1 {
    font-variant-caps: all-small-caps;
    font-weight: bold;
    text-align: center;
}


form {
    background: #fff none repeat scroll 0 0;
    margin-left: 0;
    margin-top: 20px;
    padding: 26px 24px 46px;
}
form, .login h1 a {
    font-weight: 400;
    overflow: hidden;
}
#content {
	background: #fbfbfb none repeat scroll 0 0;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
}

#login-form {
	padding: 20px;
}


form, input[type="text"] {
    background: #fbfbfb none repeat scroll 0 0;
}
form, input[type="text"] {
    background: #fbfbfb none repeat scroll 0 0;
}
form, input[type="text"], input[type="password"] {
    font-size: 24px;
    margin: 2px 6px 16px 0;
    padding: 3px;
    width: 100%;
}
form, input[type="text"] {
    font-size: 24px;
    margin: 2px 6px 16px 0;
    padding: 3px;
    width: 100%;
}
input[type="text"], input[type="search"], input[type="radio"], input[type="tel"], input[type="time"], input[type="url"], input[type="week"], input[type="password"], input[type="checkbox"], input[type="color"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="email"], input[type="month"], input[type="number"], select, textarea {
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.07) inset;
    color: #32373c;
    outline: 0 none;
    transition: border-color 0.05s ease-in-out 0s;
}
input, select {
    margin: 1px;
    padding: 3px 5px;
}
input, select, textarea {
    border-radius: 0;
    font-size: 14px;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    font-weight: inherit;
}
input, textarea {
    box-sizing: border-box;
}


*::before, *::after {
    box-sizing: border-box;
}
*::before, *::after {
    box-sizing: border-box;
}
.btn-primary {
    background-image: linear-gradient(to bottom, #428bca 0px, #2d6ca2 100%);
    background-repeat: repeat-x;
    border-color: #2b669a;
}
.btn-default, .btn-primary, .btn-success, .btn-info, .btn-warning, .btn-danger {
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.15) inset, 0 1px 1px rgba(0, 0, 0, 0.075);
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
}
.btn-block {
    display: block;
    width: 100%;
}
.btn-lg, .btn-group-lg > .btn {
    border-radius: 6px;
    font-size: 18px;
    line-height: 1.33;
    padding: 10px 16px;
}
.btn-primary {
    background-color: #428bca;
    border-color: #357ebd;
    color: #fff;
}
.btn {
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    cursor: pointer;
    display: inline-block;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.42857;
    margin-bottom: 0;
    padding: 6px 12px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
}
.error-message {
	display: none;
}
</style>
</head>
<body>
<div id="wrapper">

<?php echo $this->Html->tag('div', null, array('id' => 'main', 'class' => isset($Sidebar) ? '' : 'nosidebar')); ?>
	<h1><?php echo $Settings->app_title; ?></h1>
	<div id="content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
</div>

<div id="ajax-indicator" style="display:none;"><span><?php echo __('Loading...'); ?></span></div>

<div id="footer">
</div>
</div>
</body>
</html>
