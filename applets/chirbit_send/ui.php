<?php
	$title = AppletInstance::getValue("title","");
?>
<div class="vbx-applet menu-applet">
<h2>Chirbit Posting Options</h2>

	<h3>Select a Greeting to play before the caller leaves a recording</h3>
		<?php echo AppletUI::audioSpeechPicker('prompt'); ?>

	<h3>Set the title for your posts on Chirbit</h3>
		<input name="title" size="40" value="<?php echo $title; ?>" />

	<h3>Choose the User whose credentials will be used for Chirbit</h3>
		<?php echo AppletUI::UserGroupPicker('chirbit-controller'); ?>

	<h3>Select a Greeting to play after the user leaves a recording</h3>
		<?php echo AppletUI::audioSpeechPicker('after'); ?>
