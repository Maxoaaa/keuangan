	</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"><a href="https://tif.upj.ac.id">Informatika</a></span>
							Universitas Pembangunan Jaya @ 2019
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url() ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<script src="<?php echo base_url() ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	    <script src="<?php echo base_url() ?>assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	    <script src="<?php echo base_url() ?>assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	    <script src="<?php echo base_url() ?>assets/plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/ace.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
			   $('#sidebar2').insertBefore('.page-content');
			   $('#navbar').addClass('h-navbar');
			   $('.footer').insertAfter('.page-content');
			   
			   $('.page-content').addClass('main-content');
			   
			   $('.menu-toggler[data-target="#sidebar2"]').insertBefore('.navbar-brand');
			   
			   
			   $(document).on('settings.ace.two_menu', function(e, event_name, event_val) {
				 if(event_name == 'sidebar_fixed') {
					 if( $('#sidebar').hasClass('sidebar-fixed') ) $('#sidebar2').addClass('sidebar-fixed')
					 else $('#sidebar2').removeClass('sidebar-fixed')
				 }
			   }).triggerHandler('settings.ace.two_menu', ['sidebar_fixed' ,$('#sidebar').hasClass('sidebar-fixed')]);
			   
			   $('#sidebar2[data-sidebar-hover=true]').ace_sidebar_hover('reset');
			   $('#sidebar2[data-sidebar-scroll=true]').ace_sidebar_scroll('reset', true);
			});
			$('#datatableku').dataTable();
		</script>
	</body>
</html>
