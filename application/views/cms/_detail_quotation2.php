<!DOCTYPE html>
<html  lang="id_ID">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title><?php echo $this->config->item('app_name'); ?> | <?php echo (isset($_TITLE))?$_TITLE:'';?></title>
    <meta name="keywords" content="bootstrap-treetable">
    <meta name="description" content="bootstrap-treetable">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/bootstrap-treetable/libs/v3/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/bootstrap-treetable/bootstrap-treetable.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/AdminLTE-2.4.9/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/cms/AdminLTE-2.4.9/css/skins/skin-black.min.css">
    <style type="text/css">
    	.padding20 {
    		padding: 20px;
    	}
    	.nav-tabs .active {
    		font-weight: bolder;
    	}

    </style>
</head>
<body class="">
	<!-- Contaent -->
	<div style="margin-top: 10px;"></div>
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#general_info_tab">General Info</a></li>
		<li><a data-toggle="tab" href="#std_part_part">Part & Jasa</a></li>
		<li><a data-toggle="tab" href="#labour_tab">Labour</a></li>
	</ul>

	<div class="tab-content">

		<div id="general_info_tab" class="tab-pane fade in active">
			<section class="content padding20">
                <div class="row">
                    <!-- left column -->
                    <form class="form-horizontal" role="form">
                        <div class="col-md-6">
                            <!-- Left Form -->                                    
                            <div class="form-group">
                                <label for="inquiry_no" class="col-sm-3 control-label">Inquiry No.</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="inquiry_no" id="inquiry_no" placeholder="Inquiry No">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="project_name" class="col-sm-3 control-label">Project Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Project name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="qty_general" class="col-sm-3 control-label">QTY</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="qty_general" id="qty_general" placeholder="Qty">
                                </div>
                                <div class="col-sm-7">
                                    <!-- <input type="text" class="form-control" name="lot_general" id="lot_general" placeholder="Lot"> -->
                                    <select class="form-control" id="lot_general" name="lot_general">
                                        <option value="" selected>Pilih Lot</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="customer" class="col-sm-3 control-label">Customer</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="customer" id="customer" placeholder="Customer">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pic_marketing" class="col-sm-3 control-label">PIC marketing</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="pic_marketing" id="pic_marketing" placeholder="PIC Marketing">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Right Form -->
                            <div class="form-group">
                                <label for="start_date" class="col-sm-3 control-label">Start Date</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control select_date" name="start_date" id="start_date" placeholder="Start Date" onchange="calcDate()">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="finish_date" class="col-sm-3 control-label">Finish Date</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control select_date" name="finish_date" id="finish_date" placeholder="Finish Date" onchange="calcDate()">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="duration" class="col-sm-3 control-label">Duration</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="duration" id="duration" placeholder="0" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="project_type" class="col-sm-3 control-label">Project Type</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="project_type" name="project_type">
                                        <option value="" selected>Pilih Lot</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="difficulty" class="col-sm-3 control-label">Difficulty</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="difficulty" name="difficulty">
                                        <option value="" selected>Pilih Lot</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>                                   
                        </div>
                    </form>
                </div>                
            </section>
		</div>

		<div id="std_part_part" class="tab-pane fade">
			<!-- <section class="">
				<div id="demo-toolbar" class="btn-group" role="group" aria-label="...">
				<button id="addBtn" type="button" class="btn btn-default">Add Section</button>
				<button id="selectBtn" type="button" class="btn btn-default">测试选中</button>
				<button id="expandRowBtn" type="button" class="btn btn-default">展开/折叠【系统管理】</button>
				<button id="expandAllBtn" type="button" class="btn btn-default">Expand/Collapse All</button>
				<button id="showColumnBtn" type="button" class="btn btn-default">Show All Column</button>
				<button id="destroyBtn" type="button" class="btn btn-default">销毁</button>
			</div>
            <table id="demo"></table>	 -->
            <div id="demo-toolbar"  class="btn-group btn-group-toggle" data-toggle="buttons">
  <button id="addBtn" type="button" class="btn btn-secondary">向表格添加数据</button>
  <button id="selectBtn" type="button" class="btn btn-secondary">测试选中</button>
  <button id="expandRowBtn" type="button" class="btn btn-secondary">展开/折叠【系统管理】</button>
  <button id="expandAllBtn" type="button" class="btn btn-secondary">展开/折叠 所有</button>
  <button id="showColumnBtn" type="button" class="btn btn-secondary">显示/隐藏 【排序】列</button>
  <button id="destroyBtn" type="button" class="btn btn-secondary">销毁</button>
