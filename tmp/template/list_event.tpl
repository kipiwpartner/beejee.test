<h1>Задачи:</h1>
<input type="button" value="Новая задача" class="btn btn-success" style="display: inline" onclick="AddNewTask()">

<div class="container-fluid" style="padding: 2%;">
    <div class="row" id="card-container"></div>
    <table id="myTable" class="table" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th scope="col">Статус</th>
            <th scope="col">Имя</th>
            <th scope="col">E-mail</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        {foreach $arr_list_event as $key}
            <tr>
                <th scope="row">{$key.id}</th>
                <td style="text-align: center">
                    {if $key.status == 1}
                        <span style="color: #1e7e34; font-weight: bold"">Выполнено</span>
                    {else}
                        <span style="color: #005cbf; font-weight: bold">В процессе</span>
                    {/if}
                    {if $key.edit_admin == 1}
                        <br>
                        <span style="color: #1d2124; font-weight: bold"">[отредактировано администратором]</span>
                    {/if}
                </td>
                <td style="text-align: center">{$key.name}</td>
                <td style="text-align: center">{$key.email}</td>
                <td style="text-align: center">
                    {if $user_login == 1}
                        <i class="fa fa-pencil fa-2x" aria-hidden="true" onclick="Change({$key.id})"></i>
                        <i class="fa fa-sign-out fa-2x" aria-hidden="true" onclick="LogOut()"></i>
                    {else}
                        <i class="fa fa-sign-in fa-2x" aria-hidden="true" onclick="LoginOn()"></i>
                    {/if}
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable( {
            "lengthMenu": [[3, -1], [3, 'Все']],
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.13/i18n/Russian.json",
            },
            "scrollX": true,
            fixedColumns:   {
                leftColumns: 1,
                rightColumns: 1
            }
        } );
    } );
</script>
