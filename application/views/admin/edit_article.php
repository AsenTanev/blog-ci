<section id="main" class="column" style="height: 1702px;">
<article class="module width_full">
<header><h2 style="text-align: center;">Post Article</h2></header>
<a class="viewpage" href="<?php echo base_url(); ?>blog/<?php echo $article['slug']; ?>">View page</a>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/edit_article/'.$articleid.'') ?>

<fieldset>
    <label>Post Title</label>
    <input type="text" name="title" title="title" type="input" value="<?php echo $article['title']; ?>" size="50" />
</fieldset>

<fieldset>
    <h3>Meta Description (leave blank for default)</h3>
    <input type="text" name="title" title="title" type="input" value="<?php echo $article['title']; ?>" size="50" />
</fieldset>    

<fieldset>
    <h3>Meta Keywords (leave blank for default, seperate each by comma)</h3>
    <input type="text" name="metadescription" value="<?php echo $article['metadescription']; ?>" size="50"/>
</fieldset>    
  
	<fieldset> <!-- to make two field float next to one another, adjust values accordingly -->
       <label for="category_id">Category</label>
        <select name="category_id">
       <?php foreach ($categories as $category) { ?>
      <option value="<?php echo $category['id']; ?>" <?php if ($article['category_id'] == $category['id']) { echo 'selected=selected'; } ?>><?php echo $category['title']; ?></option>  
      <?php } ?>
        </select>
</fieldset>
    <fieldset>
	<label for="body">Body</label>
	<textarea name="body" cols="105" rows="10"><?php echo $article['body']; ?></textarea>
	</fieldset>
	<fieldset>
    <?php if (!empty($article['featured'])) { ?>
    <img class="image" width="50%" height="50%" src="<?php echo base_url(); ?>images/posts/<?php echo $article['featured']; ?>" /><br />
    <?php } ?>
    </fieldset>
    <fieldset>
    <label for="featured">Featured</label>
    <br />
	<input name="featured" title="featured" type="file" value="<?php echo $article['featured']; ?>" />
    <br />
    </fieldset>
    <fieldset>
    <label for="slider">Add to slider?</label>
    <br />
	<select name="slider">
		<option value="0" <?php if ($article['slider'] == 0) { echo 'selected=selected'; } ?>>No</option>  
        <option value="1" <?php if ($article['slider'] == 1) { echo 'selected=selected'; } ?>>Yes</option>
	</select>
	<br />

<input class="post-btn" type="submit" name="submit" value="Post" />
</fieldset>
</form>
</article>
</section>