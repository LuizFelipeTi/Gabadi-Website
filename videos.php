<?php 
/*
Template Name: videos
*/
?>


<?php get_header()?>

 <link rel="stylesheet" type="text/css" href="<?=bloginfo('template_directory')?>/arquivos/_css/videos.css" />


            <header id="fotos">


                <img class="image" src="<?=bloginfo('template_url')?>/arquivos/_imagens/fe.jpg" alt="rei"/>


            </header>



                


               <section id="secao">

       <!--         <?php if(have_posts()) : while (have_posts()) : the_post(); ?>


                <?php the_content(); ?> 

                <?php endwhile; else: ?>

                <?php endif; ?> -->




                <<h1>Galeria de Vídeos da GABADI</h1>
                <p>Assista aos nossos vídeos que mostram os eventos que ocorrem em nossa juventude!</p>
                
               


               <div id="container">


                    <div class="vgrupo">

                        <iframe class="video2" width="560" height="315" src="https://www.youtube.com/embed/bq7CHue1gMQ" frameborder="0" allowfullscreen></iframe>

                    </div>

                    <div class="vgrupo2">

                        <iframe class="video2" width="560" height="315" src="https://www.youtube.com/embed/IGmoGmm8CMM" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="vgrupo3">
                        <iframe class="video2" width="560" height="315" src="https://www.youtube.com/embed/mBB2PSIumaw" frameborder="0" allowfullscreen></iframe>
                    </div>


                    <div class="vgrupo4">
                        <iframe  class="video2" width="560" height="315" src="https://www.youtube.com/embed/-Eb6mHGSVyo" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="vgrupo5">
                        <iframe class="video2" width="560" height="315" src="https://www.youtube.com/embed/MTDFvCNdDBI" frameborder="0" allowfullscreen></iframe>
                    </div> 

                    <div class="vgrupo6">
                        <iframe class="video2" width="560" height="315" src="https://www.youtube.com/embed/H0DYL9NhAkM" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>    
            </section>

            

            
<?php get_footer(); ?>


