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


      <!-- Main Content End -->
      <iframe src="html-includes/include-a.html" frameborder="0" allow="fullscreen" loading="lazy"
        onload="this.before(...(this.contentWindow.document.body||this.contentWindow.document).children);this.remove()"></iframe>
    </main>
    <footer class="footer"></footer>
  </div>
  <script src="js/main.js" type="module"></script>
</body>

</html>