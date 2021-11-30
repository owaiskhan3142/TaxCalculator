<?php
$result = 0;
$third = 0;
if (isset($_POST["income"])) {
    $slary = $_POST["income"];
    $slave = 12570;
    if ($slary > 100000) {
        if ($slary < 125140) {
            $newValue = $slary - 100000;
            $newValue = $newValue / 2;
            $slave = $slave - $newValue;
        } elseif ($slary >= 125140) {
            $slave = 0;
        }
    }
    $subtotal = $slary - $slave;
    if ($subtotal < 37700) {
        $result = 'Not Tax Applied';
    } elseif ($subtotal >= 37700 && $subtotal <= 150000) {
        $first = 37700;
        $second = $subtotal - $first;
        $totol1 = $first * 0.2;
        $totol2 = $second * 0.4;
        $result = $totol1 + $totol2;
    } elseif ($subtotal > 150000) {
        $first = 37700;
        $second = $subtotal - $first;
        if ($second <= 150000) {
            $second = $second * 0.4;
        } elseif ($second > 150000) {
            $third = $second - 150000;
            $second = 150000;
            $second = $second * 0.4;
            $third = $third * 0.45;
        }
        $first = $first * 0.2;
        $result = $first + $second + $third;
    }
}
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css" rel="stylesheet">
    <title>EM PayRoll</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="EM PayRoll &raquo; Feed"
        href="https://empayroll.co.uk/feed/" />
    <link rel="alternate" type="application/rss+xml" title="EM PayRoll &raquo; Comments Feed"
        href="https://empayroll.co.uk/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title="EM PayRoll &raquo; Home Comments Feed"
        href="https://empayroll.co.uk/home/feed/" />
    <script>
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/empayroll.co.uk\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.2" } };
        !function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode; p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0); e = i.toDataURL(); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (!p || !p.fillText) return !1; switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji))) }(window, document, window._wpemojiSettings);
    </script>
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        .container2 {
            display: block;
            padding: 25px;
            margin-top: 8%;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
            text-align: center;
        }
    </style>
    <link rel='stylesheet' id='dashicons-css' href='https://empayroll.co.uk/wp-includes/css/dashicons.min.css?ver=5.8.2'
        media='all' />
    <link rel='stylesheet' id='admin-bar-css' href='https://empayroll.co.uk/wp-includes/css/admin-bar.min.css?ver=5.8.2'
        media='all' />
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://empayroll.co.uk/wp-includes/css/dist/block-library/style.min.css?ver=5.8.2' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://empayroll.co.uk/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.2'
        media='all' />
    <link rel='stylesheet' id='custom-theme-style-css'
        href='https://empayroll.co.uk/wp-content/themes/empayroll/style.css?ver=1.0.0' media='all' />
    <link rel='stylesheet' id='newsletter-css'
        href='https://empayroll.co.uk/wp-content/plugins/newsletter/style.css?ver=7.3.2' media='all' />
    <link rel="https://api.w.org/" href="https://empayroll.co.uk/wp-json/" />
    <link rel="alternate" type="application/json" href="https://empayroll.co.uk/wp-json/wp/v2/pages/2" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://empayroll.co.uk/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://empayroll.co.uk/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.8.2" />
    <link rel="canonical" href="https://empayroll.co.uk/" />
    <link rel='shortlink' href='https://empayroll.co.uk/' />
    <link rel="alternate" type="application/json+oembed"
        href="https://empayroll.co.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fempayroll.co.uk%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://empayroll.co.uk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fempayroll.co.uk%2F&#038;format=xml" />
    <link rel="pingback" href="https://empayroll.co.uk/xmlrpc.php">
    <style media="print">
        #wpadminbar {
            display: none;
        }
    </style>
    <style media="screen">
        html {
            margin-top: 32px !important;
        }

        * html body {
            margin-top: 32px !important;
        }

        @media screen and (max-width: 782px) {
            html {
                margin-top: 46px !important;
            }

            * html body {
                margin-top: 46px !important;
            }
        }
    </style>
</head>

