<?php 
  $directeur  = get_query_var('directeur');
  $adresse    = get_query_var('adresse');
  $horaires   = get_query_var('horaires');

?>

<ul class="infos">
  <?php if ( $directeur['value'] ) : ?>
  <li class="infos__row">
    <span class="infos__label"><?php echo $directeur['label']; ?></span>
    <span class="infos__value"><?php echo $directeur['value']; ?></span>
  </li>
  <?php endif; ?>

  <?php if ( $adresse['value'] ) : ?>
  <li class="infos__row">
    <span class="infos__label"><?php echo $adresse['label']; ?></span>
    <span class="infos__value"><?php echo $adresse['value']['address']; ?> — <?php echo $adresse['value']['post_code']; ?> <?php echo $adresse['value']['city']; ?></span>
  </li>
  <?php endif; ?>

  <?php if ( $horaires['value'] ) : ?>
  <li class="infos__row">
    <span class="infos__label"><?php echo $horaires['label']; ?></span>
    <span class="infos__value"><?php echo $horaires['value']; ?></span>
  </li>
  <?php endif; ?>
</ul>