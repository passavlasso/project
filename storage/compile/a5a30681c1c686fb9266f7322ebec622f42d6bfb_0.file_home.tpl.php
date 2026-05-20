<?php
/* Smarty version 5.8.0, created on 2026-05-20 08:33:27
  from 'file:home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0d71d7d4c013_15849319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5a30681c1c686fb9266f7322ebec622f42d6bfb' => 
    array (
      0 => 'home.tpl',
      1 => 1779266004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0d71d7d4c013_15849319 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?><!DOCTYPE html>
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
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
        <div class="category-section">
            <div class="category-header">
                <h2><?php echo $_smarty_tpl->getValue('item')['category']['name'];?>
</h2>
                <a href="/category/<?php echo $_smarty_tpl->getValue('item')['category']['id'];?>
" class="view-all">View All</a>
            </div>

            <div class="posts-grid">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('item')['posts'], 'post');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>
                    <article class="post-card">

                        <div class="post-image-wrapper">
                            <img src="<?php echo (($tmp = $_smarty_tpl->getValue('post')['image'] ?? null)===null||$tmp==='' ? '/assets/images/placeholder.jpg' ?? null : $tmp);?>
"
                                 alt="<?php echo $_smarty_tpl->getValue('post')['title'];?>
"
                                 class="post-image">
                        </div>

                        <div class="post-content">
                            <h3 class="post-title"><?php echo $_smarty_tpl->getValue('post')['title'];?>
</h3>

                            <div class="post-meta">
                                <span class="post-date"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['created_at'],"%B %e, %Y");?>
</span>
                            </div>

                            <p class="post-excerpt">
                                <?php echo $_smarty_tpl->getValue('post')['description'];?>

                            </p>

                            <a href="/post/<?php echo $_smarty_tpl->getValue('post')['id'];?>
" class="read-more">
                                Continue Reading
                            </a>
                        </div>

                    </article>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>

        <hr class="section-divider">
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</main>

<footer class="site-footer">
    <div class="footer-container">
        <p class="copyright">Copyright © 2026. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html><?php }
}
