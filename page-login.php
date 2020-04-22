<?php wp_head(); ?>
<main>
    
    <!-- IMAGEM DO LOGO RESPONSIVA -->
    <div class="container">
        <div class="row">
            <div class="logo-login col-2">
                <a href="<?php echo get_home_url(); ?>">
                    <?php 
                        if(is_active_sidebar('login' )){
                            dynamic_sidebar('login');
                        }
                    
                    ?>  
            </div>
                </a>
        </div>
    </div>

        <!-- CONTATOS -->
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="login col-6">
                    <h1 class="title-login">Login</h1><br>
                        <div class="notification">
                            <p>ERRO: Usuário ou senha inválido. Tente novamente</p>
                        </div>
                        <div class="box">
                            <form action="login.php" method="POST">
                                <div class="field">
                                    <div class="box-usuario">
                                        <label for="text">Usuário</label><br>
                                        <input namespace="usuario" type="text" class="usuario" placeholder="Seu usuário">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="box-password">
                                        <label for="text">Senha</label><br>
                                        <input namespace="senha" type="password" class="password"  placeholder="Sua senha">
                                    </div>
                                </div>
                            <button type="submit" class="button-login">Entrar</button>
                        </form>
                        </div>
                    </div>
                </div> 
            </div>
        </section>