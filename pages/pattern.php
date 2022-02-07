<?php include 'header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="action.php" method="POST">
                    <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label">Length</label>
                        <div class="col-md-8">
                            <input type="number" name="input_length" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label"></label>
                        <div class="col-md-8">
                            <input type="submit"  class="btn btn-block btn-success" name="pattern_btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container"
        <div class="row">
            <div class="col-md-8 mx-auto">
               <div>
                   <?php echo isset($result)? $result:' ';?>
               </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>
