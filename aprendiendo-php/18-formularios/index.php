<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset='utf-8'/>
        <title>formulario</title>
    </head>
    <body>
        <h1>FORMULARIO</h1>
        
        <form action="POST" enctype="multipart/form-data">
        <!--enctype="multipart/form-data" sirve para enviar datos al servidor -->
        
        <label for="nombre">Nombre:</label>
            <p><input type="text" name="nombre"/></p>
            <label for="apellido">Apellido:</label>
            <p><input type="text" name="apellido" autofocus="autofocus"/></p>
 
            <label for="apellido">Apellido:</label>
            <p><input type="text" name="apellido" autofocus="autofocus"/></p>
            <label for="sexo">Sexo:</label>
            
            <p>
                Hombre: <input type="checkbox" name="sexo" value="Hombre"/>
                Mujer: <input type="checkbox" name="sexo" value="Mujer"/>
            </p>
            <p>
                Color: <input type="color" name="color"/>
            </p>
            <p>
                Fecha: <input type="date" name="fecha"/>
            </p>
            <p>
                Email: <input type="email" name="correo"/>
            </p>
            <p>
                Archivo: <input type="file" name="archivo" multiple="multiple"/>
            </p>
            <p>
                Campo que se envia pero no es percetible al usuario: <input type="hidden" name="color"/>
            </p>
            <p>
                Numero: <input type="number" name="numero"/>
            </p> 
            <p>
                Contraseña: <input type="password" name="contraseña"/>
            </p>
            <p>
                Continente: 
                Ameria del sur: <input type="radio" name="continente" value="Ameria del Sur"/>
                Ameria del Norte: <input type="radio" name="continente" value="Ameria del Norte"/>
                Ameria del Central:<input type="radio" name="continente" value="Ameria del Cnetral"/>
                Europa: <input type="radio" name="continente" value="Europa"/>
                Asia: <input type="radio" name="continente" value="Asia"/>
                Africa: <input type="radio" name="continente" value="Africa"/>
                Oceania: <input type="radio" name="continente" value="Oceania"/>
            </p>
            <p>
                Url: <input type="url" name="url"/>
            </p>
            <textarea></textarea><br>
            
            Peliculas:
            <select name="peliculas">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="Gran Torini">Gran Torino</option>
            </select>
            <br>
            
        <input type="submit" value="Enviar"/>
        </form>
    </body>

