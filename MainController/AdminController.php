<?php
require '../config_ivan/conf-ivan.php';
$reponse = array();
session_start();

switch($_POST['action']){

    case 'login':
        Login($db);
        break;
    case 'add_new_task':
        AddNewTask($db);
        break;
    case 'change_task':
        ChangeTask($smarty, $db);
        break;
    case 'save_edit_task':
        SaveTask($db);
        break;
    case 'logout':
        LogOut();
        break;

}

function Login($db){
    global $reponse;
    $reponse['action'] = "login";
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $SQL = 'SELECT * FROM user WHERE login = ' . "'" .$_POST['user_name'] . "'";
    $rs = $db->getAll($SQL);

    if (sizeof($rs) > 0){
        if ($_POST['password'] == $rs[0]['password']){
            $_SESSION['login'] = 'admin';
        }
    }

    if (isset($_SESSION['login'])){
        $reponse['login'] = "ok";
    } else {
        $reponse['login'] = "nok";
    }


}

function AddNewTask($db){
    global $reponse;
    $reponse['action'] = "add_task";
    $table = 'app_event';
    $record['name'] = $_POST['user_name'];
    $record['email'] = $_POST['email'];
    $record['description'] = $_POST['description'];
    $db->autoExecute($table, $record, 'INSERT');
}

function ChangeTask($smarty, $db){

    global $reponse;
    $reponse['action'] = "edit_task";
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $SQL = 'SELECT * FROM app_event WHERE id = ' . $_POST['id'];
    $rs = $db->getAll($SQL);

    $smarty->assign('task', $rs);
    $smarty->assign('id', $_POST['id']);
    $reponse['modal_edit_task'] = $smarty->fetch("modal_edit_task.tpl");

}

function SaveTask($db){

    global $reponse;
    $reponse['action'] = "save_task";
    $reponse['task_change'] = "nok";

    $SQL = 'SELECT * FROM app_event WHERE id = ' . $_POST['id'];
    $rs = $db->getAll($SQL);
    if (
        ($rs[0]['status'] != $_POST['status'])
        ||
        ($rs[0]['name'] != $_POST['user_name'])
        ||
        ($rs[0]['email'] != $_POST['email'])
        ||
        ($rs[0]['description'] != $_POST['description'])
    ){
        $table = 'app_event';
        $record['status'] = $_POST['status'];
        $record['edit_admin'] = 1;
        $record['name'] = $_POST['user_name'];
        $record['email'] = $_POST['email'];
        $record['description'] = $_POST['description'];
        $db->autoExecute($table, $record, 'UPDATE', 'id = '. $_POST['id']);
        $reponse['task_change'] = "ok";
    }
}

function LogOut(){
    session_destroy();
    global $reponse;
    $reponse['action'] = "logout";
}

echo json_encode($reponse);