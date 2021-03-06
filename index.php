<!doctype html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Задачник</title>

    <script src="https://use.fontawesome.com/316c23e35d.js"></script>
    <script src="libs/jquery-3.4.1.min.js"></script>
    <script src="MainController/Query.js"></script>
    <script src="MainController/View.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
    <link rel="stylesheet" href="css/style_main.css">

</head>
<body onload="ListEvent();">

<div class="container" id="list-event"></div>

</body>
<div id="login" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <form action="" method="post" name="FormLoginConnect">
                <div class="modal-header">
                    <h4 class="modal-title">Войти</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Логин</label>
                        <input type="text" class="form-control" name="user_name" required="required">
                    </div>
                    <div class="form-group">
                        <div class="clearfix">
                            <label>Пароль</label>
                        </div>
                        <input type="password" class="form-control" name="password" required="required">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-info" onclick="LoginForm()">Войти</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="new_task" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <form action="" method="post" name="FormAddNewTask">
                <div class="modal-header">
                    <h4 class="modal-title">Новая задача</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" class="form-control" name="user_name" required="required">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Описание:</label>
                        <textarea class="form-control" id="message-text" name="description"></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-success" onclick="AddTask()">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="edit_task" class="modal fade"></div>

<!-- Modal -->
<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Удалить</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Вы уверены что хотите удалить задачу?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-danger" onclick="Delete()">Удалить</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalExit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Выйти</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Вы уверены что хотите выйти?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-info" onclick="LogOut()">Выйти</button>
            </div>
        </div>
    </div>
</div>

<script src="libs/jquery-3.4.1.min.js"></script>
<script src="libs/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>


</html>