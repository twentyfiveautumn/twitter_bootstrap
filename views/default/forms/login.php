<?php
/**
 * Elgg login form
 *
 * @package Elgg
 * @subpackage Core
 */
?>

	<div class="form-group">
		<label for="username" class="col-lg-2 control-label"><?php echo elgg_echo('notification:method:email'); ?></label>
        <div class="col-lg-8">
			<input type="email" class="form-control" id="username" name="username" placeholder="<?php echo elgg_echo('notification:method:email'); ?>">
		</div>
	</div>
    <div class="form-group">
		<label for="password" class="col-lg-2 control-label"><?php echo elgg_echo('password'); ?></label>
        <div class="col-lg-8">
			<input type="password" class="form-control" id="password" name="password" placeholder="<?php echo elgg_echo('password'); ?>">
		</div>
	</div>                     
	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-8">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="persistent"><?php echo elgg_echo('user:persistent'); ?>
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
			<button type="submit" class="btn btn-success"><?php echo elgg_echo('login'); ?></button>
			<button type="reset" class="btn btn-default"><?php echo elgg_echo('reset'); ?></button>
		</div>
	</div>
