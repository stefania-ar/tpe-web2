{include file="header.tpl"}

<form action="editar" method="post">
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



{include file="footer.tpl"}   