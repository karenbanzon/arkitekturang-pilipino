<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link href="<?php echo get_template_directory_uri() ?>/styles/font-hurme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/styles/style.css" rel="stylesheet">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicons/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="Accountable Now"/>
  <meta name="msapplication-TileColor" content="#F2B520" />
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/assets/favicons/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri() ?>/assets/favicons/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri() ?>/assets/favicons/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri() ?>/assets/favicons/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri() ?>/assets/favicons/mstile-310x310.png" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header>
      <nav class="flex items-center justify-between flex-wrap bg-white border-b-4 border-apprimary px-6 py-2">
        <div id="branding" class="flex flex-wrap items-center w-1/2 sm:w-1/2 md:w-1/3">
          <a href="<?php echo get_home_url() ?>" id="site-title" class="flex font-semibold text-xl text-grey-darkest tracking-tight pl-4 pr-6"><?php echo get_bloginfo( 'name' ); ?></a>
        </div>
        <div class="text-right w-1/2 sm:w-1/2 md:w-2/3 hidden lg:block">
          <nav id="main-nav">
            <ul class="list-reset">
              <li class="nav-item group inline-block px-2 py-4">
                <a href="<?php echo get_home_url() ?>/books/" class="block w-full lg:w-auto lg:flex pt-6 ml-3 lg:pt-1 lg:pl-6 text-grey hover:text-apprimary group-hover:text-apprimary">Books</a>
              </li>
              <li class="nav-item group inline-block px-2 py-4">
                <a href="<?php echo get_home_url() ?>/authors/" class="block w-full lg:w-auto lg:flex pt-6 ml-3 lg:pt-1 lg:pl-6 text-grey hover:text-apprimary group-hover:text-apprimary">Authors</a>
              </li>
              <li class="nav-item group inline-block px-2 py-4">
                <a href="<?php echo get_home_url() ?>/contact/" class="block w-full lg:w-auto lg:flex pt-6 ml-3 lg:pt-1 lg:pl-6 text-grey hover:text-apprimary group-hover:text-apprimary">Contact</a>
              </li>
              <li class="nav-item group inline-block pl-6 pr-2 py-4">
                <a href="<?php echo get_home_url() ?>/order/" class="bg-apprimary border border-apprimary hover:border-apprimary-dark hover:bg-apprimary-dark text-white font-semibold py-2 px-4 rounded">
                  Order
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="flex self-start w-2/4 sm:w-2/4 md:w-2/3 block lg:hidden">
          <button class="flex ml-auto items-center px-3 py-2 border rounded text-apprimary-lighter border-apprimary-light hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
      </nav>
    </header>
  </div>

  <section id="container" class="flex">