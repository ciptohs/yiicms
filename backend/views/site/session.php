
<?php
echo "<h1> latihan Session </h2>";
//memulai session
$session=Yii::$app->session;
//memberi nilai pada variabel session
$session['user']="cipto";
//atau 
$session->set('user','cipto');
echo $session['user'];
//remove variabel session
$session->remove('user');
//cek apakah variabel session exis

if($session->has('user')){   //if (isset($session['user'])
echo "<p>session user ada";
}else{
echo "<p>session tidak ada";
}
?>