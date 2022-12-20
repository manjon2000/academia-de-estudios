
<section class="error-page-container">
    <article class="error-card">
        <div class="error-title"> <h1>Respuesta del servidor: <span class="text-red"> 404</span> </h1> </div>
            <div class="error-info">
                <p>La pagina <span class="text-red"> <?= $_GET['page'] ?> </span> no responde. </p>    
            </div>
        <div class="error-button">
            <a href=<?= Routes::url('home') ?>>VOLVER AL INICIO</a>
        </div>
</article>
</section>

<script defer>
    document.addEventListener('DOMContentLoaded', () => {

        let footer = document.getElementById('footer')
        let cookiesContainer = document.querySelector(".cookies-container");

        footer.remove();
        cookiesContainer.remove();

    });
</script>