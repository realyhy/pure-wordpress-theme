<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a blog page with a list of posts.">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>

    
</head>
<body <?php body_class(); ?>>

<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title"><?php bloginfo( 'name' ); ?></h1>
            <h2 class="brand-tagline"><?php bloginfo( 'description' ); ?></h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                  <!-- <a class="pure-button" href="http://purecss.io">Pure</a>-->
                    </li>
                    <li class="nav-item">
                     <!--   <a class="pure-button" href="http://yuilibrary.com">YUI Library</a>-->
                    </li>
                </ul>
            </nav>
        </div>
    </div>
