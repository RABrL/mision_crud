<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url; ?>Assets/images/favicon-32x32.png">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/styles2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Home</title>
</head>

<body>
    <header>
        <!-- BARRA DE NAVEGACION -->
        <nav class="nav-header">
            <!-- MENU COLAPSADO -->
            <ul class="menu-collapsed">
                <li class="logo">
                    <a href="#">
                        <img id="logo-img" src="<?php echo base_url; ?>Assets/images/logo.svg" alt="logo empresa">
                    </a>
                </li>
                <li class="menu-icon">
                    <button class="toggler-menu" type="button">
                        <img src="<?php echo base_url; ?>Assets/images/icon-menu.svg">
                    </button>
                </li>
                <ul class="menu-hidden menu-item">
                    <li class="menu-item">
                        <a class="item" href="#">
                            Features
                            <span class="arrow"></span>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url; ?>Assets/images/icon-todo.svg">
                                    <p>Todo list</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url; ?>Assets/images/icon-calendar.svg">
                                    <p>Calendar</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php echo base_url; ?>Assets/images/icon-reminders.svg">
                                    <p>Reminders</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php echo base_url; ?>Assets/images/icon-planning.svg">
                                    <p>Planning</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="item" href="#">
                            Company
                            <span class="arrow"></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="#">History</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="" class="careers">Careers</a>
                    </li>
                    <li class="menu-item"><a href="" class="item">About</a>
                    </li>
                </ul>
                <div class="entry-hidden">
                    <a class="login entry-button" href="<?php echo base_url; ?>Views/login.php">Login</a>
                    <a class="register entry-button">Register</a>
                </div>
            </ul>

            <!-- MENU DESPLEGADO -->
            <ul class="menu">
                <li class="logo">
                    <a href="#">
                        <img id="logo-img" src="<?php echo base_url; ?>Assets/images/logo.svg" alt="logo empresa">
                    </a>
                </li>
                <li class="menu-item">
                    <a class="item" href="#">
                        Features
                        <span class="arrow"></span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">
                                <img src="<?php echo base_url; ?>Assets/images/icon-todo.svg">
                                <p>Todo list</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo base_url; ?>Assets/images/icon-calendar.svg">
                                <p>Calendar</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?php echo base_url; ?>Assets/images/icon-reminders.svg">
                                <p>Reminders</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?php echo base_url; ?>Assets/images/icon-planning.svg">
                                <p>Planning</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a class="item" href="#">
                        Company
                        <span class="arrow"></span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">History</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="" class="careers">Careers</a>
                </li>
                <li class="menu-item"><a href="" class="item">About</a>
                </li>
            </ul>
            <div class="entry">
                <a class="login entry-button" href='<?php echo base_url; ?>Home/login'>Login</a>
                <a class="register entry-button" href='<?php echo base_url; ?>Home/register'>Register</a>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <header>
                <h1>Make <br> remote work</h1>
            </header>
            <p> Get your team in sync, no matter your location. Streamline processes, create team rituals, and watch productivity soar.
            </p>
            <button>Learn more</button>
            <footer>
                <img src="<?php echo base_url; ?>Assets/images/client-audiophile.svg" alt="logo-audiophile">
                <img src="<?php echo base_url; ?>Assets/images/client-databiz.svg" alt="logo-databiz" id="logo-databiz">
                <img src="<?php echo base_url; ?>Assets/images/client-maker.svg" alt="logo-maker">
                <img src="<?php echo base_url; ?>Assets/images/client-meet.svg" alt="logo-meet">
            </footer>
        </section>
        <aside>
            <div class="img-aside"></div>
        </aside>
    </main>

</body>
<footer>
    <div class="attribution">
        DESAFIO HTML Y CSS COEX <a href="https://coexdevelopers.com/" target="_blank">COEX - Conocimiento Exponencial</a>.
        Coded by <a href="#">Robinson Brito</a>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>