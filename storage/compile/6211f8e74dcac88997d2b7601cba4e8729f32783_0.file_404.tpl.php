<?php
/* Smarty version 5.8.0, created on 2026-05-20 09:26:12
  from 'file:404.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0d7e34778245_64209534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6211f8e74dcac88997d2b7601cba4e8729f32783' => 
    array (
      0 => '404.tpl',
      1 => 1779269076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0d7e34778245_64209534 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 - Page Not Found</title>

    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="header-container">
        <a href="/" class="logo">Blogy.</a>
    </div>
</header>

<main class="content-container">

    <div class="error-page">

        <h1 class="error-code">404</h1>

        <h2 class="error-title">
            Page Not Found
        </h2>

        <p class="error-description">
            The page you are looking for does not exist
            or has been moved.
        </p>

        <a href="/" class="read-more">
            ← Back to Home
        </a>

    </div>

</main>

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
