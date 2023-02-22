<div class="heading">Contact Form</div>

<?php echo form_open(); ?>
<div class="form_container">

        <div class="form_wrapper">
                <?= csrf_field() ?>
                <div class="row">
                        <input name="firstName" placeholder="First Name" type="text" value="<?= set_value('firsName'); ?>"/>
                        <input name="password" placeholder="Password" type="password" value="<?= set_value('password'); ?>" />
                </div>
                <div class="row">
                        <input name="email" type="email" placeholder="Email" value="<?= set_value('email'); ?>"/>
                        <input name="phone" type="tel" placeholder="Phone" value="<?= set_value('phone'); ?>"/>
                </div>
                <input name="address" type="text" value="<?= set_value('address'); ?>"/>
                <textarea id="msg" name="msg" rows="5" cols="100" placeholder="Message"><?= set_value('msg'); ?></textarea>
                <input name="submit" type="submit" value="Log In"/>
                <span><?php if (isset($validation)): ?>
                                <?= $validation->listErrors(); ?>
                        <?php endif; ?>
                </span>
        </div>
</div>