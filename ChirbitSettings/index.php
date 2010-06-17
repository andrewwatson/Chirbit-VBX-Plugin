<?php
	$ci = &get_instance();
	$user_id = $ci->session->userdata('user_id');

	$chirbit_username = PluginStore::get("chirbit_username_$user_id", "");
	$chirbit_password = PluginStore::get("chirbit_password_$user_id", "");



if (isset($_REQUEST['savebutton'])) {
	PluginStore::set("chirbit_username_$user_id",$_REQUEST['username']);
	PluginStore::set("chirbit_password_$user_id",$_REQUEST['password']);

	$chirbit_username = $_REQUEST['username'];
	$chirbit_password = $_REQUEST['password'];

	$message = "Settings Saved!";
}


?>
<div class="vbx-content-main">
    <?php $store = PluginStore::getKeyValues(); ?>
    <div class="vbx-content-menu vbx-content-menu-top">
        <h2 class="vbx-content-heading">Chirbit Credentials</h2>
    </div>

    <div class="vbx-content-container">
		<div class="vbx-content-section">
        <h3>Store Your Credentials</h3>
			<?php if (isset($message)) : ?>
			<h3><?php echo $message; ?></h3>
			<?php endif; ?>
			<form action="" class="vbx-form">
		<div class="vbx-input-container">
			<label class="field-label">Username 
				<input name="username" size="30" value="<?php echo $chirbit_username; ?>" class="medium text">
			</label>
		</div>
		<div class="vbx-input-container">
			<label class="field-label">Password 
				<input name="password" size="30" value="<?php echo $chirbit_password; ?>" type="password" class="medium text">
			</label>
			<button name="savebutton" class="normal-button"><span>SAVE</span></button>
			</form>
		</div>
		</div>
    </div>
</div>
