<?php
/**
 * Shared AdminLTE 3 layout — top half: <head>, top navbar, sidebar, page header.
 *
 * Before including, a page may set:
 *   $pageTitle     (string)  page heading and <title> — plain text, use t()
 *   $pageSubtitle  (string)  optional line under the heading
 *   $extraHead     (string)  optional extra <head> markup (e.g. an editor's CSS)
 *
 * After the page content, include partials/footer.php, then the page's own
 * <script> tags (jQuery / Bootstrap / AdminLTE are loaded by the footer), then
 * close </body></html>. Translations come from lang.php (loaded by db.php).
 */
if (realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) { http_response_code(404); exit; }

$pageTitle    = $pageTitle ?? t('app.admin');
$pageSubtitle = $pageSubtitle ?? '';
$adminCurrent = basename($_SERVER['PHP_SELF']);
$adminUser    = $_SESSION['admin_username'] ?? '';

$adminNav = [
    ['header' => t('nav.h.subscribers')],
    ['href' => 'dashboard.php',              'icon' => 'fas fa-tachometer-alt',     'label' => t('nav.dashboard')],
    ['href' => 'contacts.php',               'icon' => 'fas fa-envelope-open-text', 'label' => t('nav.contacts')],
    ['href' => 'newsletter-subscribers.php', 'icon' => 'fas fa-users',              'label' => t('nav.subscribers')],
    ['header' => t('nav.h.newsletter')],
    ['href' => 'send-newsletter.php',        'icon' => 'fas fa-paper-plane',        'label' => t('nav.send')],
    ['href' => 'newsletter-history.php',     'icon' => 'fas fa-history',            'label' => t('nav.history')],
    ['header' => t('nav.h.reports')],
    ['href' => 'analytics-report.php',       'icon' => 'fas fa-chart-bar',          'label' => t('nav.analytics')],
    ['header' => t('nav.h.account')],
    ['href' => 'change-password.php',        'icon' => 'fas fa-key',                'label' => t('nav.password')],
    ['href' => 'logout.php',                 'icon' => 'fas fa-sign-out-alt',       'label' => t('nav.logout')],
];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars(admin_lang()) ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />
  <title><?= htmlspecialchars($pageTitle) ?> | <?= te('app.name') ?></title>
  <link rel="icon" type="image/webp" href="../assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css" />
  <?= $extraHead ?? '' ?>
  <link rel="stylesheet" href="css/admin.css?v=4" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Top navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" aria-label="<?= te('nav.toggle') ?>"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link"><?= te('nav.home') ?></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../" class="nav-link" target="_blank" rel="noopener"><?= te('nav.view_site') ?> <i class="fas fa-external-link-alt fa-xs"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- Language switch -->
      <li class="nav-item dropdown">
        <a class="nav-link lang-toggle" data-toggle="dropdown" href="#" role="button" aria-label="<?= te('nav.language') ?>" title="<?= te('nav.language') ?>">
          <i class="fas fa-globe"></i>
          <span class="lang-toggle__label"><?= htmlspecialchars(ADMIN_LANGS[admin_lang()]) ?></span>
          <i class="fas fa-caret-down fa-xs"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <span class="dropdown-header"><?= te('nav.language') ?></span>
          <?php foreach (ADMIN_LANGS as $code => $name): ?>
            <a href="<?= htmlspecialchars(admin_lang_url($code)) ?>" class="dropdown-item d-flex align-items-center<?= admin_lang() === $code ? ' active' : '' ?>" lang="<?= $code ?>">
              <span class="lang-code mr-2"><?= strtoupper($code) ?></span><?= htmlspecialchars($name) ?>
              <?php if (admin_lang() === $code): ?><i class="fas fa-check ml-auto pl-3"></i><?php endif; ?>
            </a>
          <?php endforeach; ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button" aria-label="<?= te('nav.fullscreen') ?>"><i class="fas fa-expand-arrows-alt"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-label="<?= te('nav.account') ?>">
          <i class="far fa-user-circle mr-1"></i><span class="d-none d-md-inline"><?= htmlspecialchars($adminUser) ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <span class="dropdown-header"><?= te('nav.logged_in_as', ['user' => $adminUser]) ?></span>
          <div class="dropdown-divider"></div>
          <a href="change-password.php" class="dropdown-item"><i class="fas fa-key mr-2 text-muted"></i><?= te('nav.password') ?></a>
          <div class="dropdown-divider"></div>
          <a href="logout.php" class="dropdown-item text-danger"><i class="fas fa-sign-out-alt mr-2"></i><?= te('nav.logout') ?></a>
        </div>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="dashboard.php" class="brand-link">
      <img src="../assets/img/logo.webp" alt="A CAN SOLUTIONS" class="brand-image img-circle elevation-3" />
      <span class="brand-text font-weight-bold"><?= te('app.short') ?></span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
          <span class="admin-avatar elevation-2"><?= htmlspecialchars(mb_strtoupper(mb_substr($adminUser !== '' ? $adminUser : 'A', 0, 1, 'UTF-8'), 'UTF-8')) ?></span>
        </div>
        <div class="info">
          <a href="change-password.php" class="d-block"><?= htmlspecialchars($adminUser) ?></a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <?php foreach ($adminNav as $item): ?>
            <?php if (isset($item['header'])): ?>
              <li class="nav-header"><?= htmlspecialchars($item['header']) ?></li>
            <?php else: ?>
              <li class="nav-item">
                <a href="<?= htmlspecialchars($item['href']) ?>" class="nav-link<?= $adminCurrent === $item['href'] ? ' active' : '' ?>">
                  <i class="nav-icon <?= htmlspecialchars($item['icon']) ?>"></i>
                  <p><?= htmlspecialchars($item['label']) ?></p>
                </a>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 align-items-center">
          <div class="col-sm-7">
            <h1 class="m-0"><?= htmlspecialchars($pageTitle) ?></h1>
            <?php if ($pageSubtitle !== ''): ?>
              <p class="text-muted mb-0 mt-1 small"><?= htmlspecialchars($pageSubtitle) ?></p>
            <?php endif; ?>
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php"><?= te('nav.home') ?></a></li>
              <li class="breadcrumb-item active"><?= htmlspecialchars($pageTitle) ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
