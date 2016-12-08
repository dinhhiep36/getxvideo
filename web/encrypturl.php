<?php
require "Crypto.php";

// Do this once then store it somehow:
//$key = Crypto::CreateNewRandomKey();	
//var_dump(base64_encode($key));
$key = base64_decode("ov0DVar9m275gKByHTqsYg==");
//$message = "http://www.xvideos.com/video5611134/park_nima_4";
$message = $_POST['urlvideo'];

if($message != '' || $message != null){

try {
    $ciphertext = base64_encode(Crypto::Encrypt($message, $key));
  } catch (CryptoTestFailedException $ex) {
      die('Cannot safely perform encryption');
  } catch (CannotPerformOperationException $ex) {
      die('Cannot safely perform decryption');
  }

/*try {
      $plaintext = Crypto::Decrypt(base64_decode('JJREK38o35UKN1tN8hx3brjROgl2qKFUONgUsVJ9x6fQYJnPYRAX83stsEvUOtT5BKKHgyF1KFidPIe65YbpyYuyVIQx2nIRGtYsK5ouqN0FtTaKTxn75iMpMuDdNh1c4tnx7dS+TFtulVs7hkb5Ww=='), $key);
  } catch (InvalidCiphertextException $ex) {
      die('DANGER! DANGER! The ciphertext has been tampered with!');
  } catch (CryptoTestFailedException $ex) {
      die('Cannot safely perform encryption');
  } catch (CannotPerformOperationException $ex) {
      die('Cannot safely perform decryption');
  }*/
//print_r($plaintext);

/*if(strpos($message , 'xvideos') !== false){
	print_r('xvideos*'.$ciphertext);
}else if(strpos($message , 'xhamster') !== false){
	print_r('xhamster*'.$ciphertext);
}else if(strpos($message , 'pornhub') !== false){
	print_r('pornhub*'.$ciphertext);
}else if(strpos($message , 'redtube') !== false){
	print_r('redtube*'.$ciphertext);
}else if(strpos($message , 'youporn') !== false){
	print_r('youporn*'.$ciphertext);
}else if(strpos($message , 'youtube') !== false){
	print_r('youtubexxx*'.$ciphertext);
}else if(strpos($message , 'picasaweb') !== false){
	print_r('picasa*'.$ciphertext);
}else if(strpos($message , 'photos.google.com') !== false){
	print_r('picasa*'.$ciphertext);
}else if(strpos($message , 'goo.gl') !== false){
	print_r('ssgirlexpired*'.$ciphertext);
}else if(strpos($message , 'dailymotion') !== false){
	print_r('dailymotion*'.$ciphertext);
}elseif(strpos($message, 'tubecup.com')){
	print_r('tubecup*'.$ciphertext);
}*/

}
?>
<html>
<head>
<title>Encrypt URL</title>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' type="text/javascript"></script>
</head>
<body>
<form action='encrypturl.php' method='post'>
<input type='text' name='urlvideo'>
<input type='submit' value='Encrypt' name='submit'/>
</form>
<div style="width:100%; text-align:left">
<textarea onclick="this.focus();this.select()" readonly="readonly" cols="40" rows="6" style="max-width:600px;width:100%;"><?php 
if(strpos($message , 'xvideos') !== false){
	echo 'xvideos*'.$ciphertext;
}else if(strpos($message , 'xhamster') !== false){
	echo 'xhamster*'.$ciphertext;
}else if(strpos($message , 'pornhub') !== false){
	echo 'pornhub*'.$ciphertext;
}else if(strpos($message , 'redtube') !== false){
	echo 'redtube*'.$ciphertext;
}else if(strpos($message , 'youporn') !== false){
	echo 'youporn*'.$ciphertext;
}else if(strpos($message , 'youtube') !== false){
	echo 'youtubexxx*'.$ciphertext;
}else if(strpos($message , 'picasaweb') !== false){
	echo 'picasa*'.$ciphertext;
}else if(strpos($message , 'photos.google.com') !== false){
	echo 'picasa*'.$ciphertext;
}else if(strpos($message , 'goo.gl') !== false){
	echo 'ssgirlexpired*'.$ciphertext;
}else if(strpos($message , 'dailymotion') !== false){
	echo 'dailymotion*'.$ciphertext;
}elseif(strpos($message, 'txxx.com')){
	echo 'tubecup*'.$ciphertext;
}elseif(strpos($message, 'tube8.com')){
	echo 'tube8*'.$ciphertext;
}elseif(strpos($message, 'tv.zing.vn')){
	echo 'zingtv*'.$ciphertext;
}elseif(strpos($message, 'v.nhaccuatui.com')){
	echo 'ntc*'.$ciphertext;
}elseif(strpos($message, 'drive.google.com') || strpos($message, 'docs.google.com')){
	echo 'ggdrive*'.$ciphertext;
} ?></textarea>
</div>
</body>
</html>
