<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    {block name="css"}
        <link rel="stylesheet" type="text/css" href="./src/assets/CSS/homePage.css" media="all" />
    {/block}
</head>
<body>
{include file='./header.tpl' title='Header'}
<main>
    <div class="search">
        <h2>Actors</h2>
        <form>
            <input type="text" placeholder="Search actors">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="actors">
        {foreach $actors as $actor}
            <div class="actor">
                <img src="https://hccryde.syd.catholic.edu.au/wp-content/uploads/sites/148/2019/05/Person-icon.jpg">
                <form method="post" action="/FilmRentalProject/actorInfo">
                    <input type="hidden" name="id" value={$actor.id}>
                    <button type="submit" class="actor-form">
                        <p>{$actor.first_name}</p>
                        <p>{$actor.last_name}</p>
                    </button>
                </form>
            </div>
        {/foreach}
    </div>
</main>
{include file="./footer.tpl" title="Footer"}
</body>
</html>