<body
    class="home page-template page-template-home page-template-home-php page page-id-2 logged-in admin-bar no-customize-support wp-custom-logo">
    <script>
        (function () {
            var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?' + cs + '(\\s+|$)');

            request = true;

            b[c] = b[c].replace(rcs, ' ');
            // The customizer requires postMessage and CORS (if the site is cross domain).
            b[c] += (window.postMessage && request ? ' ' : ' no-') + cs;
        }());
    </script>
    <div id="wpadminbar" class="nojq nojs">
        <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar">
            <ul id='wp-admin-bar-root-default' class="ab-top-menu">
                <li id='wp-admin-bar-wp-logo' class="menupop"><a class='ab-item' aria-haspopup="true"
                        href='https://empayroll.co.uk/wp-admin/about.php'><span class="ab-icon"
                            aria-hidden="true"></span><span class="screen-reader-text">About WordPress</span></a>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-wp-logo-default' class="ab-submenu">
                            <li id='wp-admin-bar-about'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/about.php'>About WordPress</a></li>
                        </ul>
                        <ul id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu">
                            <li id='wp-admin-bar-wporg'><a class='ab-item'
                                    href='https://wordpress.org/'>WordPress.org</a></li>
                            <li id='wp-admin-bar-documentation'><a class='ab-item'
                                    href='https://wordpress.org/support/'>Documentation</a></li>
                            <li id='wp-admin-bar-support-forums'><a class='ab-item'
                                    href='https://wordpress.org/support/forums/'>Support</a></li>
                            <li id='wp-admin-bar-feedback'><a class='ab-item'
                                    href='https://wordpress.org/support/forum/requests-and-feedback'>Feedback</a></li>
                        </ul>
                    </div>
                </li>
                <li id='wp-admin-bar-site-name' class="menupop"><a class='ab-item' aria-haspopup="true"
                        href='https://empayroll.co.uk/wp-admin/'>EM PayRoll</a>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-site-name-default' class="ab-submenu">
                            <li id='wp-admin-bar-dashboard'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/'>Dashboard</a></li>
                        </ul>
                        <ul id='wp-admin-bar-appearance' class="ab-submenu">
                            <li id='wp-admin-bar-themes'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/themes.php'>Themes</a></li>
                            <li id='wp-admin-bar-widgets'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/widgets.php'>Widgets</a></li>
                            <li id='wp-admin-bar-menus'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/nav-menus.php'>Menus</a></li>
                            <li id='wp-admin-bar-background' class="hide-if-customize"><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/themes.php?page=custom-background'>Background</a>
                            </li>
                            <li id='wp-admin-bar-header' class="hide-if-customize"><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/themes.php?page=custom-header'>Header</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item'
                        href='https://empayroll.co.uk/wp-admin/customize.php?url=https%3A%2F%2Fempayroll.co.uk%2F'>Customize</a>
                </li>
                <li id='wp-admin-bar-updates'><a class='ab-item'
                        href='https://empayroll.co.uk/wp-admin/update-core.php'><span class="ab-icon"
                            aria-hidden="true"></span><span class="ab-label" aria-hidden="true">2</span><span
                            class="screen-reader-text updates-available-text">2 updates available</span></a></li>
                <li id='wp-admin-bar-comments'><a class='ab-item'
                        href='https://empayroll.co.uk/wp-admin/edit-comments.php'><span class="ab-icon"
                            aria-hidden="true"></span><span class="ab-label awaiting-mod pending-count count-0"
                            aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0
                            Comments in moderation</span></a></li>
                <li id='wp-admin-bar-new-content' class="menupop"><a class='ab-item' aria-haspopup="true"
                        href='https://empayroll.co.uk/wp-admin/post-new.php'><span class="ab-icon"
                            aria-hidden="true"></span><span class="ab-label">New</span></a>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-new-content-default' class="ab-submenu">
                            <li id='wp-admin-bar-new-post'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/post-new.php'>Post</a></li>
                            <li id='wp-admin-bar-new-media'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/media-new.php'>Media</a></li>
                            <li id='wp-admin-bar-new-page'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/post-new.php?post_type=page'>Page</a></li>
                            <li id='wp-admin-bar-new-testimonial'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/post-new.php?post_type=testimonial'>Testimonial</a>
                            </li>
                            <li id='wp-admin-bar-new-team'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/post-new.php?post_type=team'>Team</a></li>
                            <li id='wp-admin-bar-new-faq'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/post-new.php?post_type=faq'>Faqs</a></li>
                            <li id='wp-admin-bar-new-user'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/user-new.php'>User</a></li>
                        </ul>
                    </div>
                </li>
                <li id='wp-admin-bar-edit'><a class='ab-item'
                        href='https://empayroll.co.uk/wp-admin/post.php?post=2&#038;action=edit'>Edit Page</a></li>
            </ul>
            <ul id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu">
                <li id='wp-admin-bar-search' class="admin-bar-search">
                    <div class="ab-item ab-empty-item" tabindex="-1">
                        <form action="https://empayroll.co.uk/" method="get" id="adminbarsearch"><input
                                class="adminbar-input" name="s" id="adminbar-search" type="text" value=""
                                maxlength="150" /><label for="adminbar-search"
                                class="screen-reader-text">Search</label><input type="submit" class="adminbar-button"
                                value="Search" /></form>
                    </div>
                </li>
                <li id='wp-admin-bar-my-account' class="menupop with-avatar"><a class='ab-item' aria-haspopup="true"
                        href='https://empayroll.co.uk/wp-admin/profile.php'>Howdy, <span
                            class="display-name">admin</span><img alt=''
                            src='https://secure.gravatar.com/avatar/e09bbb23ecb635cd3c3bac377d99d515?s=26&#038;d=mm&#038;r=g'
                            srcset='https://secure.gravatar.com/avatar/e09bbb23ecb635cd3c3bac377d99d515?s=52&#038;d=mm&#038;r=g 2x'
                            class='avatar avatar-26 photo' height='26' width='26' loading='lazy' /></a>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-user-actions' class="ab-submenu">
                            <li id='wp-admin-bar-user-info'><a class='ab-item' tabindex="-1"
                                    href='https://empayroll.co.uk/wp-admin/profile.php'><img alt=''
                                        src='https://secure.gravatar.com/avatar/e09bbb23ecb635cd3c3bac377d99d515?s=64&#038;d=mm&#038;r=g'
                                        srcset='https://secure.gravatar.com/avatar/e09bbb23ecb635cd3c3bac377d99d515?s=128&#038;d=mm&#038;r=g 2x'
                                        class='avatar avatar-64 photo' height='64' width='64' loading='lazy' /><span
                                        class='display-name'>admin</span></a></li>
                            <li id='wp-admin-bar-edit-profile'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-admin/profile.php'>Edit Profile</a></li>
                            <li id='wp-admin-bar-logout'><a class='ab-item'
                                    href='https://empayroll.co.uk/wp-login.php?action=logout&#038;_wpnonce=d62f57d9a0'>Log
                                    Out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <a class="screen-reader-shortcut"
            href="https://empayroll.co.uk/wp-login.php?action=logout&#038;_wpnonce=d62f57d9a0">Log Out</a>
    </div>

    <div id="page" class="site">
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-2">
                        <div class="logo">
                            <a href="https://empayroll.co.uk"><img width="259" height="177"
                                    src="https://empayroll.co.uk/wp-content/uploads/2021/10/logo_img.png"
                                    class="attachment-344x344 size-344x344" alt="" loading="lazy" /></a>
                        </div>
                    </div>
                    <div class="col-6 col-md-10">
                        <div class="mobile_btn" onclick="openNav()"><img
                                src="https://img.icons8.com/material-outlined/24/000000/menu--v3.png" /></div>
                        <div class="main_menu" id="mySidenav">
                            <span onclick="closeNav()" class="closed">&times;</span>
                            <div class="menu-menu-1-container">
                                <ul id="primary-menu" class="menu">
                                    <li id="menu-item-9"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-9">
                                        <a href="https://empayroll.co.uk/" aria-current="page">Home</a></li>
                                    <li id="menu-item-123"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                                        <a href="https://empayroll.co.uk/services/">Services</a></li>
                                    <li id="menu-item-159"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-159">
                                        <a href="https://empayroll.co.uk/who-we-are/">Who We Are</a></li>
                                    <li id="menu-item-168"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-168">
                                        <a href="https://empayroll.co.uk/blogs/">Blogs</a></li>
                                    <li id="menu-item-171"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171">
                                        <a href="https://empayroll.co.uk/contact/">Get A Quote</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner"
            style="background-image: url('https://empayroll.co.uk/wp-content/uploads/2021/10/banenr_img.png');">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-auto mb-auto">
                        <h1> Payroll Services <br> Like Never Before</h1>
                        <p> We are about empowering and informing our clients, <br>supporting their business growth, and
                            enjoying<br> the journey with them.</p>
                        <div class="btn_banenr">
                            <a href=" https://empayroll.co.uk/contact/">Get a quote</a>
                            <a href=" https://empayroll.co.uk/national-income-tax-calculator-uk/">NI calculator</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-auto">
                        <div class="from_banenr">
                            <h3>Speak to our experts</h3>
                            <p>Fill in this short form and our team will send you a no-obligation quote within two
                                hours.</p>
                            <div role="form" class="wpcf7" id="wpcf7-f25-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="/#wpcf7-f25-o1" method="post" class="wpcf7-form init"
                                    novalidate="novalidate" data-status="init">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="25" />
                                        <input type="hidden" name="_wpcf7_version" value="5.5.2" />
                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f25-o1" />
                                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                    </div>
                                    <div class="name_icon">
                                        <span class="wpcf7-form-control-wrap namee"><input type="text" name="namee"
                                                value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false" placeholder="Name" /></span>
                                    </div>
                                    <div class="email_icon">
                                        <span class="wpcf7-form-control-wrap email"><input type="email" name="email"
                                                value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required="true" aria-invalid="false" placeholder="Email" /></span>
                                    </div>
                                    <div class="number_icon">
                                        <span class="wpcf7-form-control-wrap tel"><input type="tel" name="tel" value=""
                                                size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Phone number" /></span>
                                    </div>
                                    <div class="employees_icon">
                                        <span class="wpcf7-form-control-wrap employees"><input type="text"
                                                name="employees" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Number of employees" /></span>
                                    </div>
                                    <div class="submit_btn">
                                        <input type="submit" value="Send"
                                            class="wpcf7-form-control has-spinner wpcf7-submit" />
                                    </div>
                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container2" style="font-family: Poppins">
                <h1 style="font-size:60px; text-align: center; font-family: 'Poppins', sans-serif; margin-top: 5%;">Tax Calculator</h1>
                <form action="" method="post">
                    <label for="myText" style="font-size: 14px; font-family: Poppins; color: #7E828C;">Insert your amount £</label><br>
                    <input type="text" id="myText" name="income" placeholder="£">
                    <button style="background-color: #AB2316; color: white; border: 1px solid #AB2316;"">Calculate</button>
                </form>
                <?php
                if (isset($_POST["income"])) {
                    echo "<div class='result_heading'>Your Results are as Follows:</div>";
                }
                ?>
                <div class='annul_tx'><?php echo "Your total payable annual tax is = " . $result; ?></div>
                <div class='results'>
                    <?php
                    if (isset($_POST["income"])) {
                        echo "Your Total earnings = " . $slary;
                        if ($subtotal > 37700) {
                            echo "<div>Your Total earnings after tax deduction = </div>" . ($slary - $result);
                        }
                    }
                    ?>
                </div>
            </div>
        
            <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        </section>
    <script src='https://empayroll.co.uk/wp-includes/js/hoverintent-js.min.js?ver=2.2.1'
        id='hoverintent-js-js'></script>
    <script src='https://empayroll.co.uk/wp-includes/js/admin-bar.min.js?ver=5.8.2' id='admin-bar-js'></script>
    <script src='https://empayroll.co.uk/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7'
        id='regenerator-runtime-js'></script>
    <script src='https://empayroll.co.uk/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
        id='wp-polyfill-js'></script>
    <script id='contact-form-7-js-extra'>
        var wpcf7 = { "api": { "root": "https:\/\/empayroll.co.uk\/wp-json\/", "namespace": "contact-form-7\/v1" } };
    </script>
    <script src='https://empayroll.co.uk/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.2'
        id='contact-form-7-js'></script>
    <script src='https://empayroll.co.uk/wp-includes/js/wp-embed.min.js?ver=5.8.2' id='wp-embed-js'></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.testimonial_slider').slick({
                slidesToShow: 1,
                dots: false,
                infinite: true,
                slidesToScroll: 1,
                lazyLoad: 'ondemand',
                autoplay: true,
                autoplaySpeed: 6000,

            });
        });


        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
            document.body.classList.add('active');
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.body.classList.remove('active');
        }
    </script>
</body>

</html>
