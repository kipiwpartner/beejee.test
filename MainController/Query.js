var controller = 'MainController/Controller.php';
var admin_controller = 'MainController/AdminController.php';

function ListEvent(){
    var FormLst = new FormData();
    FormLst.append('action','list_event');

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormLst,
        dataType : 'json',
        async : false,
        cache : false,
        contentType : false,
        processData : false,
        success : function (reponse){
            Vue(reponse);
        },
        error: function (xhr, error) {
            console.log(error);
            console.log(xhr);
        }
    });
}

function AddTask(){
    var FormAddTask = new FormData(FormAddNewTask);
    FormAddTask.append('action','add_new_task');

    $.ajax({
        type : 'POST',
        url : controller,
        data : FormAddTask,
        dataType : 'json',
        async : false,
        cache : false,
        contentType : false,
        processData : false,
        success : function (reponse){
            Vue(reponse);
        },
        error: function (xhr, error) {
            console.log(error);
            console.log(xhr);
        }
    });
}

function LoginForm(){

    var FormLogin = new FormData(FormLoginConnect);
    FormLogin.append('action','login');

    $.ajax({
        type : 'POST',
        url : admin_controller,
        data : FormLogin,
        dataType : 'json',
        async : false,
        cache : false,
        contentType : false,
        processData : false,
        success : function (reponse){
            Vue(reponse);
        },
        error: function (xhr, error) {
            console.log(error);
            console.log(xhr);
        }
    });
}

function Change(id){

    var FormChange = new FormData();
    FormChange.append('action','change_task');
    FormChange.append('id',id);

    $.ajax({
        type : 'POST',
        url : admin_controller,
        data : FormChange,
        dataType : 'json',
        async : false,
        cache : false,
        contentType : false,
        processData : false,
        success : function (reponse){
            Vue(reponse);
        },
        error: function (xhr, error) {
            console.log(error);
            console.log(xhr);
        }
    });
}

function SaveEditTask(id){

    var FormEdit = new FormData(FormEditTask);
    FormEdit.append('action','save_edit_task');
    FormEdit.append('id',id);

    $.ajax({
        type : 'POST',
        url : admin_controller,
        data : FormEdit,
        dataType : 'json',
        async : false,
        cache : false,
        contentType : false,
        processData : false,
        success : function (reponse){
            Vue(reponse);
        },
        error: function (xhr, error) {
            console.log(error);
            console.log(xhr);
        }
    });
}

function LogOut(){

    var FormLogin = new FormData();
    FormLogin.append('action','logout');

    $.ajax({
        type : 'POST',
        url : admin_controller,
        data : FormLogin,
        dataType : 'json',
        async : false,
        cache : false,
        contentType : false,
        processData : false,
        success : function (reponse){
            Vue(reponse);
        },
        error: function (xhr, error) {
            console.log(error);
            console.log(xhr);
        }
    });
}
