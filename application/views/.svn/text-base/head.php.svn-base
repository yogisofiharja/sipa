<head>
    <title>NPaperbox - Reading is Fun</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="NPaperbox is the first Indonesian Social Learning, it contain many content to learn everwhere anytime eith everybody"/>
    <meta name="title" content="NPaperbox - Reading is Fun"/>
    <link rel="shortcut icon" type="image/gif" href="<?php echo base_url(); ?>asset/images/favicon.png"/>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>asset/streamlined/css/reset.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>asset/streamlined/css/grid.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>asset/streamlined/css/style.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>asset/streamlined/css/forms.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>asset/streamlined/css/main.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>asset/streamlined/css/jcarousel.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>asset/streamlined/css/messages.css"/>
    <!-- jquerytools -->
    <script src="<?php echo base_url(); ?>asset/streamlined/js/jquery.tools.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/MY_js/head.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/streamlined/js/global.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/streamlined/js/jcarousellite_1.0.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/flowplayer/flowplayer-3.2.6.min.js"></script>
    <!--embeded url di wall-->
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.oembed.js"></script>
    <!--grow textarea-->
    <script src="<?php echo base_url(); ?>asset/js/jquery.autogrow.js" type="text/javascript"></script>
    <!--pagination-->
    <script type="text/javascript">
        $(function () {
            $('.ajaxin').click(function () {
                var urlx = $(this).attr('href');
                $('nav ul li').removeClass('active');
                $(this).parent('li').addClass('active');
                $('.main-content').html("<div style='text-align:center;'><img src='<?php echo base_url() . 'asset/images/loader.gif' ?>' /></div>");
                $.ajax({
                    type:"POST",
                    data:"ajaxin=true",
                    url:urlx,
                    cache:false,
                    success:function (data) {
                        $('.main-content').html(data);
                    }
                });
                return false;
            });
        });
    </script>
    <!--Comet-->
    <?php if (!$this->ion_auth->logged_in()) { ?>
<!--        <link type="text/css" href="http://localhost/cometchat/cometchatcss.php" rel="stylesheet" charset="utf-8">
        <script type="text/javascript" src="http://localhost/cometchat/cometchatjs.php" charset="utf-8"></script>-->
    <?php } else { ?>
<!--        <link type="text/css" href="http://localhost/cometchat/cometchatcss.php" rel="stylesheet" charset="utf-8">
        <script type="text/javascript" src="http://localhost/cometchat/cometchatjs.php" charset="utf-8"></script>-->
    <?php } ?>
</head>