{include file="header.tpl"}
    <h1>{$titulo}</h1>
    <ul>
    {foreach $generos as $genero}
        <li> {$genero->nombre} </li>
    {/foreach}
    </ul>

{include file="footer.tpl"}   