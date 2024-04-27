<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Hoşgeldiniz</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
              <li class="breadcrumb-item active">Hoşgeldiniz</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <?php
				$buguntekil=0;
				$buguncogul=0;
				$geneltekil=0;
				$genelcogul=0;
				?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=$buguntekil?></h3>

                <p>Bugün Tekil Ziyaretçiniz</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=$buguncogul?></h3>

                <p>Bugün Çoğul Ziyaretçiniz</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?=$geneltekil?></h3>

                <p>Toplam Tekil Ziyaretçiniz</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=$genelcogul?></h3>

                <p>Toplam Çoğul Ziyaretçiniz</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
        
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="card-header" style="background: #fff;">
									<h6 class="panel-title txt-dark">Genel Tarayıcı İstatistiği</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper">
								<div class="panel-body" style="background:#fff; padding:8px;">
                                <?php
								$trycilr=$VT->VeriGetir("ziyarettarayici","WHERE ID<>?",array(5),"ORDER BY ID ASC");
								
								?>
									<div>
										<span class="badge badge-danger" style="width:40%;">
											Google Chrome
										</span>
										<span class="label label-warning pull-right" style="font-size: 16px; background: #eee; border: 1px solid #ddd; padding: 4px 9px; border-radius: 10px; float: right;"><?php if($trycilr!=false && $trycilr[0]["ziyaret"]){echo $trycilr[0]["ziyaret"];}else{echo "-";}?></span>
										<div class="clearfix"></div>
										<hr class="light-grey-hr"/>
										<span class="badge badge-warning" style="width:40%;">
											Mozila Firefox
										</span>
										<span class="label label-danger pull-right" style="font-size: 16px; background: #eee; border: 1px solid #ddd; padding: 4px 9px; border-radius: 10px; float: right;"><?php if($trycilr!=false && $trycilr[2]["ziyaret"]){echo $trycilr[2]["ziyaret"];}else{echo "-";}?></span>
										<div class="clearfix"></div>
										<hr class="light-grey-hr row "/>
										<span class="badge badge-primary" style="width:40%;">
											Internet Explorer
										</span>
										<span class="label label-success pull-right" style="font-size: 16px; background: #eee; border: 1px solid #ddd; padding: 4px 9px; border-radius: 10px; float: right;"><?php if($trycilr!=false && $trycilr[1]["ziyaret"]){echo $trycilr[1]["ziyaret"];}else{echo "-";}?></span>
										<div class="clearfix"></div>
										<hr class="light-grey-hr row "/>
										<span class="badge badge-info" style="width:40%;">
											Diğer
										</span>
										<span class="label label-primary pull-right" style="font-size: 16px; background: #eee; border: 1px solid #ddd; padding: 4px 9px; border-radius: 10px; float: right;"><?php if($trycilr!=false && $trycilr[3]["ziyaret"]){echo $trycilr[3]["ziyaret"];}else{echo "-";}?></span>
										<div class="clearfix"></div>
									</div>
								</div>	
							</div>
						</div>

           
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>