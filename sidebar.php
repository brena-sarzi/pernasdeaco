<?php if(is_active_sidebar('sidebar')): ?>
<aside class="sidebar col-xl-4 col-3">
    <?php dynamic_sidebar('sidebar'); ?>
    <form>

        <div class="name">
            <label for="name">Nome:</label><br>
            <input type="text"><br>
        </div>

        <div class="email">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
        </div>

        <div class="mensagem">
            <label for="text">Mensagem:</label><br>
            <textarea name="message" rows="5" cols="25"></textarea><br>
        </div> 

        <button type="button">Enviar</button>
    </form>  
</aside>
<?php endif; ?>