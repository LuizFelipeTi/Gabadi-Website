<?php 

/*
    
    Template Name: Inicio

*/


?>

<?php get_header(); ?>


			<!-- Tag responsável pelos slides-->
            <header id="slides">
                <!--            [PARTE QUE VAI PASSAR OS SLIDES]-->
                <div class="gallery autoplay items-3">

                    <div id="item-1" class="control-operator"></div>
                    <div id="item-2" class="control-operator"></div>
                    <div id="item-3" class="control-operator"></div>

                    <figure class="item">
                        <img class="imagem" src="<?=bloginfo('template_url') ?>/arquivos/_imagens/fe.jpg" alt="rei"/>
                    </figure>

                    <figure class="item">
                        <img class="imagem" src="<?=bloginfo('template_url') ?>/arquivos/_imagens/temaGabadi2.jpg" alt="pc"/>
                    </figure>

                    <figure class="item">
                        <img class="imagem"src="<?=bloginfo('template_url')?>/arquivos/_imagens/bandaLiv5.jpg" alt="winner"/>
                    </figure>

                    <div class="controls">
                        <a href="#item-1" class="control-button"></a>
                        <a href="#item-2" class="control-button"></a>
                        <a href="#item-3" class="control-button"></a>
                    </div>
                </div>
            </header>


             <!-- mostra conteúdo da página após cabeçalhos e slides-->
            <section id = "conteudo">

                <div id="divisao1"> 
                <!-- Espaço para prévia do artigo sobre a Gabadi(linkar para a página quem somos )-->
                <article id="sobre">

                    <!--<h1>SOBRE A <div id="gabadi">GABADI</div>

                    </h1>

                    <p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.</p>
-->
<?php $loop = new WP_Query( array( 'category_name' => 'sobre', ) ); ?>

                 <?php if($loop->have_posts()) :  $loop->the_post(); ?>

               <div id="titulosobre">
                <div class="tsobre"><h1 class="post-title"><a href = "http://127.0.0.1/wordpress/?p=63"> SOBRE A
                    <div id="gabadi">GABADI</div>  
                </h1></a></div>
                </div>

               <p> <?php the_content(); ?></p>

                <?php else: ?>

                <?php endif; ?>                

                                        
                    
                </article>


                <!-- Espaço para prévia das fotos (linka para a página de fotos)-->
                <article id="fotos">

                    <h1 class="post-title"><a href="http://127.0.0.1/wordpress/fotos/">FOTOS</h1>

                    <img class="imgprincipal" src="<?=bloginfo('template_url') ?>/arquivos/_imagens/montagem.jpg" alt="" /></a>


                </article>

            </div>

                <!-- Segunda  parte do conteúdo da página-->    
                <div class="divisao">

                    <article id="colunas">

                        <?php $loop = new WP_Query( array( 'category_name' => 'colunas',  ) ); ?>

                 <?php if($loop->have_posts()) :  $loop->the_post(); ?>

                <h1 class="post-title"><a href = "<?php the_permalink(); ?>"> <?php  the_title(); ?>  </h1></a>

               <p>  <div class= "thumbnail"><?php the_post_thumbnail(array(195,195));?></div> <?php the_content(); ?></p>

                <?php else: ?>

                <?php endif; ?>                


                    </article>

                    <!-- Espaço para a prévia dos vídeos (linka para a página de videos)-->   
                    <article id="videos">

                        <h1 class="post-title"><a href="http://127.0.0.1/wordpress/videos/">VÍDEOS</a></h1>
                        
                        <img id="tv"  src= "<?=bloginfo('template_url')?>/arquivos/_imagens/tv-antiga1.jpg"/>

                        <div class="video">
                        
                        <iframe class="video" width="410" height="278" src="https://www.youtube.com/embed/G6rZZ4ueq-Y" frameborder="0" allowfullscreen></iframe>
                        <!--            <p> Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.</p>-->

                        </div>
                    </article>

                </div>

            <div class="divisao">

                    <!-- Espaço para a prévia dos recados -->
                    <article id="recados">

                        <h1 id="titulo">RECADOS</h1>


                        <p>Consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem.</p>
                        <p class="autor">Nilma Nayara, Bocaiuva-MG</p>
                        <p> Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença.</p>
                        <p class="autor">Renata Cordeiro, Rio de Janeiro-RJ</p>
                        <p> A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.</p>
                        <p class="autor">Ana Daiane, Dimantina-MG</p>

                    </article>
                    
                    <!-- Espaço para a prévia dos vídeos (linka para a página de videos)-->   
                    <article id="videos2">

<!--                        <h1><a href="videos.html">VÍDEOS</a></h1>

                        <img id="tv"  src= "arquivos/_imagens/tv-antiga1.jpg"/>

                        <iframe class="video" width="410" height="278" src="https://www.youtube.com/embed/G6rZZ4ueq-Y" frameborder="0" allowfullscreen></iframe>-->
                        <!--            <p> Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.</p>-->

                    </article>

                </div>


		<!--<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

		<h2><?php the_title(); ?> </h2>

		<p><?php the_content(); ?> <br/></p>

		<hr>

		<?php endwhile; else: ?>

		<?php endif; ?>  -->

	</section>	
	

<?php get_footer(); ?>