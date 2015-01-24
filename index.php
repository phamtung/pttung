<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Color green orange </title>
<link rel="stylesheet" type="text/css" href="themes/css/style.css" />
<link rel="stylesheet" href="themes/css/jquery.bxslider.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<!-- Bootstrap CSS -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" >
 
<!-- bootstrap JavaScript -->
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
		$(function() {
			// var demo = $("div#demoSlider").sliderTabs({
	  //         	indicators: true,
	  //         	panelArrows: true,
	  //         	panelArrowsShowOnHover: true,
	  //         	tabs: false,
	  //         	classes: {
	  //           	panel: 'demoPanel'
	  //         	}
	  //       });

			$(".accordion-title").click(function(){
				if (! $(this).hasClass('show')) {
					$(".info").slideUp();
					$(".accordion-title").removeClass("show");
					$(this).addClass('show');
					$(this).next().slideToggle();
				}
			});

			$(".accordion-title2").click(function(){
				if (! $(this).hasClass('show2')) {
					$(".info2").slideUp();
					$(".accordion-title2").removeClass("show2");
					$(this).addClass('show2');
					$(this).next().slideToggle();
				}
			});

			$( ".tabs" ).tabs();
  			
		});
</script>	
</head>

<body>	
	<div class="menu-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="themes/images/logo.png">
				</div>
				<div class="col-md-1">
					<a href=""><div class="item-menu">
						home
					</div></a>
				</div>
				<div class="col-md-1">
					<a href=""><div class="item-menu">
						about
					</div></a>
				</div>
				<div class="col-md-1">
					<a href=""><div class="item-menu">
						services
					</div></a>
				</div>
				<div class="col-md-1">
					<a href=""><div class="item-menu">
						portfolio
					</div></a>
				</div>
				<div class="col-md-1">
					<a href=""><div class="item-menu">
						blog
					</div></a>
				</div>
				<div class="col-md-1 bl">
					<a href=""><div class="item-menu ">
						features
					</div></a>
				</div>
				<div class="col-md-1">
					<a href=""><div class="item-menu">
						contacts
					</div></a>
				</div>
				<div class="col-md-1 x">
					<div class="item-menu find">
						<input type="button" name="search" class="b1">
						<div class="search">
							<input type="text" placeHolder="Search the site">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="info-header">
		<div class="container">
			<div class="row">		
				<div class="col-md-10">
					features
				</div>
				<div class="col-md-2">
					<a href="">home </a>/
					<a href=""> features</a>
				</div>
			</div>
		</div>
	</div>

		<!-- end header -->

	<div class="container">		
		<div class="row">
			<div class="col-md-12">
				<img width="100%" height="100%" src="themes/images/big-sl.png">
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<img width="100%" height="100%" src="themes/images/med-sl.png">
			</div>
			<div class="col-md-3">
				<div class="row sm-slide">
					<img src="themes/images/sm-sl.png" class="col-md-12">
				</div>
				<div class="row gallery">
					<p>sidebar gallery</p>
						<div class="row sidebar">
							<div class="col-md-12">
								<div class="col-md-4"><img src="themes/images/img-sidebar.png"></div>
								<div class="col-md-4"><img src="themes/images/img-sidebar.png"></div>
								<div class="col-md-4"><img src="themes/images/img-sidebar.png"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-4"><img src="themes/images/img-sidebar.png"></div>
								<div class="col-md-4"><img src="themes/images/img-sidebar.png"></div>
								<div class="col-md-4"><img src="themes/images/img-sidebar.png"></div>
							</div>
						</div>
				</div>
			</div>
		</div>

		<!-- end slide & sidebar-->

		<div class="row inf">
			<div class="col-md-3">
				<div class="sub-1 sus">
					<img src="themes/images/icon-1.png">
					<p>suspendisse</p>
					Quisque id tellus quis tisus vehicula</br> vehicula ut turpis. In eros nulla, placerat</br>
					vitae at, vehicula ut nunc.
					</div>
				<div class="sub-2">
					<a href=""><div class="read1"></div></a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="sub-1">
					<img src="themes/images/icon-2.png">
					<p>habitass</p>
					Astehicula ultricies. Integer venenatis</br> mattis nisl, vitae pulvinar dui tempor</br> non.  
				</div>
				<div class="sub-2">
					<a href=""><div class="read2"></div></a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="sub-1">
					<img src="themes/images/icon-3.png">
					<p>aliquam</p>
					Vivamus eget ante bibendum arcu</br> 
					vehicula ultricies.Integer venenatis</br> 
					mattis nisl, vitae pulvinar dui tempor</br> non. 
				</div>
				<div class="sub-2">
					<a href=""><div class="read2"></div></a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="sub-1">
					<img src="themes/images/icon-4.png">
					<p>maecenas</p>
					Ut eleifend libero sed neque rhoncus</br> 
					consequat. Maecenas tincidunt, augue</br> 
					et rutrum condimentum, libero lectus</br> 
					mattis orci, ut commodo.
				</div>
				<div class="sub-2">
					<a href=""><div class="read2"></div></a>
				</div>
			</div>
		</div>

		<!-- end 4 box -->

		<div class="row inf2">
			<div class="col-md-9">
				<div class="accordion">
					<div class="accordion-title">
						<span>accordion title</span>
					</div>
					<div class="info">
						Vivamus eget ante bibendum arcu vehicula ultricies.Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.
					</div>
				</div>
				<div class="accordion">
					<div class="accordion-title">
						<span>accordion title</span>
					</div>
					<div class="info">
						Vivamus eget ante bibendum arcu vehicula ultricies.Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.
					</div>
				</div>
				<div class="accordion">
					<div class="accordion-title show">
						<span>accordion title</span>
					</div>
					<div class="info action">
						Vivamus eget ante bibendum arcu vehicula ultricies.Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="accordion">
					<div class="accordion-title2">
						<span>accordion title</span>
					</div>
					<div class="info2">
						Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis 
					</div>
				</div>
				<div class="accordion">
					<div class="accordion-title2">
						<span>accordion title</span>
					</div>
					<div class="info2">
						Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis 
					</div>
				</div>
				<div class="accordion">
					<div class="accordion-title2 show2">
						<span>accordion title</span>
					</div>
					<div class="info2 action">
						Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis 
					</div>
				</div>
			</div>
		</div>

		<!-- end accordion -->

		<div class="row inf3">
			<div class="col-md-9">
				<div class="tabs">
					<ul>
						<li class="tab1"><a href="#tabs-1">tab title</a></li>
						<li class="tab2"><a href="#tabs-2">tab title</a></li>
						<li class="tab3"><a href="#tabs-3">tab title</a></li>
						<li class="tab4"><a href="#tabs-4">tab title</a></li>
					</ul>
					<div class="clear"></div>
					<div id="tabs-1">
						<div class="row im">
					    	<div class="col-md-9"><span>Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo. Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat.</span></div>
							<div class="col-md-3"><img src="themes/images/img-tabs.png"></div>
						</div>
					</div>
					<div id="tabs-2">
						<div class="row im">
					    	<div class="col-md-9"><p>Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat.</p></div>
							<div class="col-md-3"><img src="themes/images/img-tabs.png"></div>
						</div>
					</div>
					<div id="tabs-3">
						<div class="row im">
					  		<div class="col-md-9"><p>Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo. Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat.</p></div>
							<div class="col-md-3"><img src="themes/images/img-tabs.png"></div>
						</div>
					</div>
					<div id="tabs-4">
						<div class="row im">
					   		<div class="col-md-9"><p>Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo. Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat.</p></div>
							<div class="col-md-3"><img src="themes/images/img-tabs.png"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="tabs">
					<ul>
						<li class="tab5"><a href="#tabs-5">tab title</a></li>
						<li class="tab6"><a href="#tabs-6">tab<b> </b>title</a></li>						   	
					</ul>
					<div class="clear"></div>
					<div id="tabs-5">
						<span>Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncu</span>
					</div>
					<div id="tabs-6">
						<p>Integer venenatis mattis nisl, vitae pulvinar dui tempor.Ut eleifend libero sed neque rhoncus consequat.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- end tabs -->

		<div class="row images">
			<div class="col-md-3">
				<div class="pic">
					<div class="link">
						<a href=""><img src="themes/images/eff-1.png"></a>
						<a href=""><img src="themes/images/eff-2.png"></a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="pic">
					<div class="link">
						<a href=""><img src="themes/images/eff-1.png"></a>
						<a href=""><img src="themes/images/eff-2.png"></a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="pic ex">
					<img src="themes/images/pictest.png">
				</div>
			</div>
			<div class="col-md-3">
				<div class="pic">
					<div class="link">
						<a href=""><img src="themes/images/eff-1.png"></a>
						<a href=""><img src="themes/images/eff-2.png"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row images">
			<div class="col-md-6">
				<div class="bigpic">
					<img src="themes/images/pictest2.png">
				</div>
			</div>
			<div class="col-md-6">
				<div class="bigpic">
					<div class="link2">
						<a href=""><img src="themes/images/eff-1.png"></a>
						<a href=""><img src="themes/images/eff-2.png"></a>
					</div>
				</div>
			</div>
		</div>

		<!-- end images -->

		<div class="textbox">
			<div class="row text">
				<div class="col-md-12">
					<p>Headline</p>
					<span>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</span>
				</div>
			</div>
			<div class="row text">
				<div class="col-md-6">
					<p>Headline</p>
					<span>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</span>
				</div>
				<div class="col-md-6">
					<p>Headline</p>
					<span>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</span>
				</div>
			</div>
			<div class="row text">
				<div class="col-md-9">
					<p>Headline</p>
					<span>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</span>
				</div>
				<div class="col-md-3">
					<p>Headline</p>
					<span>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in.</span>
				</div>
			</div>
			<div class="row text">
				<div class="col-md-3">
					<p>Headline</p>
					<span>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </span>
				</div>
				<div class="col-md-3">
					<p>Headline</p>
					<span>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </span>
				</div>
				<div class="col-md-3">
					<p>Headline</p>
					<span>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </span>
				</div>
				<div class="col-md-3">
					<p>Headline</p>
					<span>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </span>
				</div>
			</div>
		</div>

		<!-- end textbox -->

		<div class="row list">
			<div class="col-md-3">
				<p>Arrow list font size 13px</p>
				<div class="fr item1">
					<ul>
						<li><a href="">Quisque at massa ipsum</a></li>
						<li><a href="">Maecenas a lorem augue, egestas</a></li>
						<li><a href="">Cras vitae felis at lacus eleifend</a></li>
						<li><a href="">Etiam auctor diam pellentesque</a></li>
						<li><a href="">Nulla ac massa at dolor</a></li>
						<li><a href="">Condimentum eleifend vitae vitae</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<p>Arrow list font size 14px</p>
				<div class="item2">
					<ul>
						<li><a href="">Quisque at massa ipsum</a></li>
						<li><a href="">Maecenas a lorem augue, egestas</a></li>
						<li><a href="">Cras vitae felis at lacus eleifend</a></li>
						<li><a href="">Etiam auctor diam pellentesque</a></li>
						<li><a href="">Nulla ac massa at dolor</a></li>
						<li><a href="">Condimentum eleifend vitae vitae</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<p>Arrow list font size 14px</p>
				<div class="item3">
					<ul>
						<li><a href="">Quisque at massa ipsum</a></li>
						<li><a href="">Maecenas a lorem augue, egestas</a></li>
						<li><a href="">Cras vitae felis at lacus eleifend</a></li>
						<li><a href="">Etiam auctor diam pellentesque</a></li>
						<li><a href="">Nulla ac massa at dolor</a></li>
						<li><a href="">Condimentum eleifend vitae vitae</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<p>Arrow list font size 14px</p>
				<div class="item4">
					<ul>
						<li><a href="">Quisque at massa ipsum</a></li>
						<li><a href="">Maecenas a lorem augue, egestas</a></li>
						<li><a href="">Cras vitae felis at lacus eleifend</a></li>
						<li><a href="">Etiam auctor diam pellentesque</a></li>
						<li><a href="">Nulla ac massa at dolor</a></li>
						<li><a href="">Condimentum eleifend vitae vitae</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- end list -->

		<div class="tb">
			<div class="row tb1">
				<div class="col-md-12">
					<div class="col-md-9">
						<p>Headline</p>
						<span>Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.</span>
					</div>
					<div class="col-md-3">
						<a href=""><div class="view"></div></a>
					</div>
				</div>
			</div>
			<div class="row tb2">
				<div class="col-md-12">
					<table>
						<tr class="tr-title">
							<td class="col-1">TR Title</td>
							<td class="col-2">TR Title</td>
							<td class="col-3">TR Title</td>
							<td class="col-4">TR Title</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-3">Etiam auctor diam pellentesque ulla ac massa at dolor</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-3">Etiam auctor diam pellentesque ulla ac massa at dolor</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-3">Etiam auctor diam pellentesque ulla ac massa at dolor</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-3">Etiam auctor diam pellentesque ulla ac massa at dolor</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="row tb3">
				<div class="col-md-6">
					<table>
						<tr class="tr-title b2">
							<td class="col-1">TR Title</td>
							<td class="col-2">TR Title</td>
							<td class="col-4">TR Title</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<table>
						<tr class="tr-title b3">
							<td class="col-1">TR Title</td>
							<td class="col-2">TR Title</td>
							<td class="col-4">TR Title</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
						<tr class="tr-nor">
							<td class="col-1">Quisque</td>
							<td class="col-2">Maecenas a lorem augue</td>
							<td class="col-4">Maecenas a lorem augue</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<!-- end table -->

	</div>

	<!-- end body -->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 ft1">
					<img src="themes/images/logo.png">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec .</p>
					<div class="row line">	
						<div class="col-md-2">Phone:</div><div class="col-md-10"><b>182 2569 5896</b></div>
					</div>
					<div class="row line">
						<div class="col-md-2">email:</div><div class="col-md-10"><b>info@modu.versus</b></div>
					</div>
				</div>
				<div class="col-md-2 ft2">
					<p>Company</p>
					<ul>
						<li><a href="">About</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">Contact</a></li>
						<li><a href="">Term</a></li>
						<li><a href="">Privacy</a></li>
						<li><a href="">Testimonials</a></li>
					</ul>
				</div>
				<div class="col-md-2 ft2">
					<p>Community</p>
					<ul>
						<li><a href="">Blog</a></li>
						<li><a href="">Forum</a></li>
						<li><a href="">Support</a></li>
						<li><a href="">Newsletter</a></li>
					</ul>
				</div>
				<div class="col-md-4 ft3">
					<p>from the <b>blog</b></p>
					<div class="blog-1">
						<div class="bl-left"><img src="themes/images/img1.png"></div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit</br>
						<span>26 May, 2013</span>
					</div>
					<div class="clear"></div>
					<div class="blog-1">
						<div class="bl-left"><img src="themes/images/img1.png"></div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit</br>
						<span>26 May, 2013</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer2">
		<div class="row">
			<div class="col-md-9 ft-1">
				<span>2013  ModusVersus</span>
			</div>
			<div class="col-md-3 ft-2">
				<ul>
					<li><a href=""><img src="themes/images/link1.png"></a></li>
					<li><a href=""><img src="themes/images/link2.png"></a></li>
					<li><a href=""><img src="themes/images/link3.png"></a></li>
					<li><a href=""><img src="themes/images/link4.png"></a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>