</div>
<table id="demo"></table>
			</section>
			
		</div>

		<div id="labour_tab" class="tab-pane fade">
		<h3>Menu 2</h3>
		<p>Some content in menu 2.</p>
		</div>
	</div>
	<!-- /End Content -->
		
<!-- 全局js -->
<script type="text/javascript" src="<?php echo base_url();?>assets/cms/bootstrap-treetable/libs/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/cms/bootstrap-treetable/libs/v3/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/cms/bootstrap-treetable/bootstrap-treetable.js"></script>
<script type="text/javascript">
	var allData = [];
/**
    rootIdValue: null,//设置根节点id值----可指定根节点，默认为null,"",0,"0"
    id : "id",               // 选取记录返回的值,用于设置父子关系
    parentId : "parentId",       // 用于设置父子关系
    type: 'get',                   // 请求方式（*）
    url: "./data.json",             // 请求后台的URL（*）
    ajaxParams : {},               // 请求数据的ajax的data属性
    expandColumn : 0,            // 在哪一列上面显示展开按钮
    expandAll : false,                // 是否全部展开
    expandFirst : true, // 是否默认第一级展开--expandAll为false时生效
    toolbar: null,//顶部工具条
    height: 0,
    expanderExpandedClass : 'glyphicon glyphicon-chevron-down',// 展开的按钮的图标
    expanderCollapsedClass : 'glyphicon glyphicon-chevron-right',// 缩起的按钮的图标
**/
var treeTable = $('#demo').bootstrapTreeTable({
                    toolbar: "#demo-toolbar",    //顶部工具条
                    expandColumn : 1,            // 在哪一列上面显示展开按钮
                    height:500,
                    columns: [{
                        field: 'selectItem',
                        radio: true
                     },{
                        title: '菜单名称',
                        field: 'menuName',
                        width: '20%',
                        formatter: function(value,row, index) {
                            if (row.icon == null || row == "") {
                                return row.menuName;
                            } else {
                                return '<i class="' + row.icon + '"></i> <span class="nav-label">' + row.menuName + '</span>';
                            }
                        }
                    },
                    {
                        field: 'orderNum',
                        title: '排序',
                        width: '10%',
                        align: "left",
                        valign: "bottom",
                        visible: true
                    },
                    {
                        field: 'url',
                        title: 'url yo',
                        width: '15%',
                        align: "left"
                    },
                    {
                        title: '类型',
                        field: 'menuType',
                        width: '10%',
                        align: "center",
                        valign: "top",
                        formatter: function(value,item, index) {
                            if (item.menuType == 'M') {
                                return '<span class="label label-success">目录</span>';
                            }
                            else if (item.menuType == 'C') {
                                return '<span class="label label-primary">菜单</span>';
                            }
                            else if (item.menuType == 'F') {
                                return '<span class="label label-warning">按钮</span>';
                            }
                        }
                    },
                    {
                        field: 'visible',
                        title: '可见',
                        width: '10%',
                        align: "center",
                        visible: false,
                        formatter: function(value,row, index) {
                            return value;
                        }
                    },
                    {
                        field: 'perms',
                        title: 'Tes',
                        width: '15%',
                        align: "center",
                    },
                    {
                        title: '操作',
                        width: '20%',
                        align: "center",
                        formatter: function(value,row, index) {
                            var actions = [];
                            actions.push('<a class="btn btn-success btn-sm " href="#"><i class="fa fa-edit"></i>编辑</a> ');
                            actions.push('<a class="btn btn-info btn-xs " href="#"><i class="fa fa-plus"></i>新增</a> ');
                            actions.push('<a class="btn btn-danger btn-xs " href="#" ><i class="fa fa-remove"></i>删除</a>');
                            return actions.join('');
                        }
                    }],
                    data:[{
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1,
                        "menuName": "系统管理",
                        "parentName": null,
                        "parentId": 0,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "M",
                        "visible": 0,
                        "perms": "",
                        "icon": "glyphicon glyphicon-thumbs-up"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 2,
                        "menuName": "系统监控",
                        "parentName": null,
                        "parentId": 0,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "M",
                        "visible": 0,
                        "perms": "",
                        "icon": "glyphicon glyphicon-thumbs-up"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 3,
                        "menuName": "系统工具",
                        "parentName": null,
                        "parentId": 0,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "M",
                        "visible": 0,
                        "perms": "",
                        "icon": "glyphicon glyphicon-thumbs-up"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 100,
                        "menuName": "用户管理",
                        "parentName": null,
                        "parentId": 1,
                        "orderNum": "1",
                        "url": "/system/user",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "system:user:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 101,
                        "menuName": "角色管理",
                        "parentName": null,
                        "parentId": 1,
                        "orderNum": "2",
                        "url": "/system/role",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "system:role:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 102,
                        "menuName": "菜单管理",
                        "parentName": null,
                        "parentId": 1,
                        "orderNum": "3",
                        "url": "/system/menu",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "system:menu:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 103,
                        "menuName": "部门管理",
                        "parentName": null,
                        "parentId": 1,
                        "orderNum": "4",
                        "url": "/system/dept",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "system:dept:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 104,
                        "menuName": "岗位管理",
                        "parentName": null,
                        "parentId": 1,
                        "orderNum": "5",
                        "url": "/system/post",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "system:post:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 105,
                        "menuName": "字典管理",
                        "parentName": null,
                        "parentId": 1,
                        "orderNum": "6",
                        "url": "/system/dict",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "system:dict:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 106,
                        "menuName": "参数设置",
                        "parentName": null,
                        "parentId": 1,
                        "orderNum": "7",
                        "url": "/system/config",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "system:config:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 107,
                        "menuName": "通知公告",
                        "parentName": null,
                        "parentId": 1,
                        "orderNum": "8",
                        "url": "/system/notice",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "system:notice:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 108,
                        "menuName": "日志管理",
                        "parentName": null,
                        "parentId": 1,
                        "orderNum": "9",
                        "url": "#",
                        "menuType": "M",
                        "visible": 0,
                        "perms": "",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 109,
                        "menuName": "在线用户",
                        "parentName": null,
                        "parentId": 2,
                        "orderNum": "1",
                        "url": "/monitor/online",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "monitor:online:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 110,
                        "menuName": "定时任务",
                        "parentName": null,
                        "parentId": 2,
                        "orderNum": "2",
                        "url": "/monitor/job",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "monitor:job:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 111,
                        "menuName": "数据监控",
                        "parentName": null,
                        "parentId": 2,
                        "orderNum": "3",
                        "url": "/monitor/data",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "monitor:data:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 112,
                        "menuName": "表单构建",
                        "parentName": null,
                        "parentId": 3,
                        "orderNum": "1",
                        "url": "/tool/build",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "tool:build:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 113,
                        "menuName": "代码生成",
                        "parentName": null,
                        "parentId": 3,
                        "orderNum": "2",
                        "url": "/tool/gen",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "tool:gen:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 114,
                        "menuName": "系统接口",
                        "parentName": null,
                        "parentId": 3,
                        "orderNum": "3",
                        "url": "/tool/swagger",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "tool:swagger:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 500,
                        "menuName": "操作日志",
                        "parentName": null,
                        "parentId": 108,
                        "orderNum": "1",
                        "url": "/monitor/operlog",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "monitor:operlog:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 501,
                        "menuName": "登录日志",
                        "parentName": null,
                        "parentId": 108,
                        "orderNum": "2",
                        "url": "/monitor/logininfor",
                        "menuType": "C",
                        "visible": 0,
                        "perms": "monitor:logininfor:view",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1000,
                        "menuName": "用户查询",
                        "parentName": null,
                        "parentId": 100,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:user:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1001,
                        "menuName": "用户新增",
                        "parentName": null,
                        "parentId": 100,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:user:add",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1002,
                        "menuName": "用户修改",
                        "parentName": null,
                        "parentId": 100,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:user:edit",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1003,
                        "menuName": "用户删除",
                        "parentName": null,
                        "parentId": 100,
                        "orderNum": "4",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:user:remove",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1004,
                        "menuName": "重置密码",
                        "parentName": null,
                        "parentId": 100,
                        "orderNum": "5",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:user:resetPwd",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1005,
                        "menuName": "角色查询",
                        "parentName": null,
                        "parentId": 101,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:role:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1006,
                        "menuName": "角色新增",
                        "parentName": null,
                        "parentId": 101,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:role:add",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1007,
                        "menuName": "角色修改",
                        "parentName": null,
                        "parentId": 101,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:role:edit",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1008,
                        "menuName": "角色删除",
                        "parentName": null,
                        "parentId": 101,
                        "orderNum": "4",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:role:remove",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1009,
                        "menuName": "菜单查询",
                        "parentName": null,
                        "parentId": 102,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:menu:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1010,
                        "menuName": "菜单新增",
                        "parentName": null,
                        "parentId": 102,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:menu:add",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1011,
                        "menuName": "菜单修改",
                        "parentName": null,
                        "parentId": 102,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:menu:edit",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1012,
                        "menuName": "菜单删除",
                        "parentName": null,
                        "parentId": 102,
                        "orderNum": "4",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:menu:remove",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1013,
                        "menuName": "部门查询",
                        "parentName": null,
                        "parentId": 103,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:dept:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1014,
                        "menuName": "部门新增",
                        "parentName": null,
                        "parentId": 103,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:dept:add",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1015,
                        "menuName": "部门修改",
                        "parentName": null,
                        "parentId": 103,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:dept:edit",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1016,
                        "menuName": "部门删除",
                        "parentName": null,
                        "parentId": 103,
                        "orderNum": "4",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:dept:remove",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1017,
                        "menuName": "岗位查询",
                        "parentName": null,
                        "parentId": 104,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:post:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1018,
                        "menuName": "岗位新增",
                        "parentName": null,
                        "parentId": 104,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:post:add",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1019,
                        "menuName": "岗位修改",
                        "parentName": null,
                        "parentId": 104,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:post:edit",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1020,
                        "menuName": "岗位删除",
                        "parentName": null,
                        "parentId": 104,
                        "orderNum": "4",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:post:remove",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1021,
                        "menuName": "字典查询",
                        "parentName": null,
                        "parentId": 105,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:dict:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1022,
                        "menuName": "字典新增",
                        "parentName": null,
                        "parentId": 105,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:dict:add",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1023,
                        "menuName": "字典修改",
                        "parentName": null,
                        "parentId": 105,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:dict:edit",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1024,
                        "menuName": "字典删除",
                        "parentName": null,
                        "parentId": 105,
                        "orderNum": "4",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:dict:remove",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1025,
                        "menuName": "参数查询",
                        "parentName": null,
                        "parentId": 106,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:config:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1026,
                        "menuName": "参数新增",
                        "parentName": null,
                        "parentId": 106,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:config:add",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1027,
                        "menuName": "参数修改",
                        "parentName": null,
                        "parentId": 106,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:config:edit",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1028,
                        "menuName": "参数删除",
                        "parentName": null,
                        "parentId": 106,
                        "orderNum": "4",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:config:remove",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1029,
                        "menuName": "公告查询",
                        "parentName": null,
                        "parentId": 107,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:notice:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1030,
                        "menuName": "公告新增",
                        "parentName": null,
                        "parentId": 107,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:notice:add",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1031,
                        "menuName": "公告修改",
                        "parentName": null,
                        "parentId": 107,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:notice:edit",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1032,
                        "menuName": "公告删除",
                        "parentName": null,
                        "parentId": 107,
                        "orderNum": "4",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "system:notice:remove",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1033,
                        "menuName": "操作查询",
                        "parentName": null,
                        "parentId": 500,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:operlog:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1034,
                        "menuName": "操作删除",
                        "parentName": null,
                        "parentId": 500,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:operlog:remove",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1035,
                        "menuName": "详细信息",
                        "parentName": null,
                        "parentId": 500,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:operlog:detail",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1036,
                        "menuName": "登录查询",
                        "parentName": null,
                        "parentId": 501,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:logininfor:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1037,
                        "menuName": "登录删除",
                        "parentName": null,
                        "parentId": 501,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:logininfor:remove",
                        "icon": "#"
                    }]
                });
                $("#selectBtn").click(function(){
                    var selecteds = $('#demo').bootstrapTreeTable('getSelections');
                    $.each(selecteds,function(_i,_item){
                        console.log(_item);
                    });
                    alert("看console");
                })
                $("#addBtn").click(function(){
                    var data = [{
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1038,
                        "menuName": "在线查询",
                        "parentName": null,
                        "parentId": 109,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:online:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1039,
                        "menuName": "批量强退",
                        "parentName": null,
                        "parentId": 109,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:online:batchForceLogout",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1040,
                        "menuName": "单条强退",
                        "parentName": null,
                        "parentId": 109,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:online:forceLogout",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1041,
                        "menuName": "任务查询",
                        "parentName": null,
                        "parentId": 110,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:job:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1042,
                        "menuName": "任务新增",
                        "parentName": null,
                        "parentId": 110,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:job:add",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1043,
                        "menuName": "任务修改",
                        "parentName": null,
                        "parentId": 110,
                        "orderNum": "3",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:job:edit",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1044,
                        "menuName": "任务删除",
                        "parentName": null,
                        "parentId": 110,
                        "orderNum": "4",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:job:remove",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1045,
                        "menuName": "状态修改",
                        "parentName": null,
                        "parentId": 110,
                        "orderNum": "5",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "monitor:job:changeStatus",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1046,
                        "menuName": "生成查询",
                        "parentName": null,
                        "parentId": 113,
                        "orderNum": "1",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "tool:gen:list",
                        "icon": "#"
                    }, {
                        "searchValue": null,
                        "createBy": "admin",
                        "createTime": "2018-03-16 11:33:00",
                        "updateBy": null,
                        "updateTime": null,
                        "remark": null,
                        "params": null,
                        "id": 1047,
                        "menuName": "生成代码",
                        "parentName": null,
                        "parentId": 113,
                        "orderNum": "2",
                        "url": "#",
                        "menuType": "F",
                        "visible": 0,
                        "perms": "tool:gen:code",
                        "icon": "#"
                    }];
                    $('#demo').bootstrapTreeTable('appendData',data);
                })
                $("#expandRowBtn").click(function(){
                    $('#demo').bootstrapTreeTable('toggleRow',1);
                })
                var _expandFlag_all = false;
                $("#expandAllBtn").click(function(){
                    if(_expandFlag_all){
                        $('#demo').bootstrapTreeTable('expandAll');
                    }else{
                        $('#demo').bootstrapTreeTable('collapseAll');
                    }
                    _expandFlag_all = _expandFlag_all?false:true;
                })
                var _showFlag = true;
                $("#showColumnBtn").click(function(){
                    if(_showFlag){
                        $('#demo').bootstrapTreeTable('hideColumn',"orderNum");
                    }else{
                        $('#demo').bootstrapTreeTable('showColumn',"orderNum");
                    }
                    _showFlag = _showFlag?false:true;
                })
                $("#destroyBtn").click(function(){
                    $('#demo').bootstrapTreeTable('destroy');
                })

    var idInc = 2;
    
    function addData(parentId,tipeItem){
    	// console.log(this)
    	// return;
    	if(tipeItem == 'item'){
    		alert('Item tidak bisa mempunyai sub!');
    		return;
    	}
    	var tipeItemChild = '';
    	switch(tipeItem){
    		case 'section':
    			tipeItemChild = 'object';
    		break;
    		case 'object':
    			tipeItemChild = 'sub_object';
    		break;
    		case 'sub_object':
    			tipeItemChild = 'item';
    		break;
    	}


    	// console.log(parentId, id);
    	// return;

    	idInc++;
    	var data = [];
    	data.push({
	            "searchValue": null,
	            "createBy": "admin",
	            "createTime": "2018-03-16 11:33:00",
	            "updateBy": null,
	            "updateTime": null,
	            "remark": null,
	            "params": null,
	            "tipeItem": tipeItemChild,
	            "id": idInc,
	            "menuName": "data baru 1",
	            "parentName": null,
	            "parentId": parentId,
	            "orderNum": "1",
	            "url": "#",
	            "menuType": "F",
	            "visible": 0,
	            "perms": "monitor:online:list",
	            "icon": "#"
        });

        allData.push({
	            "searchValue": null,
	            "createBy": "admin",
	            "createTime": "2018-03-16 11:33:00",
	            "updateBy": null,
	            "updateTime": null,
	            "remark": null,
	            "params": null,
	            "tipeItem": tipeItemChild,
	            "id": idInc,
	            "menuName": "data baru 1",
	            "parentName": null,
	            "parentId": parentId,
	            "orderNum": "1",
	            "url": "#",
	            "menuType": "F",
	            "visible": 0,
	            "perms": "monitor:online:list",
	            "icon": "#"
        });
        $('#demo').bootstrapTreeTable('appendData',data);
        console.log(allData);
    }
</script>
</body>
</html>
