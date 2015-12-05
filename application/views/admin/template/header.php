<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $this->config->item('title'); ?> | <?php if ($this->router->method == 'index') { echo $this->config->item('sub_title'); } else { echo $title; } ?></title>
<meta name="description" content="<?php if (!empty($metadescription)) { echo $metadescription; } else { echo $this->config->item('metadescription'); } ?>">
<meta name="keywords" content="<?php if (!empty($metakeywords)) { echo $metakeywords; } else { echo $this->config->item('metakeywords'); } ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/layout.css" type="text/css" media="Screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/mobile.css" type="text/css" media="handheld" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/print.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin/fontawesome/css/font-awesome.min.css" type="text/css" />
<script src="<?php echo base_url(); ?>js/admin/jquery-1.5.2.min.js" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>js/admin/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>js/admin/tinymce/tinymce-global.js"></script>
<script src="<?php echo base_url(); ?>js/admin/hideshow.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/admin/jquery.tablesorter.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/admin/jquery.equalHeight.js"></script>
<script type="text/javascript">
    $(document).ready(function() 
        { 
          $(".tablesorter").tablesorter(); 
     } 
    );
    $(document).ready(function() {

    //When page loads...
    $(".tab_content").hide(); //Hide all content
    $("ul.tabs li:first").addClass("active").show(); //Activate first tab
    $(".tab_content:first").show(); //Show first tab content

    //On Click Event
    $("ul.tabs li").click(function() {

        $("ul.tabs li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        $(".tab_content").hide(); //Hide all tab content

        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
        $(activeTab).fadeIn(); //Fade in the active ID content
        return false;
    });

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>
</head>
<body>

<header id="header">
  <hgroup>
    <h1 class="site_title"><a href="http://localhost/blog-ci/admin">Website Admin</a></h1>
    <h2 class="section_title"><?php echo $this->config->item('sub_title'); ?></h2><div class="btn_view_site"><a href="http://localhost/blog-ci/">View Site</a></div>
  </hgroup>
</header> 
<section id="secondary_bar">
        <div class="user">
            <p><?php if(empty($username)){ echo "admin";} else echo $username?></p>
            <!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
        </div>
        <div class="breadcrumbs_container">
            <article class="breadcrumbs"><a href="http://localhost/blog-ci/admin/">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
        </div>
    </section><!-- end of secondary bar -->

<aside id="sidebar" class="column">
        <form class="quick_search">
            <input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
        </form>
        <hr/>
        <h3>Content</h3>
        <ul class="toggle">
            <li class="icn_new_article"><a href="<?php echo base_url(); ?>admin/add_article">Add Article</a></li>
            <li class="icn_edit_article"><a href="<?php echo base_url(); ?>admin/articles">Article</a></li>
            <li class="icn_categories"><a href="<?php echo base_url(); ?>admin/categories">Categories</a></li>
            <li class="icn_new_article"><a href="<?php echo base_url(); ?>admin/add_category">Add Category</a></li>

        </ul>
        <h3>Pages</h3>
        <ul class="toggle">
            <li class="icn_tags"><a href="<?php echo base_url(); ?>admin/pages">Pages</a></li>
            <li class="icn_new_article"><a href="<?php echo base_url(); ?>admin/add_page">Add Page</a></li>
        </ul>
        <h3>Navigation</h3>
        <ul class="toggle">
            <li class="icn_settings"><a href="<?php echo base_url(); ?>admin/nav">Navigation</a></li>
            <li class="icn_new_article"><a href="<?php echo base_url(); ?>admin/add_nav">Add Nav</a></li>
        </ul>
        <h3>Sidebar</h3>
        <ul class="toggle">
            <li class="icn_video"><a href="<?php echo base_url(); ?>admin/sidebar">Sidebar</a></li>
            <li class="icn_new_article"><a href="<?php echo base_url(); ?>admin/add_sidebar">Add Sidebar</a></li>
        </ul>
        <h3>Admin</h3>
        <ul class="toggle">
            <li class="icn_jump_back"><a href="<?php echo base_url(); ?>logout">Logout</a></li>
        </ul>  
        <footer>
            <hr />
            <p><strong>Codeigniter Admin bar</strong></p>
            <p><strong>Copyright &copy; Asen Tanev</strong></p>
            <p><strong>Feel free to learn</strong></p>          
        </footer>
    </aside><!-- end of sidebar -->
<section>