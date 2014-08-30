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
        background: #eee;
    }
    header>nav{
        margin: 100px auto;
    }
    header>nav>ul>li>a{
        padding: 10px 0;
        text-indent: 2em;
        width: 100%;
        display: inline-block;
        *display: inline;
        *zoom: 1;
    }
    header>nav>ul>li>a:hover{
        color: #696;
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
    @media(max-width: 800px){
        header{
            display: none;
        }
        header>aside{
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 80px;
        }
        aside>nav>ul{
            margin: 0;
        }
        aside>nav>ul>li{
            display: inline-block;
            *display: inline;
            *zoom: 1;
            margin: 5px 0;
            text-indent: 1em;
        }
        #wrapper{
            position: inherit;
            margin-top: 60px;
        }
}
    </style>
    <title></title> 
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="javascript:go('#start')">开始使用</a></li>
                <li><a href="javascript:go('#column')">布局</a></li>
                <li><a href="javascript:go('#button')">按钮</a></li>
                <li><a href="javascript:go('#input')">输入框</a></li>
                <li><a href="javascript:go('#radius')">圆角</a></li>
                <li><a href="javascript:go('#color')">颜色填充</a></li>
                <li><a href="javascript:go('#span')">徽标</a></li>
                <li><a href="javascript:go('#pager')">分页</a></li>
                <li><a href="javascript:go('#progress')">进度条</a></li>
                <li><a href="javascript:go('#location')">面包屑</a></li>
                <li><a href="javascript:go('#nav')">导航栏</a></li>
                <li><a href="javascript:go('#panel')">面板</a></li>
                <li><a href="javascript:go('#table')">表格</a></li>
                <li><a href="javascript:go('#quote')">引用</a></li>
                <li><a href="javascript:go('#code')">代码</a></li>
            </ul>
        </nav>
    </header>
    <div id='wrapper'>
        <div class="content">
            <section>
                <h1 id="start">开始使用</h1>
                <div class="full">
                    <p>声明HTML5 DOCTYPE</p>
                    <p>引入CSS</p>
                    <p>添加CSS头部说明的内容</p>
                </div>
            </section>
            <section>
                <h1 id="column">布局</h1>
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
                    <div class="fourth" style="background:#fe6673;padding:20px 0;">
                        四分之一
                    </div>
                    <div class="three-fourths" style="background:#fea099;">
                        <div class="third" style="background:#f95;padding:20px 0;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
                            四分之三里的三分之一
                        </div>
                        <div class="two-thirds">
                            <div class="third" style="background:#f5e;padding:20px 0;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
                              四分之三里的三分之二里的三分之一
                            </div>
                            <div class="half" style="background:#e2d;padding:20px 0;white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
                              四分之三里的三分之二里的二分之一
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section>
                <h1 id="button">按钮</h1>
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
                <div class="full">
                    <div class="half">
                        <p>
                            <a href="" class="btn success">登陆</a>
                            <a href="" class="btn info">注册</a>
                            <a href="" class="btn warning">注销</a>
                            <a href="" class="btn danger">删除</a>
                            
                        </p>
                    </div>
                    <div class="half">
                        <p>
                            <a href="" class="btn">默认</a>
                        </p>
                        <p>
                            <a href="" class="btn success">链接按钮</a>
                        </p>
                        <p>
                            <a href="" class="btn info">链接按钮</a>
                        </p>
                         <p>
                            <a href="" class="btn warning">链接按钮</a>
                        </p>
                        <p>
                            <a href="" class="btn danger">链接按钮</a>
                        </p>
                    </div>
                </div>

            </section>
            <section>
                <h1 id="input">输入框</h1>
                <div class="full">
                    <p>四类别</p>
                    <p>input type 方式</p>
                    <p> success,info,warning,warning</p>
                    <p>同理下面会讲到圆角</p>
                    <p>默认宽度100%,需要容器限定</p>
                    <p>大小粗细需要的自己再限定</p>
                </div>
                <div class="full">
                    <div class="fourth">
                        <p>
                            <input type="text">
                        </p>
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
                <div class="full">
                    <div class="half">
                        <p>
                           <textarea class="danger" ></textarea>
                        </p>
                    </div>
                     <div class="half">
                        <p>
                           <textarea name="" id="" ></textarea>
                        </p>
                    </div>
                </div>

                <div class="full">
                    <div class="fourth">
                        <p>
                           <textarea class="success" ></textarea>
                        </p>
                    </div>
                     <div class="fourth">
                        <p>
                           <textarea class='info'></textarea>
                        </p>
                    </div>

                     <div class="fourth">
                        <p>
                           <textarea class="warning" ></textarea>
                        </p>
                    </div>

                     <div class="fourth">
                        <p>
                           <textarea class="danger" ></textarea>
                        </p>
                    </div>

                </div>

            </section>

            <section>
                <h1 id="radius">圆角</h1>
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
                            <button class="success radius">登陆</button>
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
                        <p>
                            <a href="" class="btn radius">链接圆角</a>
                        </p>

                        <p>
                            <a href="" class="btn round">链接圆角</a>
                        </p>

                        <p>
                            <a href="" class="btn radius success">链接圆角</a>
                        </p>

                        <p>
                            <a href="" class="btn radius info">链接圆角</a>
                        </p>

                        <p>
                            <a href="" class="btn radius danger">链接圆角</a>
                        </p>

                        <p>
                            <a href="" class="btn radius warning">链接圆角</a>
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

                        <p>
                            <textarea class="success radius" ></textarea>
                        </p>

                        <p>
                            <textarea class="danger round" ></textarea>
                        </p>
                    </div>
                </div>
                <div class="full">
                    <div class="fourth radius" style="background:#f95;height:160px;"></div>
                    <div class="fourth circle" style="background:#f00;height:160px;width:160px;"></div>
                    <div class="third round" style="background:#f65;height:160px;"></div>
                </div>
            </section>
            
            <section>
                <h1 id="color">颜色填充</h1>
                <p>success等四类,可用于p,i,b,h1,h2,h3</p>
               
                <div class="full">
                    <p class="success">success填充的P标签</p>
                    <i class="danger">danger填充的I标签</i>
                    <h3 class="info">info 填充的H3标签</h3>
                    <p class="danger">
                        B标签嵌套在P中
                        <b class="warning">warning填充的b标签</b>
                    </p>

                    <p>
                        给带有success/info/warning/danger的div添加alert即可转化为提示框
                    </p>
   
                </div>
                <br>
                <div class="full">
                    <div class="fourth">
                        <div class="success alert">
                            <p class="danger">success alert</p>
                        </div>
                    </div>
                    <div class="fourth">
                        <div class="info alert">

                            <p> info alert </p>
                        </div>
                    </div>
                    <div class="fourth">
                        <div class="warning alert">
                        <p> warning alert </p>
                        </div>
                    </div>
                    <div class="fourth">
                        <div class="danger alert">
                        <p> danger alert </p>
                        </div>
                    </div>
                </div><br>
                <div class="full">
                    <div class="half">
                        <div class="success alert radius">
                              <h3>H3标题</h3>
                            <p>带有radius的success alert</p>
                        </div>
                    </div>
                </div><br>
                <div class="full">
                    <div class="half">
                        <div class="info alert radius">
                            <h2>H2标题标题标题</h2>
                            <p>带有radius的info alert</p>
                        </div>
                    </div>
                </div><br>
                <div class="full">
                    <div class="half">
                        <div class="warning alert radius">
                            <h3>H3标题标题标题</h3>
                            <p>带有radius的warning alert,一般这样使用就比较好</p>
                        </div>
                    </div>
                </div><br>
                <div class="full">
                    <div class="half">
                        <div class="danger alert radius">
                            <h3>提示框等</h3>
                            <p>也可用带有round的danger alert</p>
                        </div>
                    </div>
                </div>
                <br>
                 <div class="full">
                    <div class="half">
                        <div class="success alert radius">
                            <h1>只包含H1标题</h1>
                        </div>
                    </div>
                </div>
                 <br>
                 <div class="full">
                    <div class="half">
                        <div class="danger alert radius">
                            <h2>只包含H2标题</h2>
                        </div>
                    </div>
                </div>

                 <br>
                 <div class="full">
                    <div class="half">
                        <div class="info alert radius">
                            <h3>只包含H3标题</h3>
                        </div>
                    </div>
                </div>

            </section>

            <section>
                <h1 id="span">徽标</h1>
                <p>同样四类</p>
                <p>success,info,danger,warning</p>
                <p>只适用于span标签</p>
                <p>可以添加圆角</p>
                <div class="full">
                    <div class="half">
                        <p>
                            <span class='success'>其中25已完成</span>
                        </p>
                        <p>
                            <span class='info'>进度69%</span>
                        </p>
                        <p>
                            <span class='warning'>版主</span>
                        </p>
                        <p>
                            <span class='danger'>管理员</span>
                        </p>
                    </div>
                    <div class="half">
                        
                        <p>
                            <span class='success radius'>155个赞</span>
                        </p>
                        <p>
                            <span class='info radius'>顶66</span>
                        </p>
                        <p>
                            <span class='warning round'>18/143</span>
                        </p>
                        <p>
                            <span class='danger round'>19</span>
                        </p>
                    </div>
                </div>
            </section>

            <section>
                <h1 id="pager">分页</h1>
                <p>ul.pager>li>a 适用样式</p>
                <p>ul.pager.success 等不同颜色</p>
                <p>ul.pager.radius 圆角</p>
                <p>ul.pager.round 圆角</p>
                <p>ul.pager.circle 圆角</p>
            
                <div class="full">
                    <div>
                        <ul class="pager success">
                            <li><a href="">首页</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">21</a></li>
                            <li><a href="">尾页</a></li>
                        </ul>
                    </div><br>
                    <div>
                        <ul class="pager info">
                            <li><a href="">首页</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">21</a></li>
                            <li><a href="">尾页</a></li>
                        </ul>
                    </div><br>
                    <div>
                        <ul class="pager warning">
                            <li><a href="">首页</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">21</a></li>
                            <li><a href="">尾页</a></li>
                        </ul>
                    </div><br>
                    <div>
                        <ul class="pager danger">
                            <li><a href="">首页</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">21</a></li>
                            <li><a href="">尾页</a></li>
                        </ul>
                    </div>
                    <br>
                    <div>
                        <ul class="pager warning radius">
                            <li><a href="">首页</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">21</a></li>
                            <li><a href="">尾页</a></li>
                        </ul>
                    </div>
                     <br>
                    <div>
                        <ul class="pager info round">
                            <li><a href="">首页</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">21</a></li>
                            <li><a href="">尾页</a></li>
                        </ul>
                    </div>
                     <br>
                    <div>
                        <ul class="pager danger circle">
                            <li><a href="">首页</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">21</a></li>
                            <li><a href="">尾页</a></li>
                        </ul>
                    </div>

                </div>

            </section>

            <section>
                <h1 id="progress">进度条</h1>
                <p>P+I的形式</p>
                <p>p.progress>i.info</p>
                <p>I可接受success/info/warning/danger样式</p>
                <p>定义I的百分比已达到填充</p>
                <p>为progress添加active使其动起来</p>
                <p>其他需求可自定义高度</p>
                <div class="full">
                    <p class="progress"><i style='width:26%'></i></p>
                    <p class="progress active"><i style='width:20%' class='info'></i></p>
                    <p class="progress active"><i style='width:30%' class='warning'></i></p>
                    <p class="progress active"><i style='width:60%' class='danger'></i></p>
                    <p class="progress active"><i class='success'></i></p>
                </div>
            </section>

            <section>
                <h1 id="location">面包屑</h1>
                <p>ul.location>li>a</p>
                <p>最后一个不需要添加a</p>
                <p>可以添加radius,round实现圆角</p>
                <div class="full">
                    <ul class="location">
                        <li><a href="">主页</a></li>
                        <li><a href="">分类新闻</a></li>
                        <li><a href="">彩票信息</a></li>
                        <li>新闻标题...</li>
                    </ul>
                </div>   
                <br>
                 <div class="full">
                    <ul class="location radius">
                        <li><a href="">主页</a></li>
                        <li><a href="">分类新闻</a></li>
                        <li><a href="">彩票信息</a></li>
                        <li>添加了radius</li>
                    </ul>
                </div>     
                <br>
                 <div class="full">
                    <ul class="location round">
                        <li><a href="">主页</a></li>
                        <li><a href="">分类新闻</a></li>
                        <li><a href="">彩票信息</a></li>
                        <li>添加了round</li>
                    </ul>
                </div>    
            </section>

            <section>
                <h1 id="nav">导航栏</h1>
                <p>nav.nav>ul>li>a</p>
                <p>nav.nav>ul.content>li>a</p>
                <p>也可以nav.nav.fixed>ul>li>a 固定在顶部</p>
                <p>也可以nav.nav.fixed>ul.content>li>a 在顶部居中固定 </p>
                <p>可以nav.nav.success 等切换效果</p>
                <p>也可以nav.nav.success.fixed 固定在顶部变换效果</p>
                <p>宽度小于800会自动响应</p>
                <p>样式繁多,建议自己DIY</p>
               
                <br>
                  <div class="full">
                    <nav class="nav">
                        <ul>
                            <li><a href="">主页</a></li>
                            <li><a href=""  class="active">下载</a></li>
                            <li><a href="">论坛</a></li>
                            <li><a href="">空间</a></li>
                            <li><a href="">关于我们</a></li>
                            <li><a href="">加入我们</a></li>
                        </ul>
                    </nav>
                </div>
                  <br>
                  <div class="full">
                    <nav class="nav success">
                        <ul>
                            <li><a href="" class="active">主页</a></li>
                            <li><a href="">下载</a></li>
                            <li><a href="">论坛</a></li>
                            <li><a href="">空间</a></li>
                            <li><a href="">关于我们</a></li>
                            <li><a href="">加入我们</a></li>
                        </ul>
                    </nav>
                </div>
                 <br>
                  <div class="full">
                    <nav class="nav info">
                        <ul>
                            <li><a href="">主页</a></li>
                            <li><a href="">下载</a></li>
                            <li><a href=""  class="active">论坛</a></li>
                            <li><a href="">空间</a></li>
                            <li><a href="">关于我们</a></li>
                            <li><a href="">加入我们</a></li>
                        </ul>
                    </nav>
                </div>
                 <br>
                  <div class="full">
                    <nav class="nav warning">
                        <ul>
                            <li><a href="">主页</a></li>
                            <li><a href="">下载</a></li>
                            <li><a href="">论坛</a></li>
                            <li><a href="">空间</a></li>
                            <li><a href=""  class="active">关于我们</a></li>
                            <li><a href="">加入我们</a></li>
                        </ul>
                    </nav>
                </div>
                 <br>
                  <div class="full">
                    <nav class="nav danger">
                        <ul>
                            <li><a href="">主页</a></li>
                            <li><a href="">下载</a></li>
                            <li><a href="">论坛</a></li>
                            <li><a href="">空间</a></li>
                            <li><a href="">关于我们</a></li>
                            <li><a href=""  class="active">加入我们</a></li>
                        </ul>
                    </nav>
                </div>
            </section>

            <section>
                <h1 id="panel">面板</h1>
                <p>div.panel.success</p>
                <p>div.panel必须伴有success,info,warning,danger中的一个</p>
                <p>可以添加圆角样式</p>
                <p>div.panel.success.radius</p>
                <br>
                <div class="full">
                    <div class="half">
                        <div class="panel success">
                           <div class="header">面板的标题</div>
                           <div class="body">面板正文</div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="full">
                    <div class="half">
                        <div class="panel info">
                           <div class="header">面板的标题</div>
                           <div class="body">面板正文</div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="full">
                    <div class="half">
                        <div class="panel warning">
                           <div class="header">面板的标题</div>
                           <div class="body">面板正文</div>
                        </div>
                    </div>
                </div><br>
                <div class="full">
                    <div class="half">
                        <div class="panel danger radius">
                           <div class="header">面板的标题</div>
                           <div class="body">面文面板正文面板正文面板正文面板正文面板正文面板正文面板正文面板正文面板正文,当然可以使用圆角样式啊</div>
                        </div>
                    </div>
                </div><br>
                <div class="full">
                    <div class="half">
                        <div class="panel success radius">
                           <div class="header">面板的标题</div>
                           <div class="body">使用了圆角样式</div>
                        </div>
                    </div>
                </div><br>
                <div class="full">
                    <div class="half">
                        <div class="panel danger radius">
                           <div class="header">面板的标题</div>
                           <div class="body">使用了圆角样式</div>
                        </div>
                    </div>
                </div>

            </section>
            <section>
                <h1 id="table">表格</h1>
                <p>table.table</p>
                <p>可以给tr添加success/info/warning/danger</p>
                <p>也可以给td添加success/info/warning/danger</p>

                <div class="full">
                    <table class="table">
                        <tr>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>2</td>
                          <td class="warning">3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td class="info">2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td class="danger">5</td>
                          <td>6</td>
                      </tr>              
                    </table>
                </div>
                <br>
                <div class="full">
                    <table class="table">
                        <thead>
                            <th>标题1</th>
                            <th>标题2</th>
                            <th>标题3</th>
                            <th>标题4</th>
                            <th>标题5</th>
                            <th>标题6</th>
                        </thead>

                        <tr class="success">
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                      </tr>
                      <tr class="info">
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                      </tr>
                      <tr class="warning">
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                      </tr>
                      <tr class="danger">
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                      </tr>              
                    </table>
                </div>

            </section>

            <section>
                <h1 id="quote">引用</h1>
                <p>使用标签blockquote</p>
                <p>内部可以使用p,以便撑开布局</p>
                <div class="full">
                    
                    <blockquote>
                        洪七公哈哈大笑，说道：“临安那皇帝小子的力气，刚够端起一只金饭碗吃饭，两只碗便端不起了。不是大宋皇帝！那位‘南帝’功夫之强，你爹爹和我都忌他三分，南火克西金，他更是老毒物欧阳锋的克星。”——射雕英雄传 十二回
                    </blockquote>  
                    <br>
                    <blockquote>
                        <p>
                        洪七公哈哈大笑，说道：“临安那皇帝小子的力气，刚够端起一只金饭碗吃饭，两只碗便端不起了。不是大宋皇帝！那位‘南帝’功夫之强，你爹爹和我都忌他三分，南火克西金，他更是老毒物欧阳锋的克星。”——射雕英雄传 十二回
                            
                        </p>
                    </blockquote>
                </div>
            </section>
            <section>
                <h1 id="code">代码</h1>
                <p>适用于代码突出</p>
                <p>可以添加success/info/warning/danger</p>
                <div class="full">
                    <code> hello world </code>&nbsp;
                    
                    <code class='info'>APPLE</code> &nbsp;
                    <code class='success'>ANDROID</code>
                    <p>
                        <code class='warning'>PHP</code>
                        <code class='danger'>JAVASCRIPT</code>
                        <code>C#</code>
                        <span>学习</span><code>C++</code><span>语言</span>
                    </p>
                </div>
            </section>
            <section>
                <h1>复合</h1>
                <p></p>
                <p></p>
                <div class="full">
                    <div class="panel success radius">
                        <div class="header">财务报表</div>
                        <div class="body">
                            <p>已完成60%,成交<span class='success radius'>15</span>笔,包含<code>322个</code></p>
                            <p class="progress active"><i class="info" style="width:60%"></i></p>
                           <table class="table">
                               <tr>
                                       <td><input type="checkbox"></td>
                                       <td>1</td>
                                       <td>2</td>
                                       <td>3</td>
                                       <td>4</td>
                                       <td>
                                           <button class="danger">删除</button>
                                           <button class="info">编辑</button>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td><input type="checkbox"></td>
                                       <td>1</td>
                                       <td>2</td>
                                       <td>3</td>
                                       <td>4</td>
                                        <td>
                                           <button class="danger">删除</button>
                                           <button class="info">编辑</button>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td><input type="checkbox"></td>
                                       <td>1</td>
                                       <td>2</td>
                                       <td>3</td>
                                       <td>4</td>
                                        <td>
                                           <button class="danger">删除</button>
                                           <button class="info">编辑</button>
                                       </td>
                                   </tr>    
                           </table>
                            <div class="full">
                               <div class="third">
                                 <p>
                                
                                    <button class="info">添加</button>
                                    <button class="warning">添加</button>
                                </p>
                               </div>
                               
                               <div class="third">
                              
                                   <p>
                                       <button class="success">查看更多</button>
                                       <button class="danger">全部删除</button>
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div style="height:400px;">
              
            </div>
        </div>
    </div>
    <footer>
        
    </footer>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script>
    $(function(){
        window.go=function(x)
        {
            $("html,body").animate({scrollTop:$(x).offset().top},900);
        }
    });
</script>
</body>
</html>