<div class = "row">
    <div cloass = "col-sm-8 offset-sm-2">
    <h3>Your are successfully login to the systm</h3>
    <?php if(isset(Auth::user()-> email)): ?>
    <div class = "alert alert-danger">
        <strong>Welcome <?php echo e(Auth::user()-> email); ?></strong></br>
        <a href = "<?php echo e(url('/logout')); ?>">Logout</a>
</div>
<?php else: ?>
<script>window.location = "/";</script>
<?php endif; ?>

</div>
</div><?php /**PATH C:\Users\E-Lab Staff\Desktop\2019csc030\2019csc030\HelloApp\resources\views/success.blade.php ENDPATH**/ ?>