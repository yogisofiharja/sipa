<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shourcut icon" href="img/favicon.png">
    <title>NPaperbox.com</title>
    <link rel="stylesheet" type="text/css" href="css/960.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/stil.css">

</head>
<body>
<div class="hb">
<div class="header">
    <div class="container_12">
        <div class="grid_12">
            <div class="grid_2"><img src="img/logo.png" style="width: 116px; margin-top: 5px;"></div>
            <div class="grid_7" style="float: right;">
                <div id="right">
                    <form id="search" action="#" method="POST">
                        <fieldset>
                            <input id="username" placeholder="Username" name="username" type="text" class="text"/>
                            <input id="ypassword" placeholder="Password" name="password" type="password" class="text"/>
                            <input type="submit" value="Login" class="submits">
                        </fieldset>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>

<div class="container_12">

<div class="grid_12">
    <div id="right">
        <div class="menu">
            <div class="item">
                <a class="link icon_faq"></a>

                <div class="item_content">
                    <h2><a href="#">FAQ</a></h2>
                    <br/>

                    <p>NPaperbox | FAQ</p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_privacy"></a>

                <div class="item_content">
                    <h2><a href="#">Privacy</a></h2>
                    <br/>

                    <p>NPaperbox | Privacy</p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_terms"></a>

                <div class="item_content">
                    <h2><a href="#">Terms</a></h2>
                    <br/>

                    <p>NPaperbox | Terms</p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_help"></a>

                <div class="item_content">
                    <h2><a href="#">Help</a></h2>
                    <br/>

                    <p>NPaperbox | Help</p>
                </div>
            </div>
            <div class="item">
                <a class="link icon_about"></a>

                <div class="item_content">
                    <h2><a href="#">About Us</a></h2>
                    <br/>

                    <p>NPaperbox | About Us</p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
            $('.item').hover(
                function () {
                    var $this = $(this);
                    expand($this);
                },
                function () {
                    var $this = $(this);
                    collapse($this);
                }
            );
            function expand($elem) {
                var angle = 0;
                var t = setInterval(function () {
                    if (angle == 1440) {
                        clearInterval(t);
                        return;
                    }
                    angle += 40;
                    $('.link', $elem).stop().animate({rotate:'+=-40deg'}, 0);
                }, 10);
                $elem.stop().animate({width:'268px'}, 1000)
                    .find('.item_content').fadeIn(400, function () {
                        $(this).find('p').stop(true, true).fadeIn(600);
                    });
            }
            function collapse($elem) {
                var angle = 1440;
                var t = setInterval(function () {
                    if (angle == 0) {
                        clearInterval(t);
                        return;
                    }
                    angle -= 40;
                    $('.link', $elem).stop().animate({rotate:'+=40deg'}, 0);
                }, 10);
                $elem.stop().animate({width:'52px'}, 1000)
                    .find('.item_content').stop(true, true).fadeOut().find('p').stop(true, true).fadeOut();
            }
        </script>
    </div>
</div>
<div class="clear"></div>
<br><br>

<div class="grid_6">
    <div class="jargon"></div>
