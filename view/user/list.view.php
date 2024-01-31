<h1>List All Users</h1>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>view</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?=$user['id']?></td>
        <td><?=$user['name']?></td>
        <td><?=$user['email']?></td>
        <td><a href="./user/view/<?=$user['id']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./user/edit/<?=$user['id']?>" class="btn btn-info">edit</a></td>
        <td><a href="./user/delete/<?=$user['id']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./user/add" class="btn btn-primary">Add New User</a>

