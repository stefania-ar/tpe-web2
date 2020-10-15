{include file="header.tpl"}

{foreach $peliculas as $pelicula}

    <form action="editarDesdeForm/{$pelicula->id}" method="post">
        <input class="cssGeneral" type="text" name="title" placeholder="inserte titulo" value="{$pelicula->titulo}">
        <input class="cssGeneral" type="number" name="anio" placeholder="inserte año" value="{$pelicula->anio}">
{/foreach}
        <select class="cssGeneral" name="pais" >
            <option value="Argentina">Argentina</option>
            <option value="Estados Unidos">Estados Unidos</option>
            <option value="Chile">Chile</option>
            <option value="Japon">Japon</option>
            <option value="Canada">Canada</option>
            <option value="España">España</option>
        </select>
        {foreach $peliculas as $pelicula}
            <input class="cssGeneral" type="text" name="director_a" placeholder="inserte director/a" value="{$pelicula->director_a}">

            <input class="cssGeneral" type="number" name="calif" placeholder="inserte calficacion" value="{$pelicula->calificacion}">
        {/foreach}
        <select class="cssGeneral" name="genero" >
            {foreach $generos as $genero}
                <option value={$genero->id_genero}>{$genero->nombre}</option>
            {/foreach}
            </select>
        <button type="submit">{$Enviar}</button>
    </form>



{include file="footer.tpl"}
