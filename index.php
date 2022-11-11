<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Practice</title>
</head>

<body>
  <div class="grid">
    <header class="header">
      <div class="container">
        <h1>Practice | Index.php</h1>
      </div>
    </header>
    <nav class="nav"></nav>
    <main class="main container">
      <h2>Main Content</h2>
      <!-- Main content -->

      <style>
        .resource-grid {
          display: grid;
          grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
          gap: 1rem;
          overflow: visible;
        }

        .resource-card {
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          padding: 1rem;
          border: 1px solid hsl(0 0% 0% / .125);
          box-shadow: 0px 2px 4px hsl(0 0% 0% / .125);

        }

        .resource-card__image {
          object-fit: cover;
          max-width: 100%;
        }

        .resource-card__title {
          text-transform: capitalize;
          font-weight: var(--fw-bold);
        }

        .resource-card__more-link {
          display: inline-block;
        }

        .resource-card__more-button {
          text-decoration: none;
          text-transform: uppercase;
          font-size: var(--fs-small, .75rem);
          border: 1px solid var(--color-dark);
          display: block;
          text-align: center;
          padding: 1em;
        }

        .resource-card__description {
          display: -webkit-box;
          overflow: hidden;
          -webkit-line-clamp: 3;
          -webkit-box-orient: vertical;
        }


        .flow-content>* {
          margin: 0;
        }

        .flow-content>*+* {
          margin-top: 1rem;
        }

        dialog::backdrop {
          background: hsl(0 0% 0% / .9);
          color: red;
        }
      </style>

      <div class="resource-grid">

        <div class="resource-card flow-content">
          <img loading="lazy" src="images/atl00.jpg" alt="" class="resource-card__image">
          <h3 class="resource-card__title">The Sprawling of Atlanta: Visualizing Metropoitan Area Change, 1940s to the
            Present</h3>
          <p class="resource-card__description">
            Interactive maps that visualize changes in the environment and demographics of the metropolitan area
            from the 1940s to the present. Explore aerial imagery overlays Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Hic harum fugit pariatur.</p>

          <button class="resource-card__more-button" data-dialog='dialog01'>More Information</button>

          <a href="/" class="resource-card__resource-button">Go to Resource</a>
        </div>

        <dialog id="dialog01">

          <h3 class="resource-card__title">The Sprawling of Atlanta: Visualizing Metropoitan Area Change, 1940s to the
            Present</h3>
          <p class="resource-card__description">
            Interactive maps that visualize changes in the environment and demographics of the metropolitan area
            from the 1940s to the present. Explore aerial imagery overlays Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Hic harum fugit pariatur.</p>
        </dialog>

        <script>
          (function () {

            document.addEventListener('click', event => {


              event.preventDefault();

              if (event.target.matches('dialog')) {

                event.target.close();

              }

              if (!event.target.matches('[data-dialog]')) return;
              event.preventDefault();

              const dialogId = event.target.dataset.dialog;
              const dialog = document.querySelector(`#${dialogId}`);

              dialog.showModal();



            });



          })()


        </script>


        <div class="resource-card flow-content">
          <img loading="lazy" src="images/change00.jpg" alt="" class="resource-card__image">
          <h3 class="resource-card__title">Lorem, Ipsum</h3>
          <p class="resource-card__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum rerum voluptatum dolores, nisi dicta
            corrupti sint unde explicabo placeat nam quod necessitatibus consequuntur quidem vel delectus ipsa
            consequatur doloremque labore neque quisquam tempora obcaecati? Itaque provident fugit doloremque magni ad
            impedit libero quo nam voluptatibus modi distinctio ut nobis illum ea ab hic, quibusdam magnam ipsum
            corporis, at quod! Consequatur facilis, id dolores nulla veritatis quam, vitae assumenda enim velit
            consequuntur nemo dolorum labore? Reprehenderit sequi, vero dolorem corporis consequuntur optio, animi,
            suscipit modi eligendi voluptas ex reiciendis maxime porro? Deleniti totam consequuntur ducimus eveniet, at,
            ipsum unde odio fugiat adipisci repellat ut fugit nisi obcaecati sed quisquam itaque mollitia distinctio
            iusto numquam eligendi tempore? Odit voluptas modi consequatur deserunt adipisci repellat hic accusamus
            explicabo?</p>

          <a href="/" class="resource-card__more-link">More Information</a>

          <a href="/" class="resource-card__resource-button">Go to Resource</a>
        </div>


        <div class="resource-card flow-content">
          <img loading="lazy" src="images/city00.jpg" alt="" class="resource-card__image">
          <h3 class="resource-card__title">Lorem Ipsum Dolor Sit Amet.</h3>
          <p class="resource-card__description">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto maiores, minus tempore expedita error et
            architecto harum sunt, voluptatum necessitatibus laudantium dolore? Sit aliquid similique non iure eius
            accusamus quibusdam doloribus animi assumenda nemo dolorum tempora ab fuga, itaque saepe quis nobis officiis
            aspernatur recusandae in harum ducimus dolorem autem quod. Adipisci voluptatibus architecto numquam
            doloremque consequatur itaque nesciunt earum odit rem pariatur sed, maxime illo officia harum necessitatibus
            similique. Explicabo earum cupiditate dicta soluta qui, placeat eligendi possimus quaerat consectetur cumque
            ab dolorem sed quia commodi odio! Labore facere ea amet temporibus assumenda. Quibusdam iusto repudiandae
            ipsam! Beatae minima fugit accusantium adipisci consequuntur possimus ut, cupiditate iusto officia sint
            maiores enim, sequi vitae est! Ipsum nam nostrum delectus odio, dolores exercitationem at ipsa voluptatibus!
          </p>

          <a href="/" class="resource-card__more-link">More Information</a>

          <a href="/" class="resource-card__resource-button">Go to Resource</a>


        </div>

      </div>




      <!-- Main Content End -->
      <!-- <iframe src="html-includes/include-a.html" frameborder="0" allow="fullscreen" loading="lazy" onload="this.before(...(this.contentWindow.document.body||this.contentWindow.document).children);this.remove()"></iframe> -->
    </main>
    <footer class="footer"></footer>
  </div>
  <script src="js/main.js" type="module"></script>
</body>

</html>