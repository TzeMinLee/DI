<div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo base_url(); ?>Main/home">Darul Insyirah</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>Main/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLinkLeft" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Staff
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkLeft">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>Staff/view">Staffs</a>
                        <a class="dropdown-item" href="#">Add New Staff</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Residents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Applications</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLinkRight" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle-o"></i> <?php echo $this->session->userdata('username'); ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>Main/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>