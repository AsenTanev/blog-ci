<section id="main" class="column">
<h4 class="alert_info">Welcome <?php echo $username; ?>, to the <?php echo $this->config->item('title'); ?> Administration!</h4>
<article class="module width_full">
  <header><h3>Welcome to the dashboard!</h3></header>
<div class="last5">
<h2>Last 5 Articles</h2>
<ul>
<?php foreach ($articles as $article) { ?>
    <li><a href="<?php echo base_url(); ?>admin/edit_article/<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo base_url(); ?>admin/articles">More</a>
</div>

<div class="last5">
<h2>Last 5 Categories</h2>
<ul>
<?php foreach ($categories as $category) { ?>
    <li><a href="<?php echo base_url(); ?>admin/edit_category/<?php echo $category['id']; ?>"><?php echo $category['title']; ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo base_url(); ?>admin/categories">More</a>
</div>

<div class="last5">
<h2>Last 5 Pages</h2>
<ul>
<?php foreach ($pages as $page) { ?>
    <li><a href="<?php echo base_url(); ?>admin/edit_page/<?php echo $page['id']; ?>"><?php echo $page['title']; ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo base_url(); ?>admin/pages">More</a>
</div>

<div class="last5">
<h2>Last 5 Nav Items</h2>
<ul>
<?php foreach ($nav as $nav_item) { ?>
    <li><a href="<?php echo base_url(); ?>admin/edit_nav/<?php echo $nav_item['id']; ?>"><?php echo $nav_item['title']; ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo base_url(); ?>admin/nav">More</a>
</div>

<div class="last5">
<h2>Last 5 Sidebar Items</h2>
<ul>
<?php foreach ($sidebar as $sidebar_item) { ?>
    <li><a href="<?php echo base_url(); ?>admin/edit_sidebar/<?php echo $sidebar_item['id']; ?>"><?php echo $sidebar_item['title']; ?></a></li>
<?php } ?>
</ul>
<a href="<?php echo base_url(); ?>admin/sidebar">More</a>
</div>
        </article>
                <div class="clear"></div>
   </div>
        </article><!-- end of stats article -->
