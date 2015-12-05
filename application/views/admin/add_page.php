
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('admin/add_page') ?>

<section id="main" class="column" style="height: 1702px;">
<article class="module width_full">
<header><h2 style="text-align: center;">Add Page</h2></header>

<fieldset>
    <label>Title</label>
    <input type="text" name="title" size="50"/>
</fieldset>

<fieldset>
    <h3>Meta Description (leave blank for default)</h3>
    <input type="text" name="metadescription" size="50"/>
</fieldset>    

<fieldset>
    <h3>Meta Keywords (leave blank for default, seperate each by comma)</h3>
    <input type="text" name="metakeywords" size="50"/>
</fieldset>    

    <fieldset>
    <label for="body">Body</label>
    <textarea name="body" cols="105" rows="10"></textarea>
    </fieldset>

<input class="post-btn alt_btn" type="submit" name="submit" value="Post" />
</fieldset>
</form>
</article>
</section>