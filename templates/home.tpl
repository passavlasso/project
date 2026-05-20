<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>

    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<h1>Home Page</h1>

{foreach $data as $item}
    <div class="category-section">
        <div class="category-header">
            <h2>{$item.category.name}</h2>
            <a href="#" class="view-all">View All</a>
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
                            <span>{$post.views} views</span>
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

</body>
</html>