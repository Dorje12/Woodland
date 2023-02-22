
<div class="main_content sub_wrapper">
        <div class="header">
                <h1>Users</h1>
                <?php
                        if (session()->getTempdata('error')) {
                                echo session()->getTempdata('error');
                        }
                        ?>
                <div class="dash-button">
                         <a href="<?= base_url('dashboard/users/add_user'); ?>">Add User</a>
                </div>

        </div>
        <main>
                <style>
table, th, td {
  border: 1px solid black;
}

th, td{
        padding:10px;
}
</style>
        <table>
                <tr>
                        <th>User name</th>
                        <th>UID</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Birth date</th>
                        <th>Gender</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                </tr>

                <?php  foreach($usersData as $userData):?>
                <tr>
                        <td><?= $userData->user_first_name." ".$userData->user_last_name; ?>
                        <td><?= $userData->userID?></td>
                        <td><?= $userData->user_mobile?></td>
                        <td><?= $userData->user_email?></td>
                        <td><?= $userData->user_birthdate?></td>
                        <td><?= $userData->user_gender?></td>
                        <td><?= $userData->role?></td>
                        <td><?= $userData->user_status?></td>
                        <td><ul>
                                <a href="<?= base_url('dashboard/users/edit_user/'.$userData->userID); ?>"><li><i class="fa-solid fa-pen-to-square"></i> edit</li></a>
                                <a href="<?= base_url('dashboard/users/delete_user/'.$userData->userID);?>"><li><i class="fa-solid fa-trash"></i> delete</li></a>
                        </ul></td>
                        
                </tr>
                        <?php endforeach; ?>
        </table>

        </main>
        <footer>

        </footer>
</div>
</div>
</div>
</body>
</html>
