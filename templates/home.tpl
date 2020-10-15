{include file="header.tpl"}
{include file="button_logout.tpl"}

    <h1>{$tituloH}</h1>
        <form action="insert" method="post">
        <input class="cssGeneral" type="text" name="title" placeholder="Inserte titulo">
            <input class="cssGeneral" type="number" name="anio" placeholder="Inserte año">
            <select class="cssGeneral" name="pais" >
                <option value="Argentina">Argentina</option>
                <option value="Estados Unidos">Estados Unidos</option>
                <option value="Chile">Chile</option>
                <option value="Japon">Japon</option>
                <option value="Canada">Canada</option>
                <option value="España">España</option>
            </select>
            <input class="cssGeneral" type="text" name="director_a" placeholder="Inserte director/a">
            <input class="cssGeneral" type="number" name="calif" placeholder="Inserte calficacion">
            <select class="cssGeneral" name="genero" >
                {foreach $peliculas as $pelicula}
                    $pelicula->nombre;
                    <option value={$pelicula->id_genero}>{$pelicula->nombre}</option>
                {/foreach}
                </select>
            <button type="submit">{$Enviar}</button>
        </form>
        <div>
          <button><a href="showAll" >Mostrar todas las peliculas</a></button>
          <button><a href="showAllGenres" >Mostrar todos los generos</a></button>
        </div>
        <h1>{$titulo2}</h1>
        <form action="crearGenero" method="post">
            <label for="Categoria">{$genero}</label>
            <input class="cssGeneral" type="text" name="generoCrear" placeholder="Ingrese genero">
            <button type="submit">{$Enviar}</button>
        </form>

        <h1>{$titulo}</h1>
        <form action="selectByGenre" method="post">
            <label for="genero">{$genero}</label>
            <select class="cssGeneral" name="genero2" >
            {foreach from =$peliculas item=pelicula}
                $pelicula->nombre;
                <option value={$pelicula->nombre}>{$pelicula->nombre}</option>
            {/foreach}
            </select>
        <button type="submit">{$Enviar}</button>
        </form>

        <form action="buscarPorNombre" method="post">
            <label for="nombre">Nombre</label>
            <input class="cssGeneral" type="text" name="nombrePelicula" placeholder="Ingrese nombre">
            <button type="submit">{$Enviar}</button>
        </form>

        <form action="buscarPorAnio" method="post">
            <label for="año">{$anio}</label>
            <input class="cssGeneral" type="number" name="anio" placeholder="Ingrese año">
            <button type="submit">{$Enviar}</button>
        </form>

        <form action="buscarPorPais" method="post">
            <label for="Pais">{$pais}</label>
            <select class="cssGeneral" name="pais2" >
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
            <input class="cssGeneral" type="text" name="direccion" placeholder="Ingrese director/a">
            <button type="submit">{$Enviar}</button>
        </form>

        <form action="buscarPorCalificacion" method="post">
            <label for="Calificacion">{$calif}</label>
            <input class="cssGeneral" type="number" name="calificacion" placeholder="Ingrese calificacion">
            <button type="submit">{$Enviar}</button>
        </form>
  </div>
{include file="footer.tpl"}
