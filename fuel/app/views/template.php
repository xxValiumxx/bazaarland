<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style>
            @import url(http://fonts.googleapis.com/css?family=Ultra);
		body { margin: 40px; }
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<h1><?php echo $title; ?></h1>
			<hr>
                        <?php
                            if (isset($user_info))
                            {
                                echo $user_info;
                            }
                            else
                            {
                                if (Auth::instance()->check())
                                {
                                    $link = array('Logged in as: '.Auth::instance()->get_screen_name(), Html::anchor('users/logout', 'Logout'));
                                }
                                else
                                {
                                $link = array(Html::anchor('users/login', 'Login'), Html::anchor('users/register', 'Register'));
                                }
                                echo Html::ul($link);
                            }
                        ?>
<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-error">
				<strong>Error</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
<?php endif; ?>
		</div>
		<div class="col-md-12">
<?php echo $content; ?>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			
		</footer>
	</div>
</body>
</html>
