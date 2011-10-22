<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $sf_user->getCulture() ?>" lang="<?php echo $sf_user->getCulture() ?>">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div>
      <ul>
        <li><?php echo link_to_unless(($sf_request->getParameter('module') == 'default') && ($sf_request->getParameter('action') == 'index'),'Home','@homepage') ?></li>
        <li><?php echo link_to('View Users','@sf_guard_profile') ?></li>
        <?php if ($sf_user->isAuthenticated()): ?>
        <li><?php echo link_to('Edit Profile','sf_guard_profile_edit',$sf_user->getGuardUser()) ?></li>
        <li><?php echo link_to('Signout','@sf_guard_signout') ?></li>
        <?php else: ?>
        <li><?php echo link_to('Register','@sf_guard_register') ?></li>
        <li><?php echo link_to('Signin','@sf_guard_signin') ?></li>
        <?php endif; ?>
      </ul>
    </div>
    <?php echo $sf_content ?>
  </body>
</html>
