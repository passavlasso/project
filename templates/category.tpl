<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{$category.name} - Blogy.</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="header-container">
        <a href="/" class="logo">Blogy.</a>
    </div>
</header>

<main class="content-container">
    <div class="category-section">

        <div class="category-header">
            <h2>{$category.name}</h2>

            <div class="sorting-links">
                <a href="?sort=date" class="view-all {if $sort == 'date'}active{/if}">Sort by date</a>
                <span class="divider">|</span>
                <a href="?sort=views" class="view-all {if $sort == 'views'}active{/if}">Sort by views</a>
            </div>
        </div>

        {if $category.description}
            <p class="category-description">
                {$category.description}
            </p>
        {/if}

        <div class="posts-grid">
            {foreach $posts as $post}
                <article class="post-card">

                    <div class="post-image-wrapper">
                        <img src="{$post.image|default:'/assets/images/placeholder.jpg'}"
                             class="post-image"
                             alt="{$post.title}">
                    </div>

                    <div class="post-content">
                        <h3 class="post-title">{$post.title}</h3>

                        <div class="post-meta">
                            <span class="post-views">{$post.views} views</span>
                            {if $post.created_at}
                                <span class="post-date-divider">•</span>
                                <span class="post-date">{$post.created_at|date_format:"%B %e, %Y"}</span>
                            {/if}
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

        <hr class="section-divider">

        <div class="pagination">
            {section name=i start=1 loop=$pages+1}
                <a href="?page={$smarty.section.i.index}&sort={$sort}"
                   class="pagination-item {if $smarty.section.i.index == $currentPage}active{/if}">
                    {$smarty.section.i.index}
                </a>
            {/section}
        </div>

    </div>
</main>

<footer class="site-footer">
    <div class="footer-container">
        <p class="copyright">Copyright © 2026. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>