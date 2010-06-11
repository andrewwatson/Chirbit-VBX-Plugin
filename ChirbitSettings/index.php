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
}


?>
<div class="vbx-content-main">
    <?php $store = PluginStore::getKeyValues(); ?>
    <div class="vbx-content-menu vbx-content-menu-top">
        <h2 class="vbx-content-heading">FourSquare Account</h2>
    </div>

    <div class="vbx-content-container">
		<div class="vbx-content-section">
        <h3>Store Your Credentials</h3>
			<form action="" class="vbx-form">
			<p style="width: 200px;">Username: <input name="username" size="30" value="<?php echo $chirbit_username; ?>"></p>
			<p style="width: 200px;">Password: <input name="password" size="30" value="<?php echo $chirbit_password; ?>" type="password"></p>
			<button name="savebutton">SAVE</button>
			</form>
		</div>
    </div>
</div>
