<?php
require '../config_ivan/conf-ivan.php';
$reponse = array();
session_start();

switch($_POST['action']){

    case 'list_event':
        ListEvent($smarty, $db);
        break;
}

function ListEvent($smarty, $db){
    global $reponse;
    $reponse['action'] = "list_event";
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $rs = $db->getAll('SELECT * FROM app_event');
    $user_login = 0;
    if (isset($_SESSION['login'])){
        $user_login = 1;
    }
    $smarty->assign('arr_list_event', $rs);
    $smarty->assign('user_login', $user_login);
    $reponse['list_event'] = $smarty->fetch("list_event.tpl");
}

echo json_encode($reponse);