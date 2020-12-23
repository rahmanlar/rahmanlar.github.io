
<?php
// Forked from https://github.com/sh4dowb/
// Bu dosyayı kullanmanıza gerek yok. Geliştiriciler içindir.
// EBA'ya nonce'dan Zoom tokeni için istek atarken CORS headeri olmadığı için JS'den yapamıyoruz.
// Sunucuma eklediğim bu dosya ile header eklemiş oluyoruz ve JS'den kullanabiliyoruz.
header("Access-Control-Allow-Origin: *");
if(ctype_xdigit($_GET['nonce']))
        echo file_get_contents("https://uygulama.sebitvcloud.com/VCloudFrontEndService/livelesson/nonce/".$_GET['nonce']);
