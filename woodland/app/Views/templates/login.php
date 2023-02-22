<?php echo form_open(); ?>
<div class="form_container">
        <div class="form_logo">
                <img width="10px" src="<?= base_url('public/woodland_logo.png'); ?>" alt="Woodland logo"/>
        </div>

        <div class="form_wrapper">
                <?= csrf_field() ?>
                <input name="userID" placeholder="User ID" type="text" value="<?= set_value('userID'); ?>"/>
                <input name="password" placeholder="Password" type="password" value="<?= set_value('password'); ?>" />
                <input name="submit" type="submit" value="Log In"/>
                <span>
                        <?php
                        if (session()->getTempdata('error')) {
                                echo session()->getTempdata('error');
                        }
                        ?>

                        <?php if (isset($validation)): ?>
                                <?= $validation->listErrors(); ?>
                        <?php endif; ?>
                </span>
                <div class="form_footer">
                        <div>
                                <input name="remember" type="checkbox" id="remember"/>
                                <label for="remember">Remember me</label>
                        </div>

                        <a href="/sadf">Forgot Password ?</a>
                </div>
        </div>
</div>