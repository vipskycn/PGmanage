<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-CN" ng-app="management">
    <head>
        <meta charset="UTF-8" />
        <meta content="charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>游乐场后台管理系统</title>
        <meta name="author" content="vipskycn">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/manage.ico">
		<link href="style/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="fonts/iconfont.css" />
        <link rel="stylesheet" href="style/basic.css" />

        
        <script type="text/javascript" src="libs/jquery-1.12.2.min.js"  ></script>
        <script type="text/javascript" src="libs/bootstrap.min.js" ></script>
        <script type="text/javascript" src="libs/angular.min.js"></script>
        
        <script>
            angular.module("management", ["customFilters","cusServices"])
            ;
        </script>
        <script src="script/cusFilters.js" type="text/javascript"></script>
        <script src="script/cusService.js" type="text/javascript"></script>
        <script src="script/pgController.js" type="text/javascript"></script>

        <style>
/*             thead th{min-width:80px} */
            .th{
                display:table-cell;
                font-weight: bold;
                width: 100px;
            }
        </style>
    </head>

    <body ng-controller="manageCtrl">
        <div id="leftFrame" class="leftFrame">
        <div class="adminCon">
                <div class="adminInfo">
                	<span id="userName"><?php echo $_SESSION['user'] ?></span>
                	<a class="mBtn btn-w mBtn_mini fr" href="handle/loginOut.php">注销</a>
                </div>
            </div>
            <div class="leftFrameHead">
                    操作菜单
            </div>
            
            <div class="itemList">
                <div class="itemWarp" >
<!--                 	<span>{{item.projName}}</span> -->
                	<ul class="itemCellList" >
                        <li class="" ng-repeat="item in projectItem" ng-click="selectProj(item)" >{{item.itemName}}</li>
                    </ul>
                 </div>
            </div>
        </div>

        <div id="rightFrame" class="rightFrame">            
           <div ng-include="projectName" id="projectWarp" style="background: #eaeef1;padding: 10px">
           </div>
                        
        </div>
    </body>
    <script src="script/manage.js" type="text/javascript"></script>
    <script>
    var $LF = $("#leftFrame");
    var $RF = $("#rightFrame");
    var $Pr = $("#projectWarp");
    init();
    
//     window.addEventListener("resize",init,false);
    </script>
</html>
