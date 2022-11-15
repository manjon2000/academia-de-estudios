<?php

include_once __DIR__ . '/../../Controllers/loginController.php';

  if (isset($_SESSION['user'])) {
    header('Location: http://localhost:9000/');
  }

  if(isset($_POST['submit-login'])) {
    $loginUser = new loginController($_POST['email'],$_POST['password']);
    $verifyUser = $loginUser->loginUser();

    if( $verifyUser ) {
      header('Location: http://localhost:9000/');
    } 
  }
?>
<!-- Tailwind -->
<link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"
    />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

<div class="lg:w-1/2  2xl:w-1/3 my-10 mx-auto rounded-md shadow-md border border-grey-500 p-8">
    <form method="POST">

          <?php if( isset($_SESSION['not-exist-user']) ): ?>
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
              <span class="font-medium">Error!</span> <?php echo $_SESSION['not-exist-user']; ?>
            </div>
          <?php endif; ?>

          <?php if( isset($_SESSION['error-password']) ): ?>
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
              <span class="font-medium">Error!</span> <?php echo $_SESSION['error-password']; ?>
            </div>
          <?php endif; ?>


        <div class="mb-6">
          <label
            for="first_name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >Correo electronico</label
          >
          <input
            type="text"
            id="first_name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="example@manjondev.es"
            required
            name="email"
          />
        </div>
        <?php if( isset($_SESSION['error-email']) ): ?>
          <p class="text-red-500"> <?php echo $_SESSION['error-email']; ?> </p>
        <?php endif; ?>

      <div class="mb-6">
        <label
          for="confirm_password"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
          >Contraseña</label
        >
        <input
          type="password"
          id="confirm_password"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="•••••••••"
          name="password"
          required
        />
      </div>
      
      <input
        type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        name="submit-login"
        value="Iniciar Sesion"
        >
       
    </form>

    <div class="my-6">
        <p
          for="remember"
          class="text-sm font-medium text-gray-900 dark:text-gray-400"
          >No tienes cuenta
          <a href="http://localhost:9000/?page=register" class="text-blue-600 hover:underline dark:text-blue-500"
            >registrate</a
          >.</p>
      </div>

    </div>
<div class="py-5"></div>

<script defer>
    document.addEventListener('DOMContentLoaded', () => {

        let footer = document.getElementById('footer')
        let cookiesContainer = document.querySelector(".cookies-container");

        footer.remove();
        cookiesContainer.remove();

    })
</script>