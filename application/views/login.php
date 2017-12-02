<div class="container">
    <div class="jumbotron">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="<?php echo base_url(); ?>images/Tajaancropped.jpg" alt="Kempen Tajaan" width="100%" height="20%">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img class="float-left" src="<?php echo base_url(); ?>images/DarulInsyirah.jpg" alt="DarulInsyirah logo" height="240" width="240">
            <h3>News and Activities</h3>
            <p class="news">Tue, 17 Nov 2017<br>Example activity 1</p>
            <p class="news">Wed, 25 Nov 2017<br>Example activity 2</p>
            <p class="news">Wed, 25 Nov 2017<br>Example news 1</p>
        </div>
        <div class="col-md-2">
            <h4>Apply for residency here!</h4>
            <button type="button" class="btn btn-success" onclick="location.href ='<?php echo base_url(); ?>Apply';">Apply</button>
        </div>

        <div class="col-md-4 pull-right">
            <form class="form-horizontal" action="<?php echo base_url(); ?>Main/login" method="post">
                <div class="card">
                    <?php 
                        if ($this->session->flashdata('errors'))
                        {
                            $data['type'] = "warning";
                            $data['strong'] = "Login failed";
                            $data['message'] = $this->session->flashdata('errors');
                            $this->load->view('template/alert', $data);
                        }
                        else if ($this->session->flashdata('login_failed'))
                        {
                            $data['type'] = "danger";
                            $data['strong'] = "Login failed";
                            $data['message'] = $this->session->flashdata('login_failed');
                            $this->load->view('template/alert', $data);
                        }
                     ?>
                    <div class="form-group">
                        <label for="inputUsername" class="control-label col-md-4" >Username</label>
                        <div class="col-md-9">
                            <input name="username" type="text" class="form-control" id="inputUsername" placeholder="Enter username" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="control-label col-md-4" for="password">Password</label>
                        <div class="col-md-9">
                            <input name="password" type="password" class="form-control" id="inputPassword"  placeholder="Enter password">
                        </div>
                        <button type="button" class="btn btn-link" onclick="location.href='<?php echo base_url(); ?>Authentication/ForgotPassword';">Forgot password</button>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" name="form-submitted" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
img.float-left
{
    margin-right: 2rem;
}
h3
{
    border-bottom: 1px solid #ccc;
}
.news
{
    font-size: 10;
    border-bottom: 1px solid #ccc;
}
.col-md-2
{
    text-align: center;
}
h4
{
    padding-top: 2rem;
}
.card
{
    padding-top: 1rem;
}
/*.card p
{
    margin-top: 1rem;
    margin-bottom: 1rem;
}*/
.alert
{
    padding-bottom: 0;
}
</style>