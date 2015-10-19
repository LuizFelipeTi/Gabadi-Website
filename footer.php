 <!-- Parte responsável para o conteúdo do antirodapé (plugin Facebook, formulário de contato)-->
            <div id="antirodape">
                <!--                [AQUI É ONDE VAI FICAR AS INFORMAÇÕES DE REDES SOCIAS]-->


                <div class="fb-like-box" data-href="https://www.facebook.com/gabadioficial" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>            


                <form method="post" id="fContato" action="email.php">

                    <h4>SAIBA O QUE ROLA POR AQUI !</h4>

                    <fieldset id="contato">

                        <label for="cNome">  <input type="text" name="tNome" id="cNome" size="40" maxlength="30" placeholder="Seu Nome" /></label>
                        <label for="cEmail"><input type="email" name="tEmail" id="cEmail" size="40" maxlength="40" placeholder="Seu Email" /></label>
                        <input type="submit" name="tEnviar" id="cEnviar" value="Enviar" />


                    </fieldset>



                </form>

            </div>

            <!-- Parte responsável pelo conteúdo do rodapé da página (assinatura e enedereço do site)-->
            <footer id="rodape">
                <?php  wp_footer();?>
                <p id="assinatura">Copright&copy; 2015 by Luiz Felipe Lopes </p>
                <p id="endereco"><a href="index.html">GABADI.COM.BR</a></p>

            </footer>

        </div>
    </body>
</html>