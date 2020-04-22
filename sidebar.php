<?php if(is_active_sidebar('sidebar')): ?>
<aside class="sidebar col-xl-4 col-3">
    <?php dynamic_sidebar('sidebar'); ?>
    <form class="formulario-sidebar">

        <div class="name-sidebar">
            <label for="name">Nome:</label><br>
            <input type="text"><br>
        </div>

        <div class="email-sidebar">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
        </div>

        <div class="mensagem">
            <label for="text">Mensagem:</label><br>
            <span class="textarea"><textarea name="mensagem" rows="5" cols="25"></textarea></span><br>
       
        
            
        <button type="button">Enviar</button>
        
    </form>  
</aside>
<?php endif; ?>