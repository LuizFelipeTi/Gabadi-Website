<?php 
/*
Template Name: Fale Conosco
*/
?>


<?php get_header()?>
<link rel="stylesheet" type="text/css" href="<?=bloginfo('template_url')?>/arquivos/_css/fale-conosco.css" />


            <header id="fotos">


                <img class="image" src="<?=bloginfo('template_url')?>/arquivos/_imagens/fe.jpg" alt="rei"/>


            </header>


            <section id="secao">
                
                <h1>Deixa Aqui o Seu Contato!</h1>
                <p id="descricao">Nos escreva, para pedido de músicas, evangelismo, convites, críticas, etc...</p>
                
                        <form id="formContato" method="post" action="contato.php">
                
                <fieldset id="fale">
                    
                    <p><label for="nome">Nome: </label><input class="contato" type="text" name="tNome" id="nome" size="20" maxlength="30" placeholder="Digite o seu nome"/> </p>
                    <p><label for="email">Email:</label><input class="contato" type="email" name="tEmail" id="email" size="20" maxlength="30" placeholder="Digite o seu e-mail"/> </p>
                    <p><label for="telefone"> Telefone: </label><input class="contato" type="tel" name="tTel" id="telefone" size="9" maxlength="9" placeholder="(xx)xxxx - xxxx" /> </p>
                    <p><label for="estados">Estado:</label>
                        <select name="tEst" id="estados">
                            <option value="MG" selected>Minas Gerais</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="SP">São Paulo</option>
                            <option value="ES">Espírito Santo</option>
                        </select>
                    </p>
                    
                    <p><label for="cidade">Cidade:</label><input class="contato" type="text" name="tCidade" id="cidade" size="20" maxlength="40" placeholder="Digite a sua cidade"/></p>
                    <div id="areaTexto"> <p id="pMsg"> <label for="mensagem">Mensagem:</label></p>
                        <textarea name="msg" id="mensagem" cols="35" rows="5" placeholder="Digite aqui sua mensagem"></textarea></div>
                    
                    <input class="contato" type="submit" name="btn" id="botao" value="Enviar" />
                    
                </fieldset>
                 
            </form>
                </section>



<?php get_footer(); ?>


