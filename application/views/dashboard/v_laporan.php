
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<!-- ace-settings-container -->
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

	<div class="page-header">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i><a href="<?php echo site_url() ?>">Home</a>
				</li>
				<li class="active">Laporan</li>
			</ul><!-- /.breadcrumb -->
		</div>
		<h1>
        Laporan Keuangan
    </h1>
	</div><!-- /.page-header -->
<!--kerjain kontennya disini-->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="invisible">
									<button data-target="#sidebar2" type="button" class="pull-left menu-toggler navbar-toggle">
										<span class="sr-only">Toggle sidebar</span>

										<i class="ace-icon fa fa-dashboard white bigger-125"></i>
									</button>


									<!--sidebar yang dikiri dashboard-->
									<div id="sidebar2" class="sidebar responsive menu-min ace-save-state">
										<ul class="nav nav-list">
											<li>
												<a href="#">
													<i class="menu-icon fa fa-tachometer"></i>
													<span class="menu-text"> Dashboard qwert</span>
												</a>

												<b class="arrow"></b>
											</li>

											<li>
												<a href="#">
													<i class="menu-icon fa fa-list-alt"></i>
													<span class="menu-text">Widgets</span>
												</a>

												<b class="arrow"></b>
											</li>

											<li>
												<a href="#">
													<i class="menu-icon fa fa-calendar"></i>

													<span class="menu-text">
														Calendar
														<span title="" class="badge badge-transparent tooltip-error" data-original-title="2 Important Events">
															<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
														</span>
													</span>
												</a>

												<b class="arrow"></b>
											</li>

											<li>
												<a href="#">
													<i class="menu-icon fa fa-picture-o"></i>
													<span class="menu-text"> Gallery </span>
												</a>

												<b class="arrow"></b>
											</li>

											<li>
												<a class="dropdown-toggle" href="#">
													<i class="menu-icon fa fa-tag"></i>
													<span class="menu-text"> More Pages </span>

													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">
													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															User Profile
														</a>

														<b class="arrow"></b>
													</li>

													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															Inbox
														</a>

														<b class="arrow"></b>
													</li>

													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															Pricing Tables
														</a>

														<b class="arrow"></b>
													</li>

													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															Invoice
														</a>

														<b class="arrow"></b>
													</li>

													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															Timeline
														</a>

														<b class="arrow"></b>
													</li>

													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															Email Templates
														</a>

														<b class="arrow"></b>
													</li>

													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															Login &amp; Register
														</a>

														<b class="arrow"></b>
													</li>
												</ul>
											</li>

											<li>
												<a class="dropdown-toggle" href="#">
													<i class="menu-icon fa fa-file-o"></i>

													<span class="menu-text">
														Other Pages
														<span class="badge badge-primary">5</span>
													</span>

													<b class="arrow fa fa-angle-down"></b>
												</a>

												<b class="arrow"></b>

												<ul class="submenu">
													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															FAQ
														</a>

														<b class="arrow"></b>
													</li>

													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															Error 404
														</a>

														<b class="arrow"></b>
													</li>

													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															Error 500
														</a>

														<b class="arrow"></b>
													</li>

													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															Grid
														</a>

														<b class="arrow"></b>
													</li>

													<li>
														<a href="#">
															<i class="menu-icon fa fa-caret-right"></i>
															Blank Page
														</a>

														<b class="arrow"></b>
													</li>
												</ul>
											</li>
										</ul><!-- /.nav-list -->

										<div class="sidebar-toggle sidebar-collapse">
											<i id="sidebar3-toggle-icon" class="ace-icon fa fa-angle-double-right ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
										</div>
									</div><!-- .sidebar -->
								</div>

								<!--<div class="hidden-sm hidden-xs">!--tombol ini nyambung keatas buat kecilin sidebar
									<button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar">
										<i id="sidebar4-toggle-icon" class="ace-icon fa fa-angle-double-up ace-save-state" data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down"></i>
										Collapse/Expand Menu
									</button>
								</div>-->
								
	<div class="container-fluid">
		<div class="row">	
	      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-bottom: 5px;">
	        <a href="<?php echo site_url() ?>databaru/NewPublikasiJurnal" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-log-in"></span>    Uang Masuk</a>
	        <a href="<?php echo site_url() ?>databaru/NewPublikasiJurnal" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-log-out"></span>    Uang Keluar</a>
	        <!--<a href="<?php echo site_url() ?>publikasi/PublikasiJurnal/exportexcel" class="btn btn-xs btn-success pull-right">Excel <i class="fa fa-file-excel-o"></i> </a>-->
	      </div>	
		</div>
      <div class="row">
      	<table id="datatableku" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nim</th>
                          <th>Nama</th>
                          <th>Tagihan</th>
                          <th>Saldo</th>
                          <th>Info</th>
                          <th>Keterangan</th>
                          <th>Petugas</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>2019071001</td>
                          <td>Ahmad</td>
                          <td>Rp.20.000</td>
                          <td>Rp.0</td>
                          <td>    </td>
                          <td></td>
                          <td>Raka</td>
                          <td>Tombol</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>2019071002</td>
                          <td>Subajo</td>
                          <td>Rp.0</td>
                          <td>Rp.0</td>
                          <td>Lunas</td>
                          <td>   </td>
                          <td>Desi</td>
                          <td>Button</td>
                        </tr>
                       
                       
                      </tbody>
                    </table>
					
      </div>      
      
    </div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->					