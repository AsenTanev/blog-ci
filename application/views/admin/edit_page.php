
<section id="main" class="column" style="height: 1702px;">
<article class="module width_full">
<header><h2 style="text-align: center;">Edit Page</h2></header>
<a class="viewpage" href="<?php echo base_url(); ?><?php echo $page['slug']; ?>">View page</a>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('admin/edit_page/'.$pageid.'') ?>
<fieldset>
    <label for="title">Title</label>
    <input name="title" type="text" value="<?php echo $page['title']; ?>" size="50" />  
</fieldset>

<fieldset>
<h3>Meta Description (leave blank for default)</h3>
<input type="text" name="metadescription" value="<?php echo $page['metadescription']; ?>" size="50"/>
</fieldset>    

<fieldset>
<h3>Meta Keywords (leave blank for default, seperate each by comma)</h3>
    <input type="text" name="metakeywords" value="<?php echo $page['metakeywords']; ?>" size="50"/>
</fieldset>
<fieldset>
<h3>Body</h3>
    <textarea name="body" cols="105" rows="10"><?php echo $page['body']; ?></textarea>
</fieldset>
  
<input class="post-btn alt_btn" type="submit" name="submit" value="Post" />
</form>
</article>
</section>