<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blogy.</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="header-container">
        <a href="/" class="logo">Blogy.</a>
    </div>
</header>

<main class="content-container">
    {foreach $data as $item}
        <div class="category-section">
            <div class="category-header">
                <h2>{$item.category.name}</h2>
                <a href="/category/{$item.category.id}" class="view-all">View All</a>
            </div>

            <div class="posts-grid">
                {foreach $item.posts as $post}
                    <article class="post-card">

                        <div class="post-image-wrapper">
                            <img src="{$post.image|default:'/assets/images/placeholder.jpg'}"
                                 alt="{$post.title}"
                                 class="post-image">
                        </div>

                        <div class="post-content">
                            <h3 class="post-title">{$post.title}</h3>

                            <div class="post-meta">
                                <span class="post-date">{$post.created_at|date_format:"%B %e, %Y"}</span>
                            </div>

                            <p class="post-excerpt">
                                {$post.description}
                            </p>

                            <a href="/post/{$post.id}" class="read-more">
                                Continue Reading
                            </a>
                        </div>

                    </article>
                {/foreach}
            </div>
        </div>

        <hr class="section-divider">
    {/foreach}
</main>

<footer class="site-footer">
    <div class="footer-container">
        <p class="copyright">Copyright © 2026. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>