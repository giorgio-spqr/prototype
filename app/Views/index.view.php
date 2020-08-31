<?php require('partials/head.php'); ?>

<section id="application">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
                <?php 
                if (!empty($success)) { 
                    echo "<h2 class='text-center'>$success</h2>"; 
                } else {
                ?>
                    <div class="form-wrap">
                    <h1>Application form</h1>
                        <form role="form" action="form" method="post" id="application-form" autocomplete="off">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="info@example.com" value="<?=$_POST['email'] ?? ''?>">
                                <p class="text-danger"><?=$errors['email'] ?? ''?></p>
                            </div>
                            <div class="form-group">
                                <label for="summ" class="sr-only">Сумма</label>
                                <input type="number" name="summ" id="summ" class="form-control" placeholder="5000" value="<?=$_POST['summ'] ?? ''?>">
                                <p class="text-danger"><?=$errors['summ'] ?? ''?></p>
                            </div>
                            <input type="submit" id="btn-application" class="btn btn-custom btn-lg btn-block" value="Submit!">
                        </form>
                        <hr>
                    </div>

                <?php }?>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<?php require('partials/footer.php'); ?>