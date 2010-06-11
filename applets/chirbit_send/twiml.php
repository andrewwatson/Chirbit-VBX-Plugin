<?php 
	header("Content-type: text/xml\n"); 
	include("chirbit.php");

	$user = AppletInstance::getUserGroupPickerValue('chirbit-controller');
	$user_id = $user->values["id"];

   $chirbit_username = PluginStore::get("chirbit_username_$user_id", "");
   $chirbit_password = PluginStore::get("chirbit_password_$user_id", "");

	$prompt = AppletInstance::getAudioSpeechPickerValue('prompt');
	$after = AppletInstance::getAudioSpeechPickerValue('after');

	$title = AppletInstance::getValue("title","");

	$response = new Response();

	if (isset($_REQUEST['RecordingUrl'])) {

		chirbit_post($chirbit_username,$chirbit_password,$_REQUEST['RecordingUrl'],$title);

		$verb = AudioSpeechPickerWidget::getVerbForValue($after, null);
		$response->append($verb);

		$response->addHangup();

	} else {

		$verb = AudioSpeechPickerWidget::getVerbForValue($prompt, null);
		$response->append($verb);
		$response->addRecord();

	}
	
	$response->Respond();
?>
