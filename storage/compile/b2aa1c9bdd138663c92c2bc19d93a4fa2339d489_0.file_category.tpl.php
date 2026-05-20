<?php
/* Smarty version 5.8.0, created on 2026-05-20 08:35:57
  from 'file:category.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0d726dbef6c3_68100747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2aa1c9bdd138663c92c2bc19d93a4fa2339d489' => 
    array (
      0 => 'category.tpl',
      1 => 1779266153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0d726dbef6c3_68100747 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->getValue('category')['name'];?>
 - Blogy.</title>
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
            <h2><?php echo $_smarty_tpl->getValue('category')['name'];?>
</h2>

            <div class="sorting-links">
                <a href="?sort=date" class="view-all <?php if ($_smarty_tpl->getValue('sort') == 'date') {?>active<?php }?>">Sort by date</a>
                <span class="divider">|</span>
                <a href="?sort=views" class="view-all <?php if ($_smarty_tpl->getValue('sort') == 'views') {?>active<?php }?>">Sort by views</a>
            </div>
        </div>

        <?php if ($_smarty_tpl->getValue('category')['description']) {?>
            <p class="category-description">
                <?php echo $_smarty_tpl->getValue('category')['description'];?>

            </p>
        <?php }?>

        <div class="posts-grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>
                <article class="post-card">

                    <div class="post-image-wrapper">
                        <img src="<?php echo (($tmp = $_smarty_tpl->getValue('post')['image'] ?? null)===null||$tmp==='' ? '/assets/images/placeholder.jpg' ?? null : $tmp);?>
"
                             class="post-image"
                             alt="<?php echo $_smarty_tpl->getValue('post')['title'];?>
">
                    </div>

                    <div class="post-content">
                        <h3 class="post-title"><?php echo $_smarty_tpl->getValue('post')['title'];?>
</h3>

                        <div class="post-meta">
                            <span class="post-views"><?php echo $_smarty_tpl->getValue('post')['views'];?>
 views</span>
                            <?php if ($_smarty_tpl->getValue('post')['created_at']) {?>
                                <span class="post-date-divider">•</span>
                                <span class="post-date"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['created_at'],"%B %e, %Y");?>
</span>
                            <?php }?>
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

        <hr class="section-divider">

        <div class="pagination">
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('pages')+1) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_start = min(1, $__section_i_0_loop);
$__section_i_0_total = min(($__section_i_0_loop - $__section_i_0_start), $__section_i_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new \Smarty\Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_0_start; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <a href="?page=<?php echo ($_smarty_tpl->getValue('__smarty_section_i')['index'] ?? null);?>
&sort=<?php echo $_smarty_tpl->getValue('sort');?>
"
                   class="pagination-item <?php if (($_smarty_tpl->getValue('__smarty_section_i')['index'] ?? null) == $_smarty_tpl->getValue('currentPage')) {?>active<?php }?>">
                    <?php echo ($_smarty_tpl->getValue('__smarty_section_i')['index'] ?? null);?>

                </a>
            <?php
}
}
?>
        </div>

    </div>
</main>

<footer class="site-footer">
    <div class="footer-container">
        <p class="copyright">Copyright © 2026. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html><?php }
}
