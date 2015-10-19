<?php get_header(); ?>



 <!-- Tag responsável pelos slides-->
            <header id="slides">
                <!--            [PARTE QUE VAI PASSAR OS SLIDES]-->
                <div class="gallery autoplay items-3">

                    <div id="item-1" class="control-operator"></div>
                    <div id="item-2" class="control-operator"></div>
                    <div id="item-3" class="control-operator"></div>

                    <figure class="item">
                        <img class="imagem" src="<?=bloginfo('template_url')?>/arquivos/_imagens/fe.jpg" alt="rei"/>
                    </figure>

                    <figure class="item">
                        <img class="imagem" src="<?=bloginfo('template_url')?>/arquivos/_imagens/temaGabadi2.jpg" alt="pc"/>
                    </figure>

                    <figure class="item">
                        <img class="imagem"src="<?=bloginfo('template_url')?>/arquivos/_imagens/bandaLiv5.jpg" alt="winner"/>
                    </figure>

                    <div class="controls">
                        <a href="#item-1" class="control-button">&bullet;</a>
                        <a href="#item-2" class="control-button">&bullet;</a>
                        <a href="#item-3" class="control-button">&bullet;</a>
                    </div>
                </div>
            </header>   



<!-- mostra conteúdo da página após cabeçalhos e slides-->
            <section id = "conteudo">

                <!-- Espaço para prévia do artigo sobre a Gabadi(linkar para a página quem somos )-->
                <article id="sobre">

                    <h1 id="tsobre">SOBRE A <div id="gabadi">GABADI</div>

                    </h1>

                    <p id="psobre">Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.</p>


                </article>


                <!-- Espaço para prévia das fotos (linka para a página de fotos)-->
                <article id="fotos">

                    <h1><a href="fotos.html">FOTOS</h1>

                    <img src="<?=bloginfo('template_url')?>/arquivos/_imagens/visitassemana03.jpg" alt="" /></a>


                </article>

                <!-- Segunda  parte do conteúdo da página-->    
                <div id="divisao">

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
                    <article id="videos">

                        <h1><a href="videos.html">VÍDEOS</a></h1>
                        
                        <img id="tv"  src= "<?=bloginfo('template_url')?>/arquivos/_imagens/tv-antiga1.jpg"/>
                        
                        <iframe class="video" width="410" height="278" src="https://www.youtube.com/embed/G6rZZ4ueq-Y" frameborder="0" allowfullscreen></iframe>
                        <!--            <p> Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, "Lorem Ipsum dolor sit amet..." vem de uma linha na seção 1.10.32.</p>-->

                    </article>

                </div>

</section>
<?php get_footer(); ?>