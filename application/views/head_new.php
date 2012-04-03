<head>
    <title>NPaperbox - Reading is Fun</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="NPaperbox is the first Indonesian Social Learning, it contain many content to learn everwhere anytime eith everybody"/>
    <meta name="title" content="NPaperbox - Reading is Fun"/>
    <link rel="shortcut icon" type="image/gif" href="<?php echo base_url(); ?>asset/images/favicon.png"/>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap-responsive.css"/>

    <!-- headjs -->
    <script src="<?php echo base_url() . 'asset/js/jquery.1.7.7.js' ?>"></script>
    <script src="<?php echo base_url() . 'asset/js/jquery.ba-bbq.js' ?>"></script>
    <script src="<?php echo base_url(); ?>asset/js/MY_js/head.min.js"></script>

    <!--grow textarea-->
    <script type="text/javascript">
        var UID = <?php echo $user_id; ?>;
        var SITE_URL = "<?php echo site_url(); ?>";
        head.js(
        "<?php echo base_url() . 'asset/js/jquery.1.7.7.js' ?>",
        "<?php echo base_url(); ?>asset/js/jquery.autogrow.js",
        function(){    
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