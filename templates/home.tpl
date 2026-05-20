<h1>Home Page</h1>

{foreach $data as $item}
    <h2>{$item.category.name}</h2>

    <ul>
        {foreach $item.posts as $post}
            <li>
                <b>{$post.title}</b> - {$post.views} views
            </li>
        {/foreach}
    </ul>
{/foreach}