@extends 'layers/layer'
<section class="slider">
    <div class="content">
        <h2 class="title" style="text-align:left">Hola, soy Marlon Ramírez</h2>
        <p>Llevo unos cuantos años dedicándome a desarrollar software, tanto profesionalmente como por afición. Me encanta aprender cosas nuevas y siempre he pensando que la mejor forma de aprender algo es tratar de enseñárselo a los demás; por eso escribo este blog.</p>
    </div>
    <img src="{#view->img('REHt6N.jpg')}" />
</section>

<section id="projects">
    <figure class="col-4">
        <img src="{#view->img('REGxSz.jpg')}">
        <figcaption>
            <h2 class="title">Scoop</h2>
            <p>Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs.</p>
            <a class="more" href="https://github.com/mirdware/scoop" target="_blank"><i class="fa fa-code-fork"></i> Fork me on GitHub</a>
        </figcaption>
    </figure>
    <figure class="col-4">
        <img src="{#view->img('REGxSu.jpg')}">
        <figcaption>
            <h2 class="title">Scalar</h2>
            <p>Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs.</p>
            <a class="more" href="https://github.com/mirdware/scalar" target="_blank"><i class="fa fa-code-fork"></i> Fork me on GitHub</a>
        </figcaption>
    </figure>
    <figure class="col-4">
        <img src="{#view->img('REGvhk.jpg')}">
        <figcaption>
            <h2 class="title">PgAudit</h2>
            <p>Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs.</p>
            <a class="more" href="https://github.com/mirdware/pgaudit" target="_blank"><i class="fa fa-code-fork"></i> Fork me on GitHub</a>
        </figcaption>
    </figure>
    <figure class="col-4">
        <img src="{#view->img('REQzDg.jpg')}">
        <figcaption>
            <h2 class="title">Jetro</h2>
            <p>Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs.</p>
            <a class="more" href="https://github.com/mirdware/jetro" target="_blank"><i class="fa fa-code-fork"></i> Fork me on GitHub</a>
        </figcaption>
    </figure>
</section>

<section id="blog" class="main">
    <article id="article-{id}">
        <div>
            <a href="#coments" class="comment">99</a>
            <a href="#article">
                <img src="{#view->img('blog/tiosam.jpg')}" />
                <hgroup>
                    <h2>Primero tú</h2>
                    <h3>Marlon Ramirez</h3>
                    <h4>14 de Mayo de 2012</h4>
                </hgroup>
            </a>
        </div>
        <p>Tiempo atrás tuve la terrible idea de invertir la forma en la que std.js recorría las hojas de estilos externas, de esa manera se leía primero la última. Pero ¿porque digo terrible idea? Cuando estas trabajando en un proyecto donde tienes control absoluto sobre el código no debería haber ningún problema, el problema radica cuando entra en el panorama un tercer elemento, en mi caso fue twitter y su antiguo timeline, al enlazar sus hojas de estilo de ultimo eran las primeras que se leían mediante std y saltaban algunos errores (En Firefox y Opera) de denegación, al ser este un recurso remoto con el cual no se podía interactuar. La solución, volver a enderezar el recorrido de las hojas de estilos y empezar por las primeras, sobre las que tenía control.</p>
        <a href="#" class="btn read"><i class="fa fa-plus"></i> Leer más</a>
    </article>
    <article id="article-{id}">
        <div>
            <a href="#coments" class="comment">28</a>
            <a href="#article">
                <img src="{#view->img('blog/evil.jpg')}" />
                <hgroup>
                    <h2>WSDL, ASMX, Web services y otros demonios</h2>
                    <h3>Marlon Ramirez</h3>
                    <h4>14 de Mayo de 2012</h4>
                </hgroup>
            </a>
        </div>
        <p>Hace algún tiempo realice un trabajo para una institución Dominicana que se encarga de gestionar los paquetes que son enviados desde Estados Unidos hacia este país, uno de los pilares de esta aplicación era comunicar un par de servidores, uno en PHP ubicado en Santo Domingo al cual yo podía tener acceso inmediato y otro en ASP ubicado en Miami al cual era casi que imposible acceder directamente. En aquel entonces no era un programador tan quisquilloso y riguroso como hoy en día, por lo cual la solución más rápida y sencilla (desde ese entonces manejaba KISS sin saberlo) que se me ocurrió fue realizar una serie de redirecciones entre los servidores pasando variables mediante la url y así establecía la comunicación.</p>
        <a href="#" class="btn read"><i class="fa fa-plus"></i> Leer más</a>
    </article>
    <article id="article-{id}">
        <div>
            <a href="#coments" class="comment">88</a>
            <a href="#article">
                <img src="{#view->img('blog/javascript.jpg')}" />
                <hgroup>
                    <h2>Cuando los hombres programábamos en JavaScript</h2>
                    <h3>Marlon Ramirez</h3>
                    <h4>14 de Mayo de 2012</h4>
                </hgroup>
            </a>
        </div>
        <p>Hoy en día cualquier tipo de búsqueda en Internet para realizar un simple "Hola mundo" en JavaScript conduce irremediablemente a una página que hable de un framework, en la mayoría de los casos este framework es jQuery y no es que tenga algo contra los frameworks JavaScript, de hecho yo mismo he creado mi propio framework, pero ahí está precisamente mi punto pues el framework lo he hecho yo mismo programando en <b>JavaScript desnudo</b>. Es indudable que un framework te ahorra horas y horas de programación, pero como en el principio de intercambio equivalente: "Para obtener algo, es necesario sacrificar algo de un valor equivalente" y lo que se debe sacrificar en este caso es rendimiento.</p>
        <a href="#" class="btn read"><i class="fa fa-plus"></i> Leer más</a>
    </article>
    <div class="round-button"><div class="round-button-circle"><a href="http://example.com" class="round-button">Archivo</a></div></div>
