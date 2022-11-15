<?php include_once __DIR__ . '/Layouts/navbar.php';?>
<main role="main" class="main-container">
      <section class="contact-container">
        <article class="contact-content">
          <form>
            <div class="form-group">
              <div class="form-group-item">
                <label for="nombre"> Nombre </label>
                <input
                  type="text"
                  name="nombre"
                  placeholder="Antonio"
                  required
                />
              </div>
              <div class="form-group-item">
                <label for="nombre"> Apellidos </label>
                <input
                  type="text"
                  name="nombre"
                  placeholder="Sarosi"
                  required
                />
              </div>
            </div>
            <div class="form-group">
                <div class="form-group-item">
                  <label for="nombre"> Telefono </label>
                  <input
                    type="text"
                    name="nombre"
                    placeholder="+34 666 00 00 00"
                    required
                  />
                </div>
                <div class="form-group-item">
                  <label for="nombre"> Correo Electronico </label>
                  <input
                    type="text"
                    name="nombre"
                    placeholder="ejemplo@manjondev.es"
                    required
                  />
                </div>
            </div>
            <div class="form-textarea">
                <label for="message">Mensaje</label>
                <textarea name="message" placeholder="Mensaje"></textarea>
            </div>
            <input type="submit" class="btn-submit outline" value="Enviar">
          </form>
        </article>
      </section>
    </main>