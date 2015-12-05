<article class="module width_3_quarter">
<header><h3 class="tabs_involved" style="text-align: center"> Articles</h3>
</header>
<form class="post_message" method="post">
<input name="search" id="search" type="text" placeholder="Search" />
</form>
<div class="tab_container">
            <div id="tab1" class="tab_content">
            <table class="tablesorter" cellspacing="0"> 
            <thead> 
                <tr> 
                    <th></th> 
                    <th>Entry Name</th> 
                    <th>Edit</th> 
                    <th>Delete</th> 
                </tr> 
            </thead> 
            <tbody> 
                <?php foreach ($articles as $article): ?>
            <tr>
                <td></td>
                <td style="font-size: 16px;"><?php echo $article['title'];?></td>
                <td><a href="<?php echo base_url(); ?>admin/edit_article/<?php echo $article['id']; ?>"><i class="fa fa-pencil-square-o fa-2x"></i></a></td>
                <td><a onClick="return confirm('Delete?')" href="<?php echo base_url(); ?>admin/delete_article/<?php echo $article['id']; ?>"><i class="fa fa-trash fa-2x"></i></a></td>
            </tr>
<?php endforeach; ?>
<?php echo $this->pagination->create_links(); ?>
            </tbody> 
            </table>
            </div><!-- end of #tab1 -->
            </article>
            <div class="clear"></div>
            