</section>

<section id="services">
    <figure class="col-4">
        <img src="{#view->img('REGxSz.jpg')}">
        <figcaption>
            <h2 class="title">Diseño</h2>
            <ul>
                <li>Administración de base datos</li>
                <li>Experiencia de usuario</li>
                <li>Diseño grafico</li>
                <li>Responsive design</li>
                <li>DevOps</li>
            </ul>
        </figcaption>
    </figure>
    <figure class="col-4">
        <img src="{#view->img('REGxSu.jpg')}">
        <figcaption>
            <h2 class="title">Desarrollo</h2>
            <ul>
                <li>Backend</li>
                <li>OOP</li>
                <li>Frontend</li>
                <li>Programación funcional</li>
                <li>HTML5</li>
                <li>CSS3</li>
            </ul>
        </figcaption>
    </figure>
    <figure class="col-4">
        <img src="{#view->img('REGvhk.jpg')}">
        <figcaption>
            <h2 class="title">Asesoría</h2>
            <ul>
                <li>SCRUM</li>
                <li>Procesos de desarrollo</li>
                <li>Buenas practicas</li>
                <li>XP</li>
                <li>Patrones de diseño</li>
                <li>Patrones arquitectonicos</li>
            </ul>
        </figcaption>
    </figure>
    <figure class="col-4">
        <img src="{#view->img('REQzDg.jpg')}">
        <figcaption>
            <h2 class="title">Móvil</h2>
            <ul>
                <li>Android</li>
                <li>Ionic</li>
                <li>Swift</li>
                <li>React native</li>
            </ul>
        </figcaption>
    </figure>
</section>

<form id="contact" class="main">
    <h2 class="title">Contáctanos</h2>
    <input type="text" name="name" class="input" placeholder="Nombres" />
    <input type="text" name="email" class="input" placeholder="Apellidos" />
    <input type="email" name="name" class="input" placeholder="Email" />
    <input type="phone" name="email" class="input" placeholder="Teléfono" />
    <div class="input msg">
        <textarea name="message" placeholder="Cuentanos sobre tu proyecto"></textarea>
    </div>
    <div class="round-button"><div class="round-button-circle"><button type="submit" class="round-button">Enviar</button></div></div>
</form>
