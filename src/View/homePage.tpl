<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    {block name="js"}
        <script src="./src/assets/JS/homePage.js" defer></script>
    {/block}
    {block name="css"}
        <link rel="stylesheet" type="text/css" href="./src/assets/CSS/homePage.css" media="all" />
    {/block}
</head>
<body>
{include file='./header.tpl' title='Header'}
<main>
    <div class="search">
        <h2>Actors</h2>
        <form method="post" action="/FilmRentalProject/">
            <select name="sort" >
                <option>Sort</option>
                <option value="aToZ">A to Z</option>
                <option value="zToA">Z to A</option>
            </select>
        </form>
        <form method="post" action="/FilmRentalProject/">
            <input type="text" name="actorName" placeholder="Search actors">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="actors" id="paginated-list">
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
    <nav class="pagination-container">
        <button class="pagination-button" id="prev-button" title="Previous page" aria-label="Previous page">
            &lt;
        </button>

        <div id="pagination-numbers">
        </div>

        <button class="pagination-button" id="next-button" title="Next page" aria-label="Next page">
            &gt;
        </button>
    </nav>
</main>
{include file="./footer.tpl" title="Footer"}
</body>
</html>
