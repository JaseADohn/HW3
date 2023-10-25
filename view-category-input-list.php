<select class="form-select" id="cid" name="cid">
<?php
while ($categoryItem= $categoryList->fetch_assoc()) {
?>
    <option value="<?php echo $categoryItem['category_id']; ?>"><?php echo $categoryItem['category_name']; ?></option>
<?php
}
?>
</select>
