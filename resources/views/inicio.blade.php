<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     @vite('resources/css/style_inicio.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>tecnoSpeed</title>
</head>

<body>
    <header class="head">
        <div class="Busqueda">
        <form action="/buscar" method="GET">
         <label class="form-label" for="busqueda"></label>
         <input class="busq"
             type="search" 
             id="busqueda" 
             name="q" 
             placeholder="Escribe tu búsqueda..." 
             required
            >
  <button class="btn-b" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>
</div>
<div class="logo">
    <img src="{{ asset('storage/img/img_corp/img_prueba.jpg') }}" alt="Logo de la empresa">
<div class="inicio_sesion">
    <h1 class="Title_1"><i class="fa-solid fa-user"></i>iniciar sesion</h1>
    <button class="btn-b" type="submit"><i class="fa-solid fa-arrow-up-right-from-square"></i></button>

    
    
</body>
</html>