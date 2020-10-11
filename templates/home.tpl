{include file="header.tpl"}
{include file="button_logout.tpl"}

<p>Agregue sus peliculas favoritas</p>

        <form action="insert" method="post">
        <input type="text" name="title" placeholder="inserte titulo">
            <input type="number" name="anio" placeholder="inserte año">
            <select name="pais" >
                <option value="Argentina">Argentina</option>
                <option value="Estados Unidos">Estados Unidos</option>
                <option value="Chile">Chile</option>
                <option value="Japon">Japon</option>
                <option value="Canada">Canada</option>
                <option value="España">España</option>
            </select>
            <input type="text" name="director_a" placeholder="inserte director/a">
            <input type="number" name="calif" placeholder="inserte calficacion">
            <select name="genero" >
                {foreach $peliculas as $pelicula} 
                    $pelicula->nombre;
                    <option value={$pelicula->id_genero}>{$pelicula->nombre}</option>
                {/foreach}
                </select>
            <button type="submit">{$Enviar}</button>
        </form>
        <a href="showAll" >MOSTRAR TODAS LAS PELIS</a>
        <a href="showAllGenres" >MOSTRAR TODOS LOS GÉNEROS</a>

        <h2>{$titulo2}</h2>
        <form action="crearGenero" method="post">
            <label for="Categoria">{$genero}</label>
            <input type="text" name="generoCrear">
            <button type="submit">{$Enviar}</button>
        </form>
        
        <h1>{$titulo}</h1>
        <form action="selectByGenre" method="post">
            <label for="genero">{$genero}</label>
            <select name="genero2" >
            {foreach from =$peliculas item=pelicula} 
                $pelicula->nombre;
                <option value={$pelicula->nombre}>{$pelicula->nombre}</option>
            {/foreach}    
            </select>
        <button type="submit">{$Enviar}</button>
        </form>

        <form action="buscarPorNombre" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombrePelicula">
            <button type="submit">{$Enviar}</button>
        </form>

        <form action="buscarPorAnio" method="post">
            <label for="año">{$anio}</label>
            <input type="number" name="anio">
            <button type="submit">{$Enviar}</button>
        </form>

        <form action="buscarPorPais" method="post">
            <label for="Pais">{$pais}</label>
            <select name="pais2" >
                <option value="Argentina">Argentina</option>
                <option value="Estados Unidos">Estados Unidos</option>
                <option value="Chile">Chile</option>
                <option value="Japon">Japon</option>
                <option value="Canada">Canada</option>
                <option value="España">España</option>
            </select>
            <button type="submit">{$Enviar}</button>
        </form>

        <form action="buscarPorDireccion" method="post">
            <label for="Direccion">{$direccion}</label>
            <input type="text" name="direccion">
            <button type="submit">{$Enviar}</button>
        </form>

        <form action="buscarPorCalificacion" method="post">
            <label for="Calificacion">{$calif}</label>
            <input type="number" name="calificacion">
            <button type="submit">{$Enviar}</button>
        </form>

{include file="footer.tpl"}        