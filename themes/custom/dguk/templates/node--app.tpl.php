<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
      <?php if ($view_mode == "search_result"): ?>
        <h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
      <? else: ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <? endif; ?>
    <?php elseif ($title): ?>
      <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($display_submitted): ?>
      <?php if ($updated): ?>
        <span class="submitted">
          <?php print $updated; ?>
        </span>
      <?php endif; ?>

      <span class="submitted">
        <?php print $user_picture; ?>
        <?php print $submitted; ?>
      </span>

    <?php endif; ?>
  </header>

  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['links']);
    hide($content['field_comment']);
    print render($content);
  ?>
  <?php if ($view_mode != "search_result"): ?>
  <div class="disclaimer disclaimer-app">
    Apps submitted to data.gov.uk are currently approved for publication on the general level of their context and appropriateness.
    Whilst we review these on a periodical basis, we do not own responsibility for the regular update and maintenance of these apps. Any queries about individual apps or tools published need to be directed to the originator.
  </div>
  <?php endif; ?>
</article> <!-- /.node -->

<?php if (!empty($content['links']) || !empty($content['field_comment'])): ?>
  <footer>
    <?php print render($content['field_comment']); ?>
    <?php print render($content['links']); ?>
  </footer>
<?php endif; ?>

