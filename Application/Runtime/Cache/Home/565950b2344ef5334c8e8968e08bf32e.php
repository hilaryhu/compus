<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>FancyForm用户注册页面表单模板</title>
<script src="/compus2/Public/js/jquery-1.11.0.min.js"></script>
<link href="/compus2/Public/css/fancyform-min.css" rel="stylesheet">
<script src="/compus2/Public/js/fancyform-min.js"></script>
<script src="/compus2/Public/js/prettify.js" type="text/javascript"></script>
<link href="/compus2/Public/css/prettify.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="form" style="margin:20px auto;width:900px;"></div>
<script id="script-id">
window.onload = function(){
	var form = $('#form').FancyForm({
		title: '申请信息填写页面',
		width: 900,
		height: 435,
		inputWidth: 600,
		labelWidth: 65,		
		url: 'submit.php',
		params: {
			param1: 1,
			param2:'string'
		},
		method: 'POST',
		defaults: {
			type: 'string'
		},
		items: [{
			label: '负责人',
			emptyText: '请输入负责人姓名',
			name: 'accountname',
			valid: {
				blank: false,
				blankText: '负责人姓名',
				text: '负责人姓名不能为空！ ',
			}
		},{
			label: '邮箱',
			emptyText: '请输入邮箱',
			name: 'email',
			valid: {
				type: 'email',
				blank: false,
				blankText: '邮箱不能为空！',
				text: '邮箱格式不正确 '
			}
		},{
			label: '电话',
			emptyText: '请输入电话',
			name: 'nickname',
			valid: {
				blank: false,
				blankText: '电话不能为空！',
				text: '电话不能为空！ ',
			}
		},{
			type: 'textarea',
			label: '横幅内容',
			name: 'about',
			height:50
		},{
			type: 'checkbox',
			label: '同意条款',
			name: 'argument'
		}],
		buttons: [{
			text: '清除',
			handler: function(){
				console.log('clear');
				form.clear();
			}
		},{
			text: '提交',
			handler: function(){
				console.log('提交');
				form.submit({
					params: {
						param3: 'Some Values'
					},
					success: function(result, status, xhr){
						console.log('success');
						console.log(arguments);
					},
					error: function(xhr,status,error){
						console.log('error');
						console.log(arguments);
					}
				});
			}
		}],
		events: [{
			key: function(form, index, value){
			}
		}]
	});
	prettyPrint();
};
</script>
</body>
</html>