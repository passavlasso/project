<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$post.title} - Blogy.</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- HEADER -->
<header class="site-header">
    <div class="header-container">
        <a href="/" class="logo">Blogy.</a>
    </div>
</header>

<main class="content-container">

    <article class="category-section">

        <h1 class="post-title">{$post.title}</h1>

        <div class="post-meta">
            <span class="post-views">{$post.views} views</span>

            {if $post.created_at}
                <span class="post-date-divider">•</span>
                <span class="post-date">
                    {$post.created_at|date_format:"%B %e, %Y"}
                </span>
            {/if}
        </div>

        <div class="post-image-wrapper">
            <img src="{$post.image|default:'/assets/images/placeholder.jpg'}"
                 class="post-image"
                 alt="{$post.title}">
        </div>

        <p class="post-excerpt">
            {$post.description}
        </p>

        <div class="post-content">
            {$post.content}
        </div>

    </article>

    <hr class="section-divider">

    <!-- RELATED POSTS -->
    {if $related|@count > 0}
        <h3>Related posts</h3>

        <div class="posts-grid">

            {foreach $related as $item}
                <article class="post-card">

                    <div class="post-image-wrapper">
                        <img src="{$item.image|default:'/assets/images/placeholder.jpg'}"
                             class="post-image"
                             alt="{$item.title}">
                    </div>

                    <h3 class="post-title">{$item.title}</h3>

                    <div class="post-meta">
                        <span>{$item.views} views</span>
                    </div>

                    <a href="/post/{$item.id}" class="read-more">
                        Read more →
                    </a>

                </article>
            {/foreach}

        </div>
    {/if}

</main>

<!-- FOOTER -->
<footer class="site-footer">
    <div class="footer-container">
        <p class="copyright">
            Copyright © 2026. All Rights Reserved.
        </p>
    </div>
</footer>

</body>
</html>