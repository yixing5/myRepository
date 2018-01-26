<?php 
include '../public/common/acl.inc.php';

 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../public/images/left.gif);
}
</style>
<link href="../public/css/css.css" rel="stylesheet" type="text/css" />
<script src="../public/js/jquery.js"></script>
<script>
$(function(){
	$('.menu').toggle(
		function(){
			num=$(this).attr('num');
			$('#sub'+num).show();
		},
		function(){
			num=$(this).attr('num');
			$('#sub'+num).hide();
		}
	);
});
</script>
</head>

<body>
<table width="198" border="0" cellpadding="0" cellspacing="0" class="left-table01">
  <tr>
    <td>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="207" height="55" background="../public/images/nav01.gif">
				<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
					<td width="25%" rowspan="2"><img src="../public/images/ico02.gif" width="35" height="35" /></td>
					<td width="75%" height="22" class="left-font01">您好，<span class="left-font02"><?php echo $_SESSION['adminname'] ?></span></td>
				  </tr>
				  <tr>
					<td height="22" class="left-font01">
						[&nbsp;<a href="../login/logout.php" target="_top" class="left-font01">退出</a>&nbsp;]</td>
				  </tr>
				</table>
			</td>
		  </tr>
		</table>
		
				<!--  管理员开始    -->
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
		          <tr>
		            <td height="29">
						<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
							<tr>
								<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
								<td width="92%">
										<a href="javascript:" target="mainFrame" class="left-font03 menu" num='0'>管理员中心</a></td>
							</tr>
						</table>
					</td>
		          </tr>		  
		        </table>

				<table id="sub0" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
						cellspacing="0" class="left-table02">
					<tr>
						  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
						  <td width="91%">
						  	<a href="../admin/edit.php" target="mainFrame" class="left-font03">修改密码</a>
						  </td>
					</tr>
				
		      	</table>


		<!--  用户管理开始    -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='1'>用户管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub1" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../user/index.php" target="mainFrame" class="left-font03">查看用户</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../user/add.php" target="mainFrame" class="left-font03">添加用户</a></td>
			</tr>
      	</table>

		<!--  分类管理开始    -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='2'>分类管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub2" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../class/index.php" target="mainFrame" class="left-font03">查看分类</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../class/add.php" target="mainFrame" class="left-font03">添加分类</a></td>
			</tr>
      	</table>

		<!--  品牌管理开始    -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='3'>品牌管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub3" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../brand/index.php" target="mainFrame" class="left-font03">查看品牌</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../brand/add.php" target="mainFrame" class="left-font03">添加品牌</a></td>
			</tr>
      	</table>

		<!--  商品管理开始    -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='4'>商品管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub4" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../shop/index.php" target="mainFrame" class="left-font03">查看商品</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../shop/add.php" target="mainFrame" class="left-font03">添加商品</a></td>
			</tr>
      	</table>

		<!--  订单状态管理开始    -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='5'>订单状态管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub5" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../status/index.php" target="mainFrame" class="left-font03">查看订单状态</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../status/add.php" target="mainFrame" class="left-font03">添加订单状态</a></td>
			</tr>
      	</table>


		<!--  订单管理开始    -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='6'>订单管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub6" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../orders/index.php" target="mainFrame" class="left-font03">查看订单</a></td>
			</tr>
      	</table>

	  </td>
  </tr>
  
</table>
</body>
</html>
