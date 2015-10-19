<?php 
/*
Template Name: Fotos
*/
?>


<?php get_header()?>
<link rel="stylesheet" type="text/css" href="<?=bloginfo('template_url')?>/arquivos/_css/fotos.css" />


            <header id="fotos">


                <img class="image" src="<?=bloginfo('template_url')?>/arquivos/_imagens/fe.jpg" alt="rei"/>


            </header>

            <section id="secao">
                
                <h1>Galeria de Fotos da GABADI</h1>
                <p>Veja a nossa galeria de fotos com várias imagens que mostram alguns dos principais acontecimentos da Gabadi. Basta passar o mouse sobre uma das fotos para ver o nome de cada álbum, e clicar para ver o álbum completo.</p>
                
                <ul id="album-fotos">
                    <a href="#"><li id="foto01"><span> Banda Live </span></li></a>
                    <a href="#"><li id="foto02"><span>Adão Tonight Show </span></li></a>
                    <a href="#"><li id="foto03"><span> Sacode Consciência </span></li></a>
                    <a href="#"><li id="foto04"><span>Culto do Amigo</span></li></a>
                   <a href="#"><li id="foto05"><span> Acústico </span></li></a>
                    <a href="#"><li id="foto06"><span> Programação </span></li></a>
                </ul>
                
                
            </section>

            
<?php get_footer(); ?>


