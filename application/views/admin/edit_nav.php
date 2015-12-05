
<section id="main" class="column" style="height: 1702px;">
<article class="module width_full">
<header><h2 style="text-align: center;">Add nav item</h2></header>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('admin/edit_nav/'.$navid.'') ?>
<fieldset>
    <label for="title">Title</label>
    <input name="title" type="text" value="<?php echo $nav['title']; ?>" size="50" /> 
</fieldset>

<fieldset>
<label for="url">URL</label>
    <input name="url" title="url" type="text" value="<?php echo $nav['url']; ?>" size="50" />
</fieldset>    

<fieldset>
<h3>Position</h3>
    <select name="position">
      <option value="1" <?php if($nav['position'] == '1') echo 'selected="selected"'; ?>>1</option>
      <option value="2" <?php if($nav['position'] == '2') echo 'selected="selected"'; ?>>2</option>
      <option value="3" <?php if($nav['position'] == '3') echo 'selected="selected"'; ?>>3</option>
      <option value="4" <?php if($nav['position'] == '4') echo 'selected="selected"'; ?>>4</option>
      <option value="5" <?php if($nav['position'] == '5') echo 'selected="selected"'; ?>>5</option>
      <option value="6" <?php if($nav['position'] == '6') echo 'selected="selected"'; ?>>6</option>
      <option value="7" <?php if($nav['position'] == '7') echo 'selected="selected"'; ?>>7</option>
      <option value="8" <?php if($nav['position'] == '8') echo 'selected="selected"'; ?>>8</option>
      <option value="9" <?php if($nav['position'] == '9') echo 'selected="selected"'; ?>>9</option>
      <option value="10" <?php if($nav['position'] == '10') echo 'selected="selected"'; ?>>10</option>
      <option value="11" <?php if($nav['position'] == '11') echo 'selected="selected"'; ?>>11</option>
      <option value="12" <?php if($nav['position'] == '12') echo 'selected="selected"'; ?>>12</option>
      <option value="13" <?php if($nav['position'] == '13') echo 'selected="selected"'; ?>>13</option>
      <option value="14" <?php if($nav['position'] == '14') echo 'selected="selected"'; ?>>14</option>
      <option value="15" <?php if($nav['position'] == '15') echo 'selected="selected"'; ?>>15</option>
      <option value="16" <?php if($nav['position'] == '16') echo 'selected="selected"'; ?>>16</option>
      <option value="17" <?php if($nav['position'] == '17') echo 'selected="selected"'; ?>>17</option>
      <option value="18" <?php if($nav['position'] == '18') echo 'selected="selected"'; ?>>18</option>
      <option value="19" <?php if($nav['position'] == '19') echo 'selected="selected"'; ?>>19</option>
      <option value="20" <?php if($nav['position'] == '20') echo 'selected="selected"'; ?>>20</option>
    </select>
</fieldset>    
  
<input class="post-btn alt_btn" type="submit" name="submit" value="Post" />
</form>
</article>
</section>