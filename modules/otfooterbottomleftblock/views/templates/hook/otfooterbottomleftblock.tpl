{*
* BDVIET 2020
*}

<div class="footerbottomleft-outer links">

	{if isset($cms_footerbottomleftinfos) && $cms_footerbottomleftinfos}
	{$cms_footerbottomleftinfos.text nofilter}
	{else}
	<div id="footerbottomleft-text" class="wrapper  footer-cms col-md-3">
	<div class="title" >
	 	<h3 class="h3">adorn</h3>
	 	<span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
	</div>
	<ul  class="footer-toggle">
	<li>
	<div class="bottomcmsblock">
	<div class="bottomcmsinner">
	<div class="bottomcms_img"><img class="img-footer" src="img/cms/footer_logo.png" alt="main-image" /></div>
	<div class="call-text">
		<div class="call-text1">Gọi chúng tôi</div>
		<div class="call-text2">+84 988 012 895</div>
	</div>
	<div class="address">Địa chỉ: 56 Tố Hữu, Nam Từ Liêm <br> Hà Nội, Việt Nam</div>
	</div>
	</div>
	</li>
	</ul>
	</div>
	{/if}


</div>
