{include file="header.tpl"}
    <h1>{$titulo}</h1>
    
    <table>
           <thead>
               <tr>
                   <th>{$G}</th>
               </tr>
           </thead>
       <tbody>
        {foreach $generos as $genero} 
                <tr>
                    <td> {$genero->nombre} </td>
                    <td><button>{$eliminar}</button></td>
                    <td><button>{$editar}</button></td>
                </tr>
        {/foreach}
        </tbody>    
    </table>
{include file="footer.tpl"}   