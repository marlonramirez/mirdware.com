<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="Empresa de desarrollo orientada a aplicaciones PHP y javascript" />
    <meta name="keywords" content="mirdware,tecnologia,framework,desarrollo,sistemas.php,javascript,scoop,scalar,jetro" />
    <link rel="shortcut icon" type="image/x-icon" href="{#view->asset('favicon.ico')}" />
    <link rel="author" href="{#view->asset('humans.txt')}" />
    <link rel="stylesheet" href="{#view->css('scoop.min.css')}" />
    <link href="https://fonts.googleapis.com/css?family=Orbitron:700&display=swap" rel="stylesheet" />
    <title>MirdWare</title>
</head>

<body>
    <header id="main-header">
        <form action="" method="get" class="search">
            <input type="text" name="search" placeholder="Buscar..." />
            <button type="submit">
                <img src="{#view->img('search-white.png')}" alt="submit">
            </button>
        </form>
        <a href="{#view->route('home')}" class="logo">
            <img alt="MirdWare:" src="{#view->img('logo-mirdware.png')}" />
            <img alt="you are free" src="{#view->img('mirdware.png')}" />
        </a>
        <nav>
            <ul>
                <li><a href="#projects" class="labs">Proyectos</a></li>
                <li><a href="#blog" class="article">Blog</a></li>
                <li><a href="#services" class="portfolio">Servicios</a></li>
                <li><a href="#contact" class="contact">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div id="content">
        @sprout
    </div>
    <footer id="main-footer">
        <div class="social">
            <a href="https://github.com/mirdware" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> GitHub</a>
            <a href="https://twitter.com/mirdware" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
        </div>
        <span>Copyright &copy; 2016, MirdWare All rights reserved</span>
    </footer>
</body>
</html>
