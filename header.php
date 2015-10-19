<html>

    <head>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" href="<?=bloginfo('template_url') ?>/arquivos/_css/normalize.css">
        <link rel="stylesheet" href="<?=bloginfo('template_url') ?>/arquivos/_css/dist/gallery.prefixed.css">
        <link rel="stylesheet" href="<?=bloginfo('template_url') ?>/arquivos/_css/dist/gallery.theme.css">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>

    </head>


    <body>





<script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>



        <!-- Parte que engloba todo o conteúdo do site -->
        <div id="interface">

            <!-- Parte que engloba todo o conteúdo do topo da página (menu, etc)-->
            <header id="cabecalho">

                <div id ="topo"> 
                    <!-- Menu da Página-->
                    <nav id="menu">
                        <ul>         
                            <li><a href="<?php echo get_option('home'); ?>">Inicio</a></li>
                         


                         <!--   <?php wp_list_categories('title_li='); ?>
                            <?php wp_list_pages('title_li='); ?> -->

                           <li><a href="http://127.0.0.1/wordpress/noticias/">Notícias</a></li>
                            <li><a href="http://127.0.0.1/wordpress/programacao/">Programação</a>
                                <ul>
                                    <li id="adao"><a href="#">Adão Tonight Show</a></li>
                                    <li id="revista"><a href="#">Revista Gabadi</a></li>
                                </ul>
                            </li>
                            <li><a href="http://127.0.0.1/wordpress/equipe/">Equipe</a></li>
                            <li><a href="http://127.0.0.1/wordpress/videos/">Vídeos</a></li>
                            <li><a href="http://127.0.0.1/wordpress/fotos/">Fotos</a></li>
                            <li><a href="http://127.0.0.1/wordpress/recados/">Recados</a></li>
                            <li><a href="http://127.0.0.1/wordpress/anuncie/">Anuncie</a></li>
                            <li><a href="http://127.0.0.1/wordpress/contato/">Contato</a></li> 
                        </ul>
                    </nav>   
                </div>


                <!-- Barra branca no cabeçalho com logo da Gabadi, link do áudio da rádio, e link do Facebook--> 
                <div id="grupo2">

                    <!-- logo da GABADI-->
                    <a href="<?php echo get_option('home'); ?>"><img id="logo" alt="" src="<?=bloginfo('template_url') ?>/arquivos/_imagens/logo1.jpg"/></a>     


                    <h4 id="musica">NO AR: </h4>

                    <!--                <center><iframe src="http://www.radios.com.br/aovivo/Gabadi-Online/27951" width="100%" marginwidth="0" height="39" marginheight="0" scrolling="No" frameborder="0"></iframe></center>-->

                    <audio autoplay="autoplay" controls="controls"><source src="http://paineldj5.com.br:8076/stream?type=.mp3" type="audio/mp3">Seu navegador não suporta este player.</audio>

                    <h4 id="siga">Siga-nos: </h4>
                    <a href="https://pt-br.facebook.com/gabadioficial" target="_blank"><img id="icone" alt="" src="<?=bloginfo('template_url') ?>/arquivos/_imagens/ico_facebook.png"/></a>
                </div>

            </header>