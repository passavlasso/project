<?php
/* Smarty version 5.8.0, created on 2026-05-20 08:52:30
  from 'file:post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0d764e1da564_28338069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '812a51a8dba82ac53408191b0860ae9f8d5c4e7c' => 
    array (
      0 => 'post.tpl',
      1 => 1779267147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0d764e1da564_28338069 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->getValue('post')['title'];?>
 - Blogy.</title>
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

        <h1 class="post-title"><?php echo $_smarty_tpl->getValue('post')['title'];?>
</h1>

        <div class="post-meta">
            <span class="post-views"><?php echo $_smarty_tpl->getValue('post')['views'];?>
 views</span>

            <?php if ($_smarty_tpl->getValue('post')['created_at']) {?>
                <span class="post-date-divider">•</span>
                <span class="post-date">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['created_at'],"%B %e, %Y");?>

                </span>
            <?php }?>
        </div>

        <div class="post-image-wrapper">
            <img src="<?php echo (($tmp = $_smarty_tpl->getValue('post')['image'] ?? null)===null||$tmp==='' ? '/assets/images/placeholder.jpg' ?? null : $tmp);?>
"
                 class="post-image"
                 alt="<?php echo $_smarty_tpl->getValue('post')['title'];?>
">
        </div>

        <p class="post-excerpt">
            <?php echo $_smarty_tpl->getValue('post')['description'];?>

        </p>

        <div class="post-content">
            <?php echo $_smarty_tpl->getValue('post')['content'];?>

        </div>

    </article>

    <hr class="section-divider">

    <!-- RELATED POSTS -->
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('related')) > 0) {?>
        <h3>Related posts</h3>

        <div class="posts-grid">

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('related'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                <article class="post-card">

                    <div class="post-image-wrapper">
                        <img src="<?php echo (($tmp = $_smarty_tpl->getValue('item')['image'] ?? null)===null||$tmp==='' ? '/assets/images/placeholder.jpg' ?? null : $tmp);?>
"
                             class="post-image"
                             alt="<?php echo $_smarty_tpl->getValue('item')['title'];?>
">
                    </div>

                    <h3 class="post-title"><?php echo $_smarty_tpl->getValue('item')['title'];?>
</h3>

                    <div class="post-meta">
                        <span><?php echo $_smarty_tpl->getValue('item')['views'];?>
 views</span>
                    </div>

                    <a href="/post/<?php echo $_smarty_tpl->getValue('item')['id'];?>
" class="read-more">
                        Read more →
                    </a>

                </article>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        </div>
    <?php }?>

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
</html><?php }
}
