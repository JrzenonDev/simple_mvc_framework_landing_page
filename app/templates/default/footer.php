<?php

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;

//initialise hooks
$hooks = Hooks::get();
?>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="/#sobre">Sobre</a>
                        </li>
                        <li>
                            <a href="/#web">Web</a>
                        </li>
                        <li>
                            <a href="/#mobile">Mobile</a>
                        </li>
                        <li>
                            <a href="/#responsive">Responsive</a>
                        </li>
                        <li>
                            <a href="/#portfolio">Portfólio</a>
                        </li>
                        <li>
                            <a href="/#contato">Contato</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <p><strong>Email: </strong><a href="mailto:jrobertoonb@gmail.com">jrobertoonb@gmail.com</a></p>
                        </li>
                        <li>
                            <p><strong>Phone: </strong><a href="tel:974764843">o11 - 97476-4843</a></p>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">José Roberto de Oliveira 2016.</p>

                </div>
            </div>
        </div>
    </footer>

    <?php
    Assets::js(array(
        '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'
    ));

    //hook for plugging in javascript
    $hooks->run('js');

    //hook for plugging in code into the footer
    $hooks->run('footer');
    ?>



</body>

</html>