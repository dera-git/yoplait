<!DOCTYPE html>
<html lang="fr">

<head>
  <script src="https://tarteaucitron.io/load.js?domain=yoplait.fr&uuid=4bcae7b811fbcebc96fd533c94de30b6cef93ca7"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZKVBTQTF28"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-ZKVBTQTF28');
  </script>
</head>

<body <?php body_class();?>>

  <div class="kl-wrapper-globals">
    <header class="kl-header kl-header-page sticky-top">
      <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container-fluid">
          <a class="navbar-brand kl-nav-brand-page me-0 py-0 order-md-1 order-2" href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/new-logo-yoplait.jpg" class="img-fluid" alt="logo-header"></a>
          <button class="navbar-toggler kl-navbar-toogler order-lg-4 order-3" type="button" data-bs-toggle="collapse" data-bs-target="#id-navbar-collapse" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="kl--navbar-toggler">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
                <path d="M26.1191 7.37796C25.5623 7.15756 24.8623 7.3017 24.2326 7.37735C18.2959 8.08751 12.4743 8.25696 6.68135 8.27753C5.47854 8.28175 4.33221 8.19088 3.22803 8.0047C2.94028 7.95582 2.65553 7.89549 2.39689 7.8129C1.65554 7.57492 1.00328 7.25151 1.25969 6.56889C1.50336 5.92092 2.35024 5.61804 3.21234 5.42029C4.22135 5.18922 5.24589 5.05665 6.24719 5.03525C11.1193 4.92998 16.0275 4.71947 20.7635 5.04517C22.6121 5.17116 24.4134 5.38708 26.3226 5.39492C27.9628 5.402 28.135 6.21152 26.8111 7.21599L26.1191 7.37796Z" fill="#E52D16"/>
                <path d="M2.7715 15.2805C3.32834 15.0601 4.02834 15.2043 4.65804 15.2799C10.5947 15.9901 16.4163 16.1596 22.2093 16.1801C23.4121 16.1843 24.5584 16.0935 25.6626 15.9073C25.9503 15.8584 26.2351 15.7981 26.4937 15.7155C27.2351 15.4775 27.8873 15.1541 27.6309 14.4715C27.3873 13.8235 26.5404 13.5206 25.6783 13.3229C24.6693 13.0918 23.6447 12.9592 22.6434 12.9378C17.7713 12.8326 12.8632 12.6221 8.12716 12.9478C6.27857 13.0737 4.4772 13.2897 2.56807 13.2975C0.9278 13.3046 0.755666 14.1141 2.07951 15.1186L2.7715 15.2805Z" fill="#E52D16"/>
                <path d="M26.1191 23.1826C25.5623 22.9622 24.8623 23.1064 24.2326 23.182C18.2959 23.8922 12.4743 24.0617 6.68135 24.0822C5.47854 24.0864 4.33221 23.9956 3.22803 23.8094C2.94028 23.7605 2.65553 23.7002 2.39689 23.6176C1.65554 23.3796 1.00328 23.0562 1.25969 22.3736C1.50336 21.7256 2.35024 21.4227 3.21234 21.225C4.22135 20.9939 5.24589 20.8613 6.24719 20.8399C11.1193 20.7347 16.0275 20.5242 20.7635 20.8499C22.6121 20.9758 24.4134 21.1918 26.3226 21.1996C27.9628 21.2067 28.135 22.0162 26.8111 23.0207L26.1191 23.1826Z" fill="#E52D16"/>
              </svg>
            </span>
          </button>
          <div class="collapse navbar-collapse order-md-2 order-3 kl-navbar-collapse" id="id-navbar-collapse">
            <?php
            wp_nav_menu(array(
              'theme_location'    => 'menu_rse',
              'container'       => false,
              'menu_class'      => 'navbar-nav kl-navbar-nav mx-auto align-items-md-center',
              'depth'           => 2,
              'fallback_cb' => '__return_false',
              'walker'          => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
          </div>
          <div class="kl-search order-md-3 order-1">
            <button class="kl-button-not-bg p-0">
              <a href="<?php the_permalink(get_page_by_path('recherche')); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-globals/icon-search.svg" class="img-fluid" alt="icon-search">
              </a>
            </button>
          </div>
        </div>
      </nav>
    </header>