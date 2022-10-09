<?php $this->view('eshop/header',$data) ?>
	
<section class="vcard">
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">  <h4 >User Profile</h4></div>
                <div class="panel-body">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">


                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                        <div class="container" >
                            <h2><?php echo  $data['user_data']->name ?>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                   <i class="fa fa-download" style="margin: 0 10px"> Download</i>
                                </button>
                            </h2>
                            <p><?php echo  $data['user_data']->title ?></b></p>


                        </div>
                        <hr>
                        <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>i.rudberg</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $data['user_data']->email ?></p></li>
                        </ul>
                        <hr>

                        <div class="col-sm-5 col-xs-6 tital " ><?php echo  $data['user_data']->date ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p id="vcard-text" style="background-color: lightgray;color: white;">
                                <?php
                                $url_vcard = str_replace(' ','-',$data['user_data']->url_address);
                                echo ROOT . "vcards/" .strtolower($url_vcard).".vcf"  ?>
                            </p>
                        </div>
<!--                        col-md - 8-->
                        <div class="col-md-4">
                            <button class="btn btn-primary " onclick="vcard_copy()" >
                                Copy
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php $this->view('eshop/footer') ?>