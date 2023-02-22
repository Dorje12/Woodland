
<div class="main_content sub_wrapper">
    <div class="header">
        <h1>Add New User</h1>


    </div>
    <main><div class="add_user">


            <?php echo form_open(); ?>
            <?= csrf_field() ?>
             <?php
                        if (session()->getTempdata('error')) {
                                echo session()->getTempdata('error');
                        }
                        ?>

            <table>
                <tbody>
                    <tr>
                        <th>
                            <label for="userFirstName">First Name</label>
                        </th>
                        <td>
                            <input name="userFirstName" id="userFirstName" type="text"  value="<?= set_value('userFirstName'); ?>" />
                            <span><?= display_error($validation, 'userFirstName')?></span>
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label for="userLstName">Last Name</label> 
                        </th>
                        <td>
                            <input name="userLstName" id="userLstName" type="text" value="<?= set_value('userLstName'); ?>" />
                            <span><?= display_error($validation, 'userLstName')?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="userId">User Id</label>
                        </th>
                        <td>
                            <input name="userId" id="userId" type="text" placeholder="User ID" required value="<?= set_value('userId'); ?>" />
                            <span><?= display_error($validation, 'userId')?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="emailId">Email Id</label>
                        </th>
                        <td>
                            <input name="emailId" id="emailId" type="email" placeholder="Email" required value="<?= set_value('emailId'); ?>" />
                            <span><?= display_error($validation, 'emailId')?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="mobile">Contact Number</label>
                        </th>
                        <td>
                            <input type="tel" name="mobile" id="mobile" placeholder="Mobile No" required value="<?= set_value('mobile'); ?>" />
                            <span><?= display_error($validation, 'mobile')?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="birthDate">Birth Date</label>
                        </th>
                        <td>
                            <input name="birthDate" id="birthDate" type="date" placeholder="Birth Date" required value="<?= set_value('birthDate'); ?>" />
                            <span><?= display_error($validation, 'birthDate')?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="gender">Gender</label>
                        </th>
                        <td>
                            <select name="gender" id="gender" select="<?= set_value('gender'); ?>" >
                                <option disabled selected>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                            <span><?= display_error($validation, 'gender')?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="password">Password</label>
                        </th>
                        <td>
                            <input type="password" name="password" id="password" placeholder="password" required value="<?= set_value('password'); ?>" />
                            <span><?= display_error($validation, 'password')?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="profilePic">User Profile</label>
                        </th>
                        <td>
                            <input name="profilePic" id="profilePic" type="file" placeholder="User Profile" value="<?= set_value('profilePic'); ?>" />
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label for="role">User Role</label>
                        </th>
                        <td>
                            <select name="role" id="role" selected="<?= set_value('role'); ?>">
                                <option disabled selected>User Role</option>
                                <option>Admin</option>
                                <option>Module Leader</option>
                                <option>Course Leader</option>
                                <option>Student</option>
                            </select>
                            <span><?= display_error($validation, 'role')?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="user_status">User Status</label>
                        </th>
                        <td>
                            <input id="user_status" name='user_status' type="checkbox" value="active"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit"/>
                        </td>
                    </tr>

                </tbody>
            </table>

            <?php echo form_close(); ?>


        </div>


    </main>

</div>
</div>
</div>
</body>
</html>
