<div class="main_content sub_wrapper">
    <div class="header">
        <h1>Add Module</h1>
    </div>
    <main><div class="add_user">


            <?php echo form_open(); ?>
            <?= csrf_field(); ?>
             <?php if (session()->getTempdata('error')) {
                echo session()->getTempdata('error');
                }?>
            <table>
                <tbody>

                    <tr>
                        <th>
                            <label for="moduleName">Module Name</label>
                            
                        </th>
                        <td>
                            <input name="moduleName" id="moduleName" type="text" value="<?=$module->module_name; ?>"/>
                           <span><?= display_error($validation, 'moduleName')?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="moduleId">Module ID</label>
                        </th>
                        <td>
                            <input name="moduleId" id="moduleId" type="text" value="<?=$module->module_ID; ?>"/>
                            <span><?= display_error($validation, 'moduleId')?></span>
                            
                           
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="Course">Course</label>
                        </th>
                        <td>
                            <input name="Course" id="Course" type="text" value="<?=$module->course; ?>"/>
                            <span><?= display_error($validation, 'Course')?></span>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="moduleLeader">Module Leader</label>

                        </th>
                        <td>
                            <input name="moduleLeader" id="moduleLeader" type="text" value="<?=$module->module_leader; ?>" />
                            <span><?= display_error($validation, 'moduleId')?></span>                           
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="credit">Credit</label>
                        </th>
                        <td>
                            <input name="credit" id="credit" type="text" value="<?=$module->credit_score; ?>"/>
                            <span><?= display_error($validation, 'credit')?></span>
                        </td>
                    </tr>
                    <th>
                            <label for="moduleStatus">Status</label>
                        </th>
                        <td>
                            <input id="moduleStatus" name='moduleStatus' type="checkbox" value="<?=$module->module_status; ?>"/>
                            <span><?= display_error($validation, 'moduleId')?></span>
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