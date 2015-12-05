<section id="main" class="column" style="height: 1702px;">
<article class="module width_full">
<header><h2 style="text-align: center;">Edit Categories</h2></header>
<?php echo validation_errors(); ?>

<?php echo form_open('admin/edit_category/'.$categoryid.'') ?>
<fieldset>
    <label for="title">Title</label>
    <input name="title" type="text" value="<?php echo $category['title']; ?>" size="50" />   
</fieldset>

<fieldset>
<h3>Meta Description (leave blank for default)</h3>
<input type="text" name="metadescription" value="<?php echo $category['metadescription']; ?>" size="50"/>
</fieldset>    

<fieldset>
<h3>Meta Keywords (leave blank for default, seperate each by comma)</h3>
    <input type="text" name="metakeywords" value="<?php echo $category['metakeywords']; ?>" size="50"/>
</fieldset>    
  
<input class="post-btn alt_btn" type="submit" name="submit" value="Post" />
</form>
</article>
</section>