<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/add_category') ?>

<section id="main" class="column" style="height: 1702px;">
<article class="module width_full">
<header><h2 style="text-align: center;">Post Category</h2></header>

<fieldset>
    <label>Title</label>
    <input type="text" name="title" size="50"/>
</fieldset>

<input class="post-btn alt_btn" type="submit" name="submit" value="Post" />
</fieldset>
</form>
</article>
</section>