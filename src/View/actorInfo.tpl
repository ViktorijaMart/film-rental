<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    {block name="css"}
        <link rel="stylesheet" type="text/css" href="./src/assets/CSS/actorInfo.css" media="all" />
    {/block}
</head>
<body>
{include file='./header.tpl' title='Header'}
<main>
    <div id="actor_info">
        <img src="https://hccryde.syd.catholic.edu.au/wp-content/uploads/sites/148/2019/05/Person-icon.jpg">
        <div class="full-name">
            <h3>{$actor.first_name}</h3>
            <h3>{$actor.last_name}</h3>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos facilis impedit incidunt laudantium, magni omnis quod reiciendis reprehenderit tenetur voluptatibus! Culpa cum dolorem ea earum et hic nesciunt nihil quae quia repellendus. Laboriosam nulla officiis vitae. Aperiam consectetur cum eaque, ipsa molestias nobis officiis optio possimus repudiandae vel voluptatem voluptates?</p>
    </div>
    <div id="filmography">
        <h2>Filmography</h2>
    </div>
</main>
{include file="./footer.tpl" title="Footer"}
</body>
</html>