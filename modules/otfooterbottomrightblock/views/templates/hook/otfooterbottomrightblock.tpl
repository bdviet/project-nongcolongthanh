{*
* BDVIET 2020
*}


<div class="footerbottomright-outer links">

	{if isset($cms_footerbottomrightinfos) && $cms_footerbottomrightinfos}
	{$cms_footerbottomrightinfos.text nofilter}
	{else}
	<div id="footerbottomright-text" class="wrapper  footer-cms col-md-3">
	<div class="title">
		 <h3 class="h3">Tài khoản</h3>
		 <span class="pull-xs-right">
           <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
	</div>
	<ul  class="footer-toggle">
	<li><a href="#">Đơn hàng</a></li>
	<li><a href="#">Yêu thích</a></li>
	<li><a href="#">Thanh toán</a></li>
	<li><a href="#">Thông tin</a></li>
	</ul>
	</div>
	{/if}


</div>