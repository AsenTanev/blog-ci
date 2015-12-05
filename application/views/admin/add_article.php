
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/add_article') ?>

<section id="main" class="column" style="height: 1702px;">
<article class="module width_full">
<header><h2 style="text-align: center;">Post Article</h2></header>

<fieldset>
    <label>Post Title</label>
    <input type="text" name="title" size="50"/>
</fieldset>

<fieldset>
    <h3>Meta Description (leave blank for default)</h3>
    <input type="input" name="metadescription" size="50"/>
</fieldset>    

<fieldset>
    <h3>Meta Keywords (leave blank for default, seperate each by comma)</h3>
    <input type="input" name="metakeywords" size="50"/>
</fieldset>    
  
    <fieldset> <!-- to make two field float next to one another, adjust values accordingly -->
       <label for="category_id">Category</label>
      <select name="category_id">
      <?php foreach ($categories as $category) { ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['title']; ?></option>  
      <?php } ?>
    </select>
        </select>
</fieldset>
    <fieldset>
    <label for="body">Body</label>
    <textarea name="body" cols="105" rows="10"></textarea>
    </fieldset>
    <fieldset>
    <label for="featured">Featured</label>
    <br />
    <input type="file" name="featured" />
    <br />
    </fieldset>
    <fieldset>
    <label for="slider">Add to slider?</label>
    <br />
    <select name="slider">
        <option value="0">No</option>  
        <option value="1">Yes</option>
    </select>
    <br />

<input class="post-btn alt_btn" type="submit" name="submit" value="Post" />
</fieldset>
</form>
</article>
</section>