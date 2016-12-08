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

try {
      $plaintext = Crypto::Decrypt(base64_decode($message), $key);
  } catch (InvalidCiphertextException $ex) {
      die('DANGER! DANGER! The ciphertext has been tampered with!');
  } catch (CryptoTestFailedException $ex) {
      die('Cannot safely perform encryption');
  } catch (CannotPerformOperationException $ex) {
      die('Cannot safely perform decryption');
  }
//print_r($plaintext);



}
?>
<html>
<head>
<title>Decrypt URL</title>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' type="text/javascript"></script>
</head>
<body>
<form action='decrypturl.php' method='post'>
<input type='text' name='urlvideo'>
<input type='submit' value='Decrypt' name='submit'/>
</form>
<div style="width:100%; text-align:left">
<textarea onclick="this.focus();this.select()" readonly="readonly" cols="40" rows="6" style="max-width:600px;width:100%;">
<?php 
echo $plaintext;
?>
</textarea>
</div>
</body>
</html>
