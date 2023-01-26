<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    {block name="css"}
        <link rel="stylesheet" type="text/css" href="./src/assets/CSS/filmInfo.css" media="all" />
    {/block}
</head>
<body>
{include file='./header.tpl' title='Header'}
{include file='./navigation.tpl' title='Navigation'}
<main>
    <div id="film-info">
        <img class="film-poster" src="./src/assets/img/Poster.png">
        <div class="film-info_info">
            <div class="title-and-info">
                <h1 class="film-title">{$filmInfo.title}</h1>
                <p>{$filmInfo.release_year}</p>
                <p>{$filmInfo.length} min</p>
            </div>
            <hr>
            <div class="film-details">
                <div>
                    <p>Category</p>
                    <hr>
                    <p>{$filmCategory.name}</p>
                </div>
                <div class="rating">
                    <p>Rating</p>
                    <hr>
                    <p>{$filmInfo.rating}</p>
                </div>
                <div>
                    <p>Language</p>
                    <hr>
                    <p>{$filmInfo.name}</p>
                </div>
            </div>
            <p class="description">{$filmInfo.description}</p>
            <button id="rent">
                <div class="rent-price">
                    <p>ONLY {$filmInfo.rental_rate} &euro;</p>
                    <p>RENT</p>
                </div>
                <p class="includes">Includes: {$filmInfo.special_features}</p>
            </button>

        </div>
    </div>
    <div id="film-actors">
        <h1>Actors</h1>
        <hr>
        <div class="actors">
            {foreach $filmActors as $actor}
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
    </div>
</main>
{include file="./footer.tpl" title="Footer"}
</body>
</html>