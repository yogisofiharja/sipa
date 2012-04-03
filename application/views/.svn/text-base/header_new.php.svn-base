<?php if (!$this->ion_auth->logged_in()) { ?>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="span5">
                    <a class="brand" href="<?php echo site_url(); ?>">
                        <img src="<?php echo base_url() . 'asset/images/logo.png' ?>" style="width: 146px; margin: -5px 0 -4px 77px;"/>
                    </a>
                </div>
                <div class="span6">
                    <form class="form-inline pull-right" action="<?php echo site_url('user_auth/login'); ?>" method="POST" style="margin:0;padding-top:7px">
                        <input type="text" class="span2" placeholder="Email" name="email">
                        <input type="password" class="span2" placeholder="Password" name="password">
                        <button type="submit" class="btn" style="margin:0;">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <?php $user = $this->ion_auth->get_user(); ?>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse span10 offset1">
                    <ul class="nav">
                        <li <?php echo ($page == 'dashboard') ? 'class="active"' : ''; ?>>
                            <img src="<?php echo base_url() . "asset/images/favicon.png"; ?>" style="position: absolute;height: 25px; margin-top: 6px; margin-left:10px;">
                            <a href="<?php echo site_url(); ?>" style="padding-left: 45px;">Home</a></li>
                        <li <?php echo ($page == 'docs') ? 'class="active"' : ''; ?>>
                            <img src="<?php echo base_url() . "asset/streamlined/images/document.png"; ?>" style="position: absolute;height: 25px; margin-top: 6px; margin-left:10px;">
                            <a href="<?php echo site_url('book'); ?>" style="padding-left: 45px;">Library</a></li>
                        <li <?php echo ($page == 'user' | $page == 'blog') ? 'class="active"' : ''; ?>>
                            <img src="<?php echo base_url() . "asset/streamlined/images/user.png"; ?>" style="position: absolute;height: 25px; margin-top: 6px; margin-left:10px;">
                            <a href="<?php echo site_url('user/' . $user->id); ?>" style="padding-left: 45px;">Profile</a></li>
                    </ul>
                    <ul class="nav pull-right">
                        <li id="fat-menu" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user->name; ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php if (!$this->ion_auth->is_admin()) { ?>
                                    <li><a href="<?php echo site_url("user_auth/logout"); ?>">Sign out</a></li>
                                <?php } else { ?>
                                    <li><a href="javascript:void(0)">Account</a></li>
                                    <li><a href="<?php echo site_url("user_auth/logout"); ?>">Sign out</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
<?php } ?>
