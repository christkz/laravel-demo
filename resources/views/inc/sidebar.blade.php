<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<ul class="nav menu">
			<li class="active"><a href="<?= URL_ROOT;?>/index"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li><a href="<?= URL_ROOT;?>/orders"><em class="fa fa-first-order">&nbsp;</em> Orders</i></a></li>
			<li><a href="<?= URL_ROOT;?>/customers"><em class="fa fa-calendar">&nbsp;</em>Customers </a></li>
			
			<li><a href="<?= URL_ROOT;?>/products"><em class="fa fa-product-hunt">&nbsp;</em> Products</a></li>
			<li><a href="<?= URL_ROOT;?>/users"><em class="fa fa-user-circle">&nbsp;</em>Users</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Configurate <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?= URL_ROOT;?>/categories">
						<span class="fa fa-arrow-right">&nbsp;</span> Categories
					</a></li>
					<li><a class="" href="<?= URL_ROOT;?>/profils">
						<span class="fa fa-arrow-right">&nbsp;</span> Users & Profils
					</a></li>
				</ul>
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>