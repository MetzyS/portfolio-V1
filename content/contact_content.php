<?php
include 'common/breadcrumb.php';
?>
<div class="contact-container">
    <div class="title-box">
        <h2><?= $c_title ?>
        </h2>
        <span class="projects-skills"><?= $c_subTitle ?></span>
    </div>
    <div class="form-container">
        <form method="POST" action="mail/send-mail.php" class="form-style">
            <label for="name"><?= $c_name ?></label>
            <div class="input-style"><input type=" text" name="name" id="name"><i class="contact-icon icon-name"></i></div>
            <label for="mail"><?= $c_mail ?></label>
            <div class="input-style"><input type="text" name="email" id="email"><i class="contact-icon icon-email"></i></div>
            <label for="subject"><?= $c_subject ?></label>
            <div class="input-style"><input type="text" name="subject" id="subject"><i class="contact-icon icon-pen"></i></div>
            <label for="message"><?= $c_message ?></label>
            <div class="input-style input-style-txtarea"><textarea name="message" id="message"></textarea></div>
            <button type="submit" id="submit-contact"><?= $c_submit ?></button>
        </form>
    </div>
</div>