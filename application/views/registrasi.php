<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('head'); ?>
    <body>
        <div id="wrapper">
            <?php $this->load->view('header'); ?>
            <section>
                <div class="container_8 clearfix">
                    <?php $this->load->view('sidebar'); ?>
                    <!-- Main Section -->
                    <section class="main-section grid_7">
                        <div class="main-content">
                            <header>
                                <h2>NPaperbox Account Registration</h2>
                            </header>
                            <section class="container_6 clearfix">
                                <div class="grid_6">
                                    <?php echo $message; ?>
                                    <form id="form" method="post" action="<?php echo site_url("user_auth/registrasi"); ?>" class="form grid_6" novalidate>
                                        <fieldset>
                                            <label>Fullname <em>*</em>
                                                <small>Show in your profile</small>
                                            </label>
                                            <input type="text" name="name" required="required"/>
                                            <label>Email Address <em>*</em>
                                                <small>Valid email address</small>
                                            </label>
                                            <input type="email" name="email" required="required[email]"/>
                                            <label>Password <em>*</em>
                                                <small>Your password</small>
                                            </label>
                                            <input type="password" name="password" maxlength="30" required="required"/>
                                            <label>Password Confirm <em>*</em>
                                                <small>Retype your password</small>
                                            </label>
                                            <input type="password" name="password_confirm" data-equals="password" maxlength="30"/>
                                            <label>I accept the terms <em>*</em></label>
                                            <input type="checkbox" required="required"/>
                                            <div class="action">
                                                <button class="button button-gray" type="submit"><span class="accept"></span>OK</button>
                                                <button class="button button-gray" type="reset">Reset</button>
                                            </div>
                                        </fieldset>
                                    </form>
                            </section>
                        </div>
                    </section>
                    <!-- Main Section End -->
                </div>
                <div id="push"></div>
            </section>
        </div>
        <?php $this->load->view('footer'); ?>
    </body>
</html>
