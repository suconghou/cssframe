<!doctype html> 
<html> 
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>我的CSS框架</title>
    <link rel="stylesheet" href="mycss.css">
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>

    </style> 
 
</head>
<body>
    <div id='wrapper'>
        <div class="container">
        	<div class="row clearfix">
        		<div class='column full'>
        			<div class="alert success">1.按钮,大按钮,小按钮,圆角,大圆角</div>
        		</div>
        		<div class="column half">
					<p class="success">使用<code>button</code>创建的按钮</p>
					<button>购买</button>
					<button class="success">成功</button>
					<button class="danger">删除</button>
					<button class="warning">重置</button>
					<button class="info">查看详情</button>
        		</div>
        		<div class="column half">
					<p class="info">使用<code>input</code>创建的按钮</p>
					<input type="button" value="默认">
					<input type="button" class='success' value="确认">
					<input type="button" class='danger' value="确认删除">
					<input type="button" class='warning radius' value="警告">
					<input type="button" class='info radius' value="查看">

        		</div>
        		<div class="column full">
        			<div class="alert danger">你还可以加上圆角属性<code>radius</code></div>
        		</div>
        		<div class="column half">
        			<button class="success radius">成功</button>
        			<button class="danger radius">删除吗</button>
        			<button class="warning radius">消息</button>
        			<button class="info radius">注意</button>
        		</div>
        		<div class="column half">
        			<button class="success sm">小的成功</button>
        			<button class="success sm radius">小的成功圆角</button>
        			<button class="info sm radius">小的成功圆角</button>
        			<button class="danger sm">删除此人</button>
        		</div>
        	</div>
        	<div class="row clearfix">
        		<div class="column full">
        			<div class="alert info">输入框</div>
        		</div>
        		<div class="column third">
        			<input type="text" class="success">
        			<input type="text" class="info">
        			<input type="text" class="danger">
        			<input type="text" class="warning">
        		</div>
        		<div class="column third">
        			<input type="text" class="success radius">
        			<input type="text" class="info radius">
        			<input type="text" class="danger radius">
        			<input type="text" class="warning radius">
        		</div>
        			<div class="column third">
        			
        			<textarea name="suggest" class="success" ></textarea>
        		</div>
        		
        	</div>
        	<div class="row clearfix">
        		<div class="column full">
        			<p>徽标</p>
        		</div>
        		<div class="column fourth">
        			<span class='warning'>注意</span>
        			<span class='success'>14</span>
        			<span class='info'>默认</span>
        			<span class='danger'>88/123</span>
        		</div>
        		<div class="column fourth">
        			<span class='warning radius'>注意</span>
        			<span class='success'>14</span>
        			<span class='info'>默认</span>
        			<span class='danger'>88/123</span>
        		</div>
        		<div class="column fourth">
        			<span class='warning'>注意</span>
        			<span class='success'>14</span>
        			<span class='info'>默认</span>
        			<span class='danger'>88/123</span>
        		</div>
        		<div class="column fourth">
        			<span class='warning'>注意</span>
        			<span class='success'>14</span>
        			<span class='info radius'>255</span>
        			<span class='danger radius'>88/123</span>
        		</div>
        	</div>
        	<div class="row clearfix">
        		<div class="column half">
        			<div class="alert success">提示框</div>
        			<div class="alert info">提示框</div>
        		</div>

        		<div class="column half">
        			<div class="alert danger">提示框</div>
        			<div class="alert warning">提示框</div>
        		</div>

        		<div class="column third">
        			<div class="alert warning radius">提示框</div>
        		</div>

        		<div class="column third">
        			<div class="alert success radius">提示框</div>
        		</div>

        		<div class="column third">
        			<div class="alert danger radius">提示框</div>
        		</div>
        	</div>
        	<div class="row clearfix" >
        		<div class="column two-thirds">
        			<div class="panel info radius">
        				<div class="header">面板</div>
        				<div class="body">面板正文</div>
        			</div>
        		</div>
        		<div class="column third">
        			<div class="panel success">
        				<div class="header">面板</div>
        				<div class="body">面板正文</div>
        			</div>
        		</div>
        	</div>
        	<div class="row clearfix">
        		<div class="column half">
	        	<ul class="pagination circle">
	        		<li><a href="">1</a></li>
	        		<li><a href="">2</a></li>
	        		<li class="active"><a href="">3</a></li>
	        		<li><a href="">4</a></li>
	        		<li><a href="">5</a></li>
	        		<li><a href="">16</a></li>
	        	</ul>
        		</div>
        		<div class="column half">
	        	<ul class="pagination">
	        		<li><a href="">1</a></li>
	        		<li><a href="">2</a></li>
	        		<li class="active"><a href="">3</a></li>
	        		<li><a href="">4</a></li>
	        		<li><a href="">5</a></li>
	        		<li><a href="">16</a></li>
	        	</ul>
        		</div>
        	</div>

        </div>
    </div>
<script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
</body>
</html>