
<?php $this->view('admin/header',$data) ?>



<?php $this->view('admin/sidebar',$data) ?>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Categories</h3>


        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i>Edit categories</h4>
                        <!-- Button trigger modal -->
                    <form method="post" action="<?php echo ROOT ?>admin" class="form">
                        <div class="form-group">
                            <label for="editCategory">Enter Category Name</label>
                            <input type="text" value="<?php echo $data['category']; ?>"  class="form-control" id="editCategory" name="editCategory" placeholder="Edit category">
                        </div>
                        <div class="form-group">
                            <label for="categoryId">Enter Category Name</label>
                            <input type="hidden"  value="<?php echo $data['id']; ?>" class="form-control" id="categoryId" name="categoryId" placeholder="category id">
                        </div>
                        <div class="form-group">
                            <label for="CategoryType"></label>
                            <input type="hidden" class="form-control" id="CategoryType" value="<?php echo "update_category" ?>" name="categoryType" placeholder="Enter category">
                        </div>


                        <button type="submit"  class="btn btn-primary">Submit</button>
                    </form>

                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->

    </section>
</section>


<?php $this->view('admin/footer',$data) ?>
