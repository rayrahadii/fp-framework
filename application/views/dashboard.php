<section class="content-header">
      <h1>Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i></a>Home</li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
  
    <?php if($this->fungsi->user_login()->level == 1) { ?>
    
        <?php } ?>

        <?php if($this->fungsi->user_login()->level == 2) { ?>
    
        <?php } ?>
        
        <?php if($this->fungsi->user_login()->level == 3) { ?>
        
        <?php } ?>
        
      
        </section>
