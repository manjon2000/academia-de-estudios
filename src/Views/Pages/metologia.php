<?php include_once __DIR__ . '/Layouts/navbar-trasparent.php';?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
<script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.11.3,npm/fullcalendar@5.11.3/main.min.js"></script>

<main role="main" class="main-container">
    <section class="metologia-header-info-container">
      <article class="metologia-header-title">
        <h3>Metodología</h3>
      </article>
    </section>

    <section class="container-calendar">
      <div id='calendar'></div>
    </section>
    <section class="container-calendar">
         <div id='calendar'></div>
    </section>

    <section class="home-tab-info-course-container">
      <article class="home-title-tab">
        <h3>¿Que metologia utilizamos en nuestros cursos? </h3>
      </article>
      <article class="home-buttons-tab-container">
        <div class="home-buttons-tab-item actived">
          <a href="#tab_1">Formación homologada</a>
        </div>
        <div class="home-buttons-tab-item">
          <a href="#tab_2">Cursos 100% online</a>
        </div>
        <div class="home-buttons-tab-item">
          <a href="#tab_3">Profesores 24/7h</a>
        </div>
      </article>
      <article class="home-tab-content">
        <div id="tab_1" class="show">
          <!-- Item -->
          <div class="tab-item">
            <!-- Card -->
            <div class="tab-item-card">
              <div class="tab-item-body">
                <div class="tab-item-title">
                  <h3>Formación homologada.</h3>
                </div>
                <div class="tab-item-description">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quae totam laborum dolorum aut sunt
                    optio vel numquam at, qui modi et impedit blanditiis tempore sit eius eveniet veniam? Dolores quasi
                    praesentium laborum itaque optio similique rerum quis sed dolorum. Tempora fugit asperiores nemo
                    similique ducimus repellendus quas dignissimos nulla quidem nobis, aliquid qui obcaecati! Eos, optio
                    soluta. Fugiat id, maxime perspiciatis in quis enim facilis. Neque omnis dolorem exercitationem a
                    unde pariatur facere nostrum at natus obcaecati vel quidem iure quas animi blanditiis amet quasi
                    voluptates facilis, minima aliquid ipsam commodi quae! Molestias veritatis minima iure ad,
                    consequatur dolores!
                  </p>
                </div>
              </div>
              <div class="tab-item-image">
                <img src="https://picsum.photos/900">
              </div>
            </div>
          </div>
        </div>
        <div id="tab_2">
          <!-- Item -->
          <div class="tab-item">
            <!-- Card -->
            <div class="tab-item-card">
              <div class="tab-item-body">
                <div class="tab-item-title">
                  <h3>Cursos 100% online.</h3>
                </div>
                <div class="tab-item-description">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quae totam laborum dolorum aut sunt
                    optio vel numquam at, qui modi et impedit blanditiis tempore sit eius eveniet veniam? Dolores quasi
                    praesentium laborum itaque optio similique rerum quis sed dolorum. Tempora fugit asperiores nemo
                    similique ducimus repellendus quas dignissimos nulla quidem nobis, aliquid qui obcaecati! Eos, optio
                    soluta. Fugiat id, maxime perspiciatis in quis enim facilis. Neque omnis dolorem exercitationem a
                    unde pariatur facere nostrum at natus obcaecati vel quidem iure quas animi blanditiis amet quasi
                    voluptates facilis, minima aliquid ipsam commodi quae! Molestias veritatis minima iure ad,
                    consequatur dolores!
                  </p>
                </div>
              </div>
              <div class="tab-item-image">
                <img src="https://picsum.photos/1200">
              </div>
            </div>
          </div>
        </div>
        <div id="tab_3">
          <!-- Item -->
          <div class="tab-item">
            <!-- Card -->
            <div class="tab-item-card">
              <div class="tab-item-body">
                <div class="tab-item-title">
                  <h3>Profesores 24/7h.</h3>
                </div>
                <div class="tab-item-description">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quae totam laborum dolorum aut sunt
                    optio vel numquam at, qui modi et impedit blanditiis tempore sit eius eveniet veniam? Dolores quasi
                    praesentium laborum itaque optio similique rerum quis sed dolorum. Tempora fugit asperiores nemo
                    similique ducimus repellendus quas dignissimos nulla quidem nobis, aliquid qui obcaecati! Eos, optio
                    soluta. Fugiat id, maxime perspiciatis in quis enim facilis. Neque omnis dolorem exercitationem a
                    unde pariatur facere nostrum at natus obcaecati vel quidem iure quas animi blanditiis amet quasi
                    voluptates facilis, minima aliquid ipsam commodi quae! Molestias veritatis minima iure ad,
                    consequatur dolores!
                  </p>
                </div>
              </div>
              <div class="tab-item-image">
                <img src="https://picsum.photos/1000">
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>


    <section class="metologia-acordeon-container">
      <article class="metologia-acordeon-content">
        <div class="metologia-acordeon-image">
          <img src=<?php __DIR__  ?> "/assets/images/metologia_2.jpg">
        </div>
        <div class="metologia-acordeon-items">
          <!-- Item -->
          <div class="acordeon-item show">
            <div class="acordeon-head">
              <h3><span class="punto"></span>100% online .</h3>
            </div>
            <div class="acordeon-body">
              <p>
                Nuestra metodología e-learning se adapta a ti, a tus horarios y a tus circunstancias. Tú decides en qué
                horario y dónde prepararte. Porque el nuestro es un aprendizaje "hecho a medida".
              </p>
            </div>
          </div>
          <!-- Item -->
          <div class="acordeon-item">
            <div class="acordeon-head">
              <h3><span class="punto"></span>Seguimiento personalizado .</h3>
            </div>
            <div class="acordeon-body">
              <p>
                A tu disposición estarán nuestros asesores pedagógicos (¡un plus para tu organización y motivación!) y
                profesores especialistas (nuestros senséis) que compartirán contigo toda su sabiduría.
              </p>
            </div>
          </div>
          <!-- Item -->
          <div class="acordeon-item">
            <div class="acordeon-head">
              <h3><span class="punto"></span>Learn by doing.</h3>
            </div>
            <div class="acordeon-body">
              <p>
                Aprenderás haciendo. Además, dispondrás de hasta 300 horas de prácticas profesionales de calidad en
                empresas del sector.
              </p>
            </div>
          </div>
          <!-- Item -->
          <div class="acordeon-item">
            <div class="acordeon-head">
              <h3><span class="punto"></span>English is the key .</h3>
            </div>
            <div class="acordeon-body">
              <p>
                ¿Estás pensando en mejorar tu level? Te ayudamos a preparar las certificaciones oficiales de Oxford y
                Cambridge. Esto es un extra en todas nuestras formaciones, elijas la que elijas.
              </p>
            </div>
          </div>

        </div>
      </article>
    </section>
  </main>