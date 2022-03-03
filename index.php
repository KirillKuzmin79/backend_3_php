<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
header('Content-Type: text/html; charset=UTF-8');


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!empty($_GET['save'])) {
        print('Thanks, the result is saved.');
    }
    include('form.php');
    exit();
}

$errors = FALSE;
if (empty($_POST['fio'])) {
    print('Write name.<br/>');
    $errors = TRUE;
}

if (empty($_POST['mail'])) {
    print('Write e-mail.<br/>');
    $errors = TRUE;
}

if (empty($_POST['date'])) {
    print('Write birthday.<br/>');
    $errors = TRUE;
}

if ( empty($_POST['sex']) ) {
    print('Check sex.<br/>');
    $errors = TRUE;
}

switch($_POST['sex']) {
    case 'm': {
        $sex='m';
        break;
    }
    case 'f':{
        $sex='f';
        break;
    }
};


if (empty($_POST['Konechnosti'])) {
    print('Check your amount of konechnostei.<br/>');
    $errors = TRUE;
}

switch($_POST['Konechnosti']) {
    case '1': {
        $konechnosti='1';
        break;
    }
    case '2':{
        $konechnosti='2';
        break;
    }
    case '3':{
        $konechnosti='3';
        break;
    }
    case '4':{
        $konechnosti='4';
        break;
    }
};

if (empty($_POST['Superpowers'])) {
    print('Check superpowers.<br/>');
    $errors = TRUE;
}

$power1=in_array('bessm',$_POST['Superpowers']) ? '1' : '0';
$power2=in_array('prohojd',$_POST['Superpowers']) ? '1' : '0';
$power3=in_array('fly',$_POST['Superpowers']) ? '1' : '0';

if (empty($_POST['bio'])) {
    print('Write your bio.<br/>');
    $errors = TRUE;
}

if (empty($_POST['agree'])) {
    print('Agree!<br/>');
    $errors = TRUE;
}
$agree = 'agree';

if ($errors) {
    exit();
}

$user = 'u47531';
$pass = '7833721';
$db = new PDO('mysql:host=localhost;dbname=u47531', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

try {
    $stmt = $db->prepare("INSERT INTO application SET fio = ?, mail = ?, date = ? ,sex = ?, konechnosti = ?, bessm = ?, prohojd = ? ,fly =?, bio = ?, agree = ?");
    $stmt -> execute(array($_POST['fio'],$_POST['mail'],$_POST['date'],$sex,$konechnosti,$power1,$power2,$power3,$_POST['bio'], $agree));
}
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}

header('Location: ?save=1');
?>
