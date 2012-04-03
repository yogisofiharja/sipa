<style>
    .countnotif {
        font-weight: bold;
        color: #ff0000;
    }
</style>
<?php if (!$this->ion_auth->logged_in()) { ?>
    <!--Belum Login-->
    <header style="z-index: 2;position: fixed;">
        <div class="container_8 clearfix">
            <h1 class="grid_1" style="font-size:60px;">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo base_url() . 'asset/images/logo.png' ?>" style="width: 146px; margin-bottom: 4px;"/>
                </a>
            </h1>
            <nav class="grid_7" style="margin-bottom: 2px;">
                <ul class="clearfix" style="height: 40px;">
                    <form class="fr" action="<?php echo site_url("user_auth/login"); ?>" method="POST">
                        <input class="" type="text" placeholder="Email" name="email"/>
                        <input class="" type="password" placeholder="Password" name="password"/>
                        <input type="submit" class="button-blue" value="Sign In" style="border-top-width:0px;
                               border-right-width:0px;
                               border-bottom-width:0px;
                               border-left-width:0px;
                               height:24px;
                               margin:9px 0px 0px 0px;
                               -webkit-border-radius:4px;
                               -moz-border-radius:4px;
                               border-radius:4px;"/>
                    </form>
                </ul>
            </nav>
        </div>
    </header>
<?php } else { ?>
    <!--Sudah Login-->
    <header style="position: fixed;">
        <div class="container_8 clearfix">
            <nav class="grid_8 topmenu">
                <ul class="clearfix">
                    <li <?php echo ($page == 'dashboard') ? 'style="-webkit-box-shadow: inset 0 5px 10px rgba(0,0,0,.5);-moz-box-shadow: inset 0 5px 10px rgba(0,0,0,.5);box-shadow: inset 0 5px 10px rgba(0,0,0,.5);background-color: #222;padding:0px 0px 0px 10px;"' : '' ?>>
                        <img src="<?php echo base_url() . 'asset/images/favicon.png' ?>" style="position: absolute;height: 25px; margin-top: 6px;"/>
                        <a href="<?php echo site_url(); ?>" style="margin-left: 25px;font-weight: bold;">Home</a>
                    </li>
                    <li <?php echo ($page == 'docs') ? 'style="-webkit-box-shadow: inset 0 5px 10px rgba(0,0,0,.5);-moz-box-shadow: inset 0 5px 10px rgba(0,0,0,.5);box-shadow: inset 0 5px 10px rgba(0,0,0,.5);background-color: #222;padding:0px 0px 0px 10px;""' : 'style="margin-left:10px;"' ?>>
                        <img src="<?php echo base_url() . 'asset/streamlined/images/document.png' ?>" style="position: absolute;height: 25px; margin-top: 6px;"/>
                        <a href="<?php echo site_url('book'); ?>" style="margin-left: 20px;font-weight: bold;">Library</a>
                    </li>
                    <?php $user = $this->ion_auth->get_user(); ?>
                    <li <?php echo ($page == 'user' | $page == 'blog') ? 'style="-webkit-box-shadow: inset 0 5px 10px rgba(0,0,0,.5);-moz-box-shadow: inset 0 5px 10px rgba(0,0,0,.5);box-shadow: inset 0 5px 10px rgba(0,0,0,.5);background-color: #222;padding:0px 0px 0px 10px;"' : 'style="margin-left:10px;"' ?>>
                        <img src="<?php echo base_url() . 'asset/streamlined/images/user.png' ?>" style="position: absolute;height: 25px; margin-top: 6px;"/>
                        <a href="<?php echo site_url('user/' . $user->id); ?>" style="margin-left: 20px;font-weight: bold;">Profile</a>
                    </li>
                    <li class="fr">
                        <a href="javascript:void(0)" style="font-weight: bold;">
                            <?php
                            $user = $this->ion_auth->get_user();
                            echo $user->name;
                            ?>
                            <span class="arrow-down"></span>
                        </a>
                        <ul>
                            <?php if (!$this->ion_auth->is_admin()) { ?>
                                <li><a href="<?php echo site_url("user_auth/logout"); ?>" style="font-weight: bold;">Sign out</a></li>
                            <?php } else { ?>
                                <li><a href="javascript:void(0)">Account</a></li>
                                <li><a href="<?php echo site_url("user_auth/logout"); ?>" style="font-weight: bold;">Sign out</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
<?php } ?>
