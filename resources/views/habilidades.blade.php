<!DOCTYPE html>
<html>

<head>
    <title>Habilidades</title>
    <link rel="stylesheet" href="{{ asset('/estilos.css') }}">
</head>

<body>
<div class="container">
    <h1>Habilidades</h1>

    <p>
        Cuento con conocimientos en programación utilizando lenguajes como PHP y Java,
        así como fundamentos sólidos en lógica de programación y estructuras de datos.
    </p>

    <p>
        Tengo experiencia básica en el desarrollo de aplicaciones web con Laravel,
        manejo de bases de datos relacionales y uso de control de versiones con Git.
    </p>

    <p>
        Además, poseo habilidades en trabajo en equipo, análisis de problemas
        y aprendizaje autónomo, fortalecidas a lo largo de mi formación académica.
    </p>

    <nav>
        <a href="{{ route('perfil') }}">Perfil</a> |
        <a href="{{ route('intereses') }}">Intereses</a> |
        <a href="{{ route('metas') }}">Metas</a>
    </nav>
</div>
</body>

</html>
