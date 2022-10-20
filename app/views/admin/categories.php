
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
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> categories</h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Add Category
                        </button>
                        <hr>
                        <thead>
                        <tr>
                            <th><i class="fa fa-bullhorn"></i> ID</th>
                            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Category</th>
                            <th><i class="fa fa-bookmark"></i> Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="table-body">
<?php
echo $data['category_row'];

?>


                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->

    </section>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Category title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo ROOT ?>ajax" class="form">
                    <div class="form-group">
                        <label for="InputCategory">Enter Category Name</label>
                        <input type="text" class="form-control" id="InputCategory" name="category" placeholder="Enter category">
                    </div>
                    <div class="form-group">
                        <label for="CategoryType">Enter Category Name</label>
                        <input type="hidden" class="form-control" id="CategoryType" value="<?php echo "add_category" ?>" name="categoryType" placeholder="Enter category">
                    </div>


                    <button type="submit"  class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.form').addEventListener('submit', function (event) {
            var data = this;
            fetch(data.getAttribute('action'), {
                method: data.getAttribute('method'),
                body: new FormData(data)
            }).then(res=>res.text())
                .then(function (data) {
                     var obj = JSON.parse(data);
                     var table_body = document.querySelector('#table-body');
                     table_body.innerHTML= obj.data;
                    console.log(data)

                });
            event.preventDefault();
        });
    });
</script>
<?php $this->view('admin/footer',$data) ?>
