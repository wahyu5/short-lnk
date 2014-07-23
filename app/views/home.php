<?php $this->output('header');?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 column">

            <?php if($message=='success'){?>
                <div class="alert alert-success">
                    Berhasil
                </div>
            <?php } ?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    URL
                </div>
                
                <div class="panel-body">
                     <form method="post">
                        <input type="text" class="form-control" name="target" placeholder="Enter URL" />
                        <button class="btn btn-default" name="submit">Submit</button>
                     </form>                
                </div>
            </div>
        </div>
    </div>
</div>

</html>
