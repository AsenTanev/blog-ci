
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/add_nav') ?>

<section id="main" class="column" style="height: 1702px;">
<article class="module width_full">
<header><h2 style="text-align: center;">Add Nav</h2></header>

<fieldset>
    <label>Title</label>
    <input type="text" name="title" size="50"/>
</fieldset>
<fieldset>
<label for="url">Url</label>
    <br />
    <input type="text" name="url" size="50"/>
</fieldset>
<fieldset>
<h3>Postion</h3>
    <select name="position">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
    </select>
</fieldset>
<input class="post-btn alt_btn" type="submit" name="submit" value="Post" />

</form>
</article>
</section>