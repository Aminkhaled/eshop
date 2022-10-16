<!-- **********************************************************************************************************************************************************
   MAIN SIDEBAR MENU
   *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="<?php echo ASSETS ?>admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">Marcel Newman</h5>

            <li class="mt">
                <a class="active" href="<?php echo ROOT ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-cart"></i>
                    <span>Products</span>
                </a>
                <ul class="sub">
                    <li><a  href="admin/product/add">add product</a></li>
                    <li><a  href="admin/product/edit">edit product</a></li>
                    <li><a  href="admin/product/delete">delete product</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-cart"></i>
                    <span>Categories</span>
                </a>
                <ul class="sub">
                    <li><a  href="admin/category/add">add category</a></li>
                    <li><a  href="admin/category/edit">edit category</a></li>
                    <li><a  href="admin/category/delete">delete category</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-reorder"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-cart"></i>
                    <span>settings</span>
                </a>
                <ul class="sub">
                    <li><a  href="admin/settings/add">add category</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-user"></i>
                    <span>users</span>
                </a>
                <ul class="sub">
                    <li><a  href="admin/users/customers">customers</a></li>
                    <li><a  href="admin/users/admins">admins</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-hdd-o"></i>
                    <span>website backup </span>
                </a>
            </li>


        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->