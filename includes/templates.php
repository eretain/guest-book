<?php

function get_header(string $title):void
{
  $nav_links = [
    'Sign In' => 'sign-in.php',
    'Sign Up' => 'sign-up.php',
    'Sign Out' => '#',
  ];

  $nav_items = '';

  foreach ($nav_links as $text => $href) {
    if ($text == $title) {
      $nav_items .=
        "<li class='nav-item'>
          <a class='nav-link text-center active' aria-current='page' href='$href'>$text</a>
        </li>";
    } else {
      $nav_items .=
        "<li class='nav-item'>
          <a class='nav-link text-center' href='$href'>$text</a>
        </li>";
    }
  }

  print <<<end
    <!doctype html>
    <html lang='en' data-bs-theme='dark'>
      <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Guest Book - $title</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT' crossorigin='anonymous'>
        <link rel='stylesheet' href='../styles/styles.css'>
      </head>
      <body>

        <nav class='navbar navbar-expand-sm bg-body-tertiary fixed-top'>
          <div class='container-xxl'>
            <a class='navbar-brand' href='index.php'>Guest Book</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasNavbar' aria-controls='offcanvasNavbar' aria-label='Toggle navigation'>
              <span class='navbar-toggler-icon'></span>
            </button>
            <div class='offcanvas offcanvas-end' tabindex='-1' id='offcanvasNavbar' aria-labelledby='offcanvasNavbarLabel'>
              <div class='offcanvas-header'>
                <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
              </div>
              <div class='offcanvas-body'>
                <ul class='navbar-nav justify-content-end flex-grow-1'>
                  $nav_items
                </ul>
              </div>
            </div>
          </div>
        </nav>
  end;
}

function get_footer()
{
  print <<<end
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
      </body>
    </html>
  end;
}
