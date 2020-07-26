<div class="modal-dialog modal-login">
    <div class="modal-content">
        <form action="" method="post" name="FormEditTask">
            <div class="modal-header">
                <h4 class="modal-title">Редактировать задачу ID = {$id}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Статус:</label>
                    <select class="form-control form-control-sm mb-2" style="width:auto;display: inline;" name="status">
                        {if {$task[0].status} == 0}
                            <option value="1" style="color: #1e7e34;font-weight: bold">Выполнено</option>
                            <option value="0" selected style="color: #005cbf;font-weight: bold">В процессе</option>
                        {else}
                            <option value="1" selected style="color: #1e7e34;font-weight: bold">Выполнено</option>
                            <option value="0" style="color: #005cbf;font-weight: bold">В процессе</option>
                        {/if}
                    </select>
                </div>
                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" class="form-control" name="user_name" required="required" value="{$task[0].name}">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email" value="{$task[0].email}" required="required">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Описание:</label>
                    <textarea class="form-control" id="message-text" name="description" >{$task[0].description}</textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-success" onclick="SaveEditTask({$id})">Сохранить</button>
                <button type="button" class="btn btn-secondary" onclick="CancelEditTask()">Отменить</button>
            </div>
        </form>
    </div>
</div>