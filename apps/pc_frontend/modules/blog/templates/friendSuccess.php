<?php

include_parts(
  'BlogListPage',
  'blogIndex',
  array(
    'title' => __('Newest blog'),
    'list' => $blogList,
    'showName' => true
  )
);
