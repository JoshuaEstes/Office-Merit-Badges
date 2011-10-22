<?php

/**
 *
 */

/* @var $pager sfDoctrinePager */
/* @var $sfGuardUser sfGuardUser */
?>

<table>
  <tbody>
    <?php foreach($pager->getResults() as $sfGuardUser): ?>
    <tr>
      <td><?php echo link_to($sfGuardUser->getUsername(),'sf_guard_profile_show',$sfGuardUser) ?></td>
      <td><?php echo $sfGuardUser->getFirstName() ?></td>
      <td><?php echo $sfGuardUser->getLastName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
  <thead>
    <tr>
      <th>Username</th>
      <th>First Name</th>
      <th>Last Name</th>
    </tr>
  </thead>
</table>
