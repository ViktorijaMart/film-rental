<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    {block name="css"}
        <link rel="stylesheet" type="text/css" href="./src/assets/CSS/pageNotFound.css" media="all" />
    {/block}
</head>
<body>
{include file='./header.tpl' title='Header'}
{include file='./navigation.tpl' title='Navigation'}
<main>
    <div class="error">
        <img src="https://static.thenounproject.com/png/1527904-200.png">
        <h1>404</h1>
        <h2>Page not Found</h2>
        <a href="/FilmRentalProject/">Go back to Actors</a>
    </div>
</main>
{include file="./footer.tpl" title="Footer"}
</body>
</html>