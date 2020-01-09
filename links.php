<?php $icons = To::URL($f = __DIR__ . DS . 'asset' . DS . 'svg' . DS . 'icons.svg') . '?v=' . filemtime($f); ?>
<?php foreach (array_filter((array) $state->layout->links) as $k => $v): ?>
<a class="icon" href="<?= $v->link; ?>" title="<?= i($v->title); ?>">
  <svg>
    <use href="<?= $icons; ?>#<?= $k; ?>"></use>
  </svg>
</a>
<?php endforeach; ?>
<?php if (!empty($state->x->feed)): ?>
<a class="icon" href="<?= $url->clean; ?>/feed.xml" title="<?= i('Feed'); ?>">
  <svg>
    <use href="<?= $icons; ?>#rss"></use>
  </svg>
</a>
<?php endif; ?>