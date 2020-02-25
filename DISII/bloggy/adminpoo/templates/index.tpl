<html>
    <head>
        {include file='head.tpl'}
    </head>
    <body>
        {include file='menu.tpl'}

        <div class="content">
            <h1>{$titre}</h1>
 {include file={$tpl}}
        </div>
        {include file='script.tpl'}
    </body>
</html>