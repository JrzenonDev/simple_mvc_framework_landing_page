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
                            <a href="/#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="/#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="/#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <p><strong>Email: </strong><a href="mailto:jrobertoonb@gmail.com">jrobertoonb@gmail.com</a></p>
                        </li>
                        <li>
                            <p><strong>Phone: </strong>o11 - 97476-4843</p>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; José Roberto de Oliveira 2016. All Rights Reserved</p>

                </div>
            </div>
        </div>
    </footer>

    <?php
    Assets::js(array(
        Url::templatePath() . 'js/jquery.js',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'
    ));

    //hook for plugging in javascript
    $hooks->run('js');

    //hook for plugging in code into the footer
    $hooks->run('footer');
    ?>

</body>

</html>