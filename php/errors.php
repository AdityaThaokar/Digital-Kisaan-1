<?php if(count($errors)>0): ?>
<div class="errs" style="width: 86%;margin: 0px 10px;padding: 10px;border: 1px solid #a94442;color: #ffffff;background: #a94442;border-radius: 5px;text-align: left;"">
    <?php foreach($errors as $error):?>
        <p><?php echo $error; ?></p>
    <?php endforeach ?>
</div><br>
<?php endif ?>