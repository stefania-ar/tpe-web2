{include file="header.tpl"}
{include file="button_home.tpl"}

    <h1>{$titulo}</h1>

    <table>
           <thead>
               <tr>
                   <th>{$G}</th>
                   <th>Eliminar</th>
                   <th>Editar</th>
               </tr>
           </thead>
       <tbody>
        {foreach $generos as $genero}
                <tr>
                    <td> {$genero->nombre} </td>
                    <td><button><a href="borrar_genero/{$genero->id_genero}"> {$eliminar}</a></button></td>
                    <td><button><a href="editar_genero/{$genero->id_genero}"> {$editar}</a></button></td>
                </tr>
        {/foreach}
        </tbody>
    </table>


{include file="footer.tpl"}
