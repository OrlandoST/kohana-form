<label for="password">
    <?php echo ucfirst(str_replace("_", " ", $name)); ?>
</label>

<input type="password" class="<?php echo implode(" ", $css_classes) ?>" id="password" name="<?php echo $name . $formset_index; ?>"
       value="<?php echo $value; ?>"/>