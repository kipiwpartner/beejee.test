$(document).on("click", "#show_modal_add_new_task", {query:'show_modal_add_new_task'}, SwitcherQuery );


function SwitcherQuery(e) {
    switch (e.data.query) {
        case "show_modal_add_new_task":
            $('#new_task').modal('show')
            break;
    }
}


var Vue=function(reponse){

    switch(reponse.action){
        case "list_event" :
            ListEvent_View(reponse);
            break;
        case "add_task" :
            AddTask_View();
            break;
        case "login" :
            Login_View(reponse);
            break;
        case "edit_task" :
            EditTask_View(reponse);
            break;
        case "save_task" :
            SaveEditTask_View(reponse);
            break;
        case "logout" :
            LogOut_View();
            break;
        case "delete" :
            Delete_View();
            break;

    }
};

function ListEvent_View(reponse) {
    $("#list-event").html(reponse.list_event);
}

function LoginOn(){
    $('#login').modal('show')
}

function AddNewTask(){

}

function ShowTaskEdit(id) {
    $('#edit_task').modal('show')
}

function AddTask_View(){
    alert("Задача была успешно добавлена!");
    location.reload();
}

function Login_View(reponse){
    if (reponse.login == 'ok'){
        location.reload();
    } else {
        alert('Неверный логин или пароль')
    }
}

function EditTask_View(reponse){
    $("#edit_task").html(reponse.modal_edit_task);
    $('#edit_task').modal('show')
}

function CancelEditTask(){
    $('#edit_task').modal('hide')
}

function SaveEditTask_View(reponse){
    if (reponse.task_change == "ok"){
        location.reload();
    }
}

function LogOut_View(){
    location.reload();
}

function Delete_View(){
    location.reload();
}

function ShowDelete_View(id){
    $('#ModalDelete').modal('show');
    localStorage.setItem("id", id);
}

function ShowExit_View(){
    $('#ModalExit').modal('show');
}
