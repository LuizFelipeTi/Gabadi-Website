<?php get_header(); ?>

<!--

<link rel="stylesheet" href="<?=bloginfo('template_url') ?>/arquivos/_css/single.css">


<section id="conteudo">

 <article>

                    <!--<h1>SOBRE A <div id="gabadi">GABADI</div>

                    </h1>

                    <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.</p>
-->
<!--
                 <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

               <div class="single-container"> 

                <h1> <?php  the_title(); ?>  </h1></a>

                Publicado por <?php the_author();?>em <?php the_time('d/m/Y');?> às <?php the_time('g:i a');?><hr />
                <?php the_content();?><br>

               </div>

                <?php endwhile; else: ?>

                <?php endif; ?>                

                </article>
</section>

-->


<?php get_footer(); ?>