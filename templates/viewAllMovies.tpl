{include file="header.tpl"}
{include file="button_home.tpl"}

    <table>
           <thead>
               <tr>
                   <th>{$titulo}</th>
                   <th>{$Anio}</th>
                   <th>{$Pais}</th>
                   <th>{$Director_a}</th>
                   <th>{$Calificacion}</th>
                   <th>{$Genero}</th>
               </tr>
           </thead>
       <tbody>
        {foreach $peliculas as $pelicula}
                <tr>
                    <td>{$pelicula->titulo}</td>
                    <td>{$pelicula->anio}</td>
                    <td>{$pelicula->pais}</td>
                    <td>{$pelicula->director_a}</td>
                    <td>{$pelicula->calificacion}</td>
                    <td>{$pelicula->nombre}</td>
                </tr>
        {/foreach}
        </tbody>
    </table>


{include file="footer.tpl"}