</div>
<div class="grid_6">
    <!--form register-->
    <div id="registration">
        <h2>NPaperbox Account Registration</h2>

        <p style="margin-left: 22px;">Already have an account, and Forgot it? Click <a href="javascript:void(0)">here</a></p>

        <form id="RegisterUserForm" action="#" method="post">
            <fieldset>
                <p>
                    <input id="name" name="#" type="text" class="text" value="" placeholder="Username"/>
                </p>

                <p>
                    <input id="email" name="#" type="tel" class="text" value="" placeholder="Email"/>
                </p>

                <p>
                    <input id="password" name="#" type="password" class="text" value="" placeholder="Password"/>
                </p>

                <p><input id="acceptTerms" name="#" type="checkbox"/>
                    <label for="acceptTerms">
                        I accept the <a href="">Terms</a>
                    </label>
                </p>
                <br>

                <p>
                    <input type="submit" class="submits" value="Register">
                    <button class="submits" type="reset">Reset</button>
                </p>
            </fieldset>

        </form>

    </div>
    <script type="text/javascript">

        $(document).ready(function () {
            /*
            * In-Field Label jQuery Plugin
            * http://fuelyourcoding.com/scripts/infield.html
            *
            * Copyright (c) 2009 Doug Neiner
            * Dual licensed under the MIT and GPL licenses.
            * Uses the same license as jQuery, see:
            * http://docs.jquery.com/License
            *
            * @version 0.1
            */
            (function ($) {
                $.InFieldLabels = function (label, field, options) {
                    var base = this;
                    base.$label = $(label);
                    base.$field = $(field);
                    base.$label.data("InFieldLabels", base);
                    base.showing = true;
                    base.init = function () {
                        base.options = $.extend({}, $.InFieldLabels.defaultOptions, options);
                        base.$label.css('position', 'absolute');
                        var fieldPosition = base.$field.position();
                        base.$label.css({ 'left':fieldPosition.left, 'top':fieldPosition.top }).addClass(base.options.labelClass);
                        if (base.$field.val() != "") {
                            base.$label.hide();
                            base.showing = false;
                        }
                        ;
                        base.$field.focus(
                            function () {
                                base.fadeOnFocus();
                            }).blur(
                            function () {
                                base.checkForEmpty(true);
                            }).bind('keydown.infieldlabel',
                            function (e) {
                                base.hideOnChange(e);
                            }).change(
                            function (e) {
                                base.checkForEmpty();
                            }).bind('onPropertyChange', function () {
                                base.checkForEmpty();
                            });
                    };
                    base.fadeOnFocus = function () {
                        if (base.showing) {
                            base.setOpacity(base.options.fadeOpacity);
                        }
                        ;
                    };
                    base.setOpacity = function (opacity) {
                        base.$label.stop().animate({ opacity:opacity }, base.options.fadeDuration);
                        base.showing = (opacity > 0.0);
                    };
                    base.checkForEmpty = function (blur) {
                        if (base.$field.val() == "") {
                            base.prepForShow();
                            base.setOpacity(blur ? 1.0 : base.options.fadeOpacity);
                        } else {
                            base.setOpacity(0.0);
                        }
                        ;
                    };
                    base.prepForShow = function (e) {
                        if (!base.showing) {
                            base.$label.css({ opacity:0.0 }).show();
                            base.$field.bind('keydown.infieldlabel', function (e) {
                                base.hideOnChange(e);
                            });
                        }
                        ;
                    };
                    base.hideOnChange = function (e) {
                        if ((e.keyCode == 16) || (e.keyCode == 9)) return;
                        if (base.showing) {
                            base.$label.hide();
                            base.showing = false;
                        }
                        ;
                        base.$field.unbind('keydown.infieldlabel');
                    };
                    base.init();
                };
                $.InFieldLabels.defaultOptions = { fadeOpacity:0.5, fadeDuration:300, labelClass:'infield' };
                $.fn.inFieldLabels = function (options) {
                    return this.each(function () {
                        var for_attr = $(this).attr('for');
                        if (!for_attr) return;
                        var $field = $("input#" + for_attr + "[type='text']," + "input#" + for_attr + "[type='password']," + "input#" + for_attr + "[type='tel']," + "input#" + for_attr + "[type='email']," + "textarea#" + for_attr);
                        if ($field.length == 0) return;
                        (new $.InFieldLabels(this, $field[0], options));
                    });
                };
            })(jQuery);


            $("#RegisterUserForm label").inFieldLabels();
        });

    </script>

</div>
<div class="clear"></div>
<br><br><br>

<div class="grid_4">
    <p class="judul_box">
        NPaperbox.org
        <br/>
        <em class="ket_box">The standard Lorem Ipsum passage.</em></p>

    <a href="#" title="Amazing Image Title"></a>

    <div id="capslide1" class="ic_container">
        <img src="img/gbr1.png" width="280" height="187"/>

        <div class="ic_caption">
            <h3 class="ic_category">About NPaperbox</h3>

            <p class="ic_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="gradbwh"></div>
    <p id="ic_text_2">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>


<div class="grid_4">
    <p class="judul_box">
        NPaperbox.org
        <br/>
        <em class="ket_box">The standard Lorem Ipsum passage.</em></p>

    <a href="#" title="Amazing Image Title"></a>

    <div id="capslide2" class="ic_container">
        <img src="img/gabr2.png" width="280" height="187"/>

        <div class="ic_caption">
            <h3 class="ic_category">About NPaperbox</h3>

            <p class="ic_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="gradbwh"></div>
    <p id="ic_text_2">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>


<div class="grid_4">
    <p class="judul_box">
        NPaperbox.org
        <br/>
        <em class="ket_box">The standard Lorem Ipsum passage.</em></p>

    <a href="#" title="Amazing Image Title"></a>

    <div id="capslide3" class="ic_container">
        <img src="img/gbr3.png" width="280" height="187"/>

        <div class="ic_caption">
            <h3 class="ic_category">About NPaperbox</h3>

            <p class="ic_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="gradbwh"></div>
    <p id="ic_text_2">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>
<script type="text/javascript" src="js/jquery.capSlide.js"></script>
<script type="text/javascript">
    $(function () {
        $("#capslide1").capslide({
            caption_color:'#469a2f',
            caption_bgcolor:'#FFF',
            overlay_bgcolor:'#469a2f',
            showcaption:false
        });
        $("#capslide2").capslide({
            caption_color:'#469a2f',
            caption_bgcolor:'#FFF',
            overlay_bgcolor:'#469a2f',
            showcaption:false
        });
        $("#capslide3").capslide({
            caption_color:'#469a2f',
            caption_bgcolor:'#FFF',
            overlay_bgcolor:'#469a2f',
            showcaption:false
        });

    });
</script>
<div class="clear"></div>
</div>
<!--footer-->
<div class="footer">
    2011 &copy NPaperbox
</div>

</div>
</body>
</html>
