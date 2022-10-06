<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- start adobe-font -->
    <script>
        (function(d) {
            var config = {
                    kitId: 'cru0ljq',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <!-- end adobe-font -->

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style/my-slick.css">
</head>