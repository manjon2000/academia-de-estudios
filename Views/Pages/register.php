<?php
include_once __DIR__ . '/../../Controllers/registerController.php';

if (isset($_SESSION['user'])) {
  header('Location: http://localhost:9000/');
}

if (isset($_POST['name']) && isset($_POST['lastname']) &&
    isset($_POST['email']) && isset($_POST['password'])) {
    $dataUser = new registerController(
        $_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['password']
    );

      if ($dataUser->saveUser()) {
        header('Location: http://localhost:9000/?page=login ');
      }

}
?>
<style>
  #button-submit {
    transition: ease-in-out .5s;
  }
  .button-disable {
    visibility:hidden;
    opacity: 0;
    transition: ease-in-out 1s;
  }
</style>
<!-- Tailwind -->
<link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"
    />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
<div class="lg:w-1/2  2xl:w-1/3 my-10 mx-auto rounded-md shadow-md border border-grey-500 p-8">

<?php if (isset($_SESSION['errors'])): ?>
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
      <span class="font-medium"> <?php var_dump($_SESSION['errors'])?> </span>
    </div>
<?php endif;?>
    <form method="POST">
      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <label
            for="first_name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >Nombre</label
          >
          <input
            type="text"
            id="first_name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Jorge"
            required
            name="name"
          />
        </div>
        <div>
          <label
            for="text"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >Apellidos</label
          >
          <input
            type="text"
            id="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="lopez"
            required
            name="lastname"
          />
        </div>
      </div>

      <div class="grid gap-6 mb-6 md:grid-cols-2">
          <div>
            <label
              for="email"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Correo electronico</label
            >
            <input
              type="email"
              id="email"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="example@manjondev.com"
              required
              name="email"
            />
            <p id="email-duplicate-error"></p>
          </div>
        <div>
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
            required
            name="password"
          />
        </div>
      </div>

      <button
        id="button-submit"
        type="submit"
        class="ease-in-out duration-300 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Registrarse
      </button>
    </form>
    <div class="my-6">
        <p
          for="remember"
          class="text-sm font-medium text-gray-900 dark:text-gray-400"
          >Ya tienes cuenta
          <a href="http://localhost:9000/?page=login" class="text-blue-600 hover:underline dark:text-blue-500"
            >iniciar session</a
          >.</p>
      </div>
    </div>

<script defer>
    document.addEventListener('DOMContentLoaded', () => {

        let footer = document.getElementById('footer')
        let cookiesContainer = document.querySelector(".cookies-container");

        footer.remove();
        cookiesContainer.remove();

    })
</script>
    <script>

      let email       = document.getElementById('email');
      let button      = document.getElementById('button-submit');
      let errorEmail  = document.getElementById('email-duplicate-error');

      email.addEventListener('change', function(e) {
            var regex = /\S+@\S+\.\S+/;
            if (regex.test(this.value)) {

              fetch(`http://localhost:9000/Utils/EmailDuplicate.php?email=${this.value}`,{
                headers: {
                  "Content-Type": "application/json",
                  "Accept":       "application/json"
                }
              }).then( response => response.json())
                .then(data => {
                  console.log(data);
                  if ( data['duplicate'] ) {
                    button.classList.add('button-disable');
                    button.style.display='none';
                    errorEmail.classList.add('text-red-500','my-2', 'text-xs');
                    errorEmail.innerHTML = 'Error el email esta duplicado';
                  } else {
                    button.classList.remove('button-disable');
                    button.removeAttribute('style');
                    errorEmail.innerHTML = '';
                  }
                })
            }
        });


    </script>