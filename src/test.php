<!doctype html> 
<html> 
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit"> 
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
        <script src="http://cdn.bootcss.com/html5media/1.1.8/html5media.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="frame.css">
    <style>
    header{
        position: fixed;
        left: 0;
        width: 200px;
        top: 0;
        bottom: 0;
        background: #d9d9d9;
    }
    header>nav{
        margin: 100px auto;
    }
    header>nav>ul>li>a{
        padding: 10px 0;
        text-align: center;
        width: 100%;
        display: inline-block;
        *display: inline;
        *zoom: 1;
    }

    #wrapper{
        position: absolute;
        left: 200px;
        top: 0;
        right: 0;
    }
    .content{
        width: 94%;
        max-width: 1600px;
    }
    section{
        padding: 20px 10px;
    }
    </style>
    <title></title> 
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">开始使用</a></li>
                <li><a href="">布局</a></li>
                <li><a href="">按钮</a></li>
                <li><a href="">输入框</a></li>
                <li><a href="">圆角</a></li>
            </ul>
        </nav>
    </header>
    <div id='wrapper'>
        <div class="content">
            <section>
                <h1>开始使用</h1>
                <div class="full">
                    <p>声明HTML5 DOCTYPE</p>
                    <p>引入CSS</p>
                    <p>添加CSS头部说明的内容</p>
                </div>
            </section>
            <section>
                <h1>布局</h1>
                <div class="full">
                    <p>4栅格系统</p>
                    <p>full 满格</p>
                    <p>half 一半</p>
                    <p>third 三分一</p>
                    <p>fourth 四分一</p>
                    <p>two-thirds 三分之二</p>
                    <p>three-fourths 四分之三</p>
                    <p>需要偏移的可以直接添加 floatr</p>
                    <p>宽度小于800则会自动响应</p>
                </div>
                <div class="full" style="background:#2ae0c8;padding:20px 0;">
                    满栅格
                </div>
                <div class="full">
                    <div class="half" style="background:#a2e1d4;padding:20px 0;">
                        二分之一
                    </div>
                </div>
                <div class="full">
                    <div class="third" style="background:#acf6ef;padding:20px 0;">
                        三分之一
                    </div>
                </div>
                <div class="full">
                    <div class="fourth" style="background:#cbf5fb;padding:20px 0;">
                        四分之一
                    </div>
                </div>
                <div class="full">
                    <div class="three-fourths floatr" style="background:#bdf3d4;padding:20px 0;">
                        四分之三加上右偏移
                    </div>
                </div>
                <div class="full">
                    <div class="two-thirds" style="background:#e6e2c3;padding:20px 0;">
                        三分之二
                    </div>
                    <div class="third"  style="background:#e3c887;padding:20px 0;">
                        三分之一
                    </div>
                </div>
                <div class="full">
                    <div class="three-fourths" style="background:#fad8be;padding:20px 0;">
                        四分之三
                    </div>
                    <div class="fourth" style="background:#fbb8ac;padding:20px 0;">
                        四分之一
                    </div>
                </div>
                <div class="full">
                    <div class="half" style="background:#fe6673;padding:20px 0;">
                        二分之一
                    </div>
                    <div class="half" style="background:#fea099;padding:20px 0;">
                        二分之一
                    </div>
                </div>
            </section>
            <section>
                <h1>按钮</h1>
                <div class="full">
                    <p>全部使用button方式</p>
                    <p>默认为直角,圆角下面会讲到</p>
                    <p>四类别</p>
                    <p>需要大小高矮自己再去限定吧</p>
                    <p>success , info ,warning ,danger</p>
                    <p>宽度小于800会自动响应</p>
                </div>
                <div class="full">
                    <button class="success">登陆</button>
                    <button class="info">注册</button>
                    <button class="warning">注销</button>
                    <button class="danger">删除</button>
                </div>
                <div class="full">
                    <div class="half">
                        <p>
                            <button class="success">发布帖子</button>
                        </p>

                        <p>
                            <button class="info">确认回复</button>
                        </p>

                        <p>
                            <button class="success">修改主题</button>
                        </p>

                        <p>
                            <button class="danger">屏蔽此人</button>
                        </p>
                    </div>
                </div>

            </section>
            <section>
                <h1>输入框</h1>
                <div class="full">
                    <p>四类别</p>
                    <p>同理下面会讲到圆角</p>
                    <p>默认宽度100%,需要容器限定</p>
                    <p>大小粗细需要的自己再限定</p>
                </div>
                <div class="full">
                    <div class="fourth">
                        <p>
                            <input type="text" class="success">
                        </p>
                        <p>
                            <input type="text" class="info">
                        </p>
                        <p>
                            <input type="text" class="warning">
                        </p>
                        <p>
                            <input type="text" class="danger">
                        </p>
                    </div>
                </div>
                <div class="full">
                    <div class="three-fourths">
                        <p>
                            <input type="text" class="success">
                        </p>
                    </div>
                </div>

                <div class="full">
                    <div class="half">
                        <p>
                            <input type="text" class="success">
                        </p>
                    </div>
                </div>

                <div class="full">
                    <div class="third">
                        <p>
                            <input type="text" class="success">
                        </p>
                    </div>
                </div>
            </section>

            <section>
                <h1>圆角</h1>
                <div class='full'>
                    <p>可以将圆角样式应用于大多数元素</p>
                    <p>分为三类</p>
                    <p>radius 小圆角</p>
                    <p>round 大圆角</p>
                    <p>circle 圆</p>
                    
                </div>
                <div class="full">
                    <div class="half">
                        <p>
                            <button class="success radius">马上登陆</button>
                        </p>
                        <p>
                            <button class="info radius">返回首页</button>
                        </p>
                        <p>
                            <button class="warning round">继续添加</button>
                        </p>
                        <p>
                            <button class="danger round">加入黑名单</button>
                        </p>
                    </div>
                </div>
                <div class="full">
                    <div class="two-thirds">
                        <p>
                            <input type="text" class="success radius">
                        </p>
                        <p>
                            <input type="text" class="info radius">
                        </p>
                        <p>
                            <input type="text" class="warning round">
                        </p>
                        <p>
                            <input type="text" class="danger round">
                        </p>
                    </div>
                </div>
                <div class="full">
                    <div class="fourth radius" style="background:#f95;height:160px;"></div>
                    <div class="fourth circle" style="background:#f00;height:160px;width:160px;"></div>
                    <div class="third round" style="background:#f65;height:160px;"></div>
                </div>
            </section>
            
            <div style="height:220px;">
              
            </div>
        </div>
    </div>
    <footer>
        
    </footer>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>