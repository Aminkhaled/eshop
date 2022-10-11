<?php $this->view('eshop/header',$data); ?>

    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="signup-form"><!--sign up form-->
                        <span class="error" style="color: red; font-size: 24px;"><?php check_messages(); ?></span>
                        <h2>New User Signup!</h2>
                        <form method="post">
                            <input name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : ''; ?>" type="text" placeholder="Name"/>
                            <input name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>"  type="email" placeholder="Email Address"/>
                            <input name="password" type="password" placeholder="Password"/>
                            <input name="password2" type="password" placeholder="Retype Password"/>

                            <button type="submit" class="btn btn-default">Signup</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->


<?php $this->view('eshop/footer') ?>