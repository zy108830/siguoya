@extends('home.common.layout')
@section('main')
    <div class="sidebarMenu">
            <ul id="sidebar-ul" class="nav nav-sidebar">
                <li class="active"><a id="basicLink" href="#basicInfo" >基本信息<span class="sr-only">(current)</span></a></li>
                <li><a id="skillLink" href="#skill">技能水平</a></li>
                <li><a id="expLink"  href="#exp">工作经历</a></li>
                <li><a id="demoLink" href="#demo">项目案例</a></li>
                <li><a id="rateLink" href="#rate">自我评价</a></li>
            </ul>
        </div>
    <div class="mainContent">
            <div id="basicInfo">
                <div class="titleArea">
                    <h1>基本信息</h1>
                </div>
                <div class="contentArea">
                    <div class="row">
                        <ul class="list-unstyled">
                            <div class="col-xs-4">
                                <table class="table table-hover">
                                    <tr>
                                        <td>姓名</td><td>曾庆权</td>
                                    </tr>
                                    <tr> <td>性别</td><td>男</td></tr>
                                    <tr><td>出生年月</td><td>1992.10.08</td></tr>
                                    <tr> <td>学历</td><td>本科</td></tr>
                                    <tr> <td>工作经验</td><td>两年</td></tr>
                                    <tr><td>联系电话</td><td>15521190637</td></tr>
                                    <tr>
                                        <td>邮箱</td><td><a href="mailto:924714558@qq.com">924714558@qq.com</a></td>
                                    </tr>
                                    <tr>
                                        <td>毕业学校</td><td>广州大学</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-xs-4 col-xs-offset-3">
                                <img src="/img/common/user/zqq.jpg" alt="曾庆权的个人头像"/>
                            </div>
                        </ul>
                    </div>
                    <h4>期望薪资以及工作地点:</h4>
                    <p>广州/深圳 月薪10k</p>
                </div>
            </div>
            <div id="skill">
                <div class="titleArea">
                    <h1 >技能水平</h1>
                </div>
                <div class="contentArea">
                    <div id="skill_front">
                        <p>前端</p>
                        <ul>
                            <li>精通Bootstrap前端框架,研究过其源码,无论在PC端还是手机端,都能够做出用户友好型的基于响应式设计的网站</li>
                            <li>能够灵活运用HTML、CSS、LESS、JS、JQ、Ajax、XML、JSON等技术,并且研究过jQuery2.0以上版本的源码,以及FIS、Grunt等前端自动化开发工具的基本使用</li>
                            <li>熟悉http/tcp协议,能够对Bug进行很好的跟踪排错</li>
                        </ul>
                    </div>
                    <div id="skill_back">
                        <p>后台:</p>
                        <ul>
                            <li>
                                精通ThinkPHP框架,了解CI框架与YII框架,能够根据不同的业务需求选取不同的PHP框架
                            </li>
                            <li>
                                熟悉WeiPHP框架,能够对微信公众账号进行二次开发
                            </li>
                            <li>
                                熟练使用PHP技术,深入了解模版引擎的原理与自主开发PHP框架的流程,有过博客、CMS、电商、SNS四种类型网站的开发经验
                            </li>
                            <li>
                                熟悉MYSQL数据库,区分数据库不同存储引擎的特性,具有索引优化、查询优化、事务处理和性能优化方面的经验;
                            </li>
                        </ul>
                    </div>
                    <div id="skill_server">
                        <p>服务器:</p>
                        <ul>
                            <li>
                                熟悉Mac系统的使用,以及阿里云上Centos系列服务器的运营与维护,同时管理过3台阿里云服务器,不断尝试通过Shell脚本来使运维变得自动化
                            </li>
                            <li>
                                能够熟练搭建SVN/Git,SSH、FTP等常用的开发环境,并在WAMP、LNMP、MNMP不同的开发环境下进行Web开发
                            </li>
                        </ul>
                    </div>
                    <div id="skill_other">
                        <p>其他:</p>
                        <ul>
                            <li>
                                带领6人的技术团队通过Worktile、SVN/Git等工具进行商业性网站的产品协作开发
                            </li>
                            <li>
                                目前在运营维护这个基于Laravel框架的技术博客,以期对自己大学四年的技术所学进行系统回顾与总结
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="exp">
                <div class="titleArea">
                    <h1>工作经历</h1>
                </div>
                <div class="contentArea">
                    <ul>
                        <li>2013年09月—2013年12月 广州名动漫公司论坛网站开发 PHP程序员</li>
                        <li>2013年01月—2014年06月 广州大学淬砺工作站微信开发 PHP程序员</li>
                        <li>2014年09月—2014年12月 广州毛毛虫网络科技有限公司 PHP工程师</li>
                        <li>2015年01月—2015年08月 广州蝶梦网络科技有限公司 CTO</li>
                    </ul>
                </div>
            </div>
            <div id="demo">
                <div class="titleArea">
                    <h1>项目案例</h1>
                </div>
                <div class="contentArea">
                    <div id="firstDemo">
                        <h2 class="sub-header">项目一: 高校狗— <a href="http://www.caugoo.com/">http://www.caugoo.com/</a></h2>
                        <p>项目描述:一个C2B型的专业的校园场地整合平台,采用共享经济模式一
                           年时间,业务扩展到全国</p>
                        <p>负责内容:全栈开发</p>
                        <p>详细工作:</p>
                        <ul>
                            <li>根据设计图,进行前端页面代码HTML、CSS、JS的编写</li>
                            <li>根据业务需求,进行数据库的优化设计</li>
                            <li>优化前端代码,提高前端性能,利用HTTP协议和前端数据库,对场地图片以及场地的查询结果信息进行缓存</li>
                            <li>后台管理—网站注册用户信息的综合处理</li>
                            <li>后台管理—校园场地信息的综合处理</li>
                            <li>后台管理—网站订单信息的综合处理</li>
                            <li>网站安全:JS验证、服务器端验证,数据库端验证,可疑IP跟踪</li>
                            <li>团队协作:利用Worktile和SVN进行协作开发以及项目的版本控制</li>
                        </ul>
                    </div>
                    <div id="secondDemo">
                        <h2 class="sub-header">项目二:我想要—<a href="http://www.woxiangyao.me/">http://www.woxiangyao.me/</a></h2>
                        <p>项目描述:一个C2C型的服务交易平台,为互联网企业免费做校园推广, 让大学生躺着就能挣钱</p>
                        <p>负责内容:全栈开发</p>
                        <p>具体工作:</p>
                        <ul>
                            <li>购买域名和阿里云Centos服务器并备案,配置Git/FTP服务器,搭建网站开发环境</li>
                            <li>选取JQ框架,Bootstrap前端框架和ThinkPHP后台框架作为网站开发的底层框架</li>
                            <li>整合以CI框架为基础的社区模块,并进行二次开发</li>
                            <li>实现根据不同参数自动生成二维码、手机短信/语音验证码、支付宝支付等API的开发调用功能</li>
                            <li>通过WeiPHP框架进行产品的微信公众账号开发,使产品可以支持跨设备浏览</li>
                            <li>网站安全:JS验证、服务器端验证,数据库端验证,可疑IP跟踪,系统防火墙,服务防火墙以及SELinux设置,对Linux服务器日志进行分析排障</li>
                            <li>团队协作:利用MindNode,WizNote,Worktile和Git进行协作开发以及项目的版本控制</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="rate">
                <div class="titleArea">
                    <h1>自我评价</h1>
                </div>
                <div class="contentArea">
                    <div id="firstDemo">
                        <p>优点</p>
                        <ul>
                            <li>放荡不羁爱编程,对新技术有强烈兴趣,渴望成为一代技术大牛</li>
                            <li>踏实诚信,时间观念强,不断对自我提出高标准的要求</li>
                            <li>CSDN、博客园、Github是心灵之归属,汲取营养的圣地,通过WizNote笔记整理自身所学,并建立技术博客,不断反省归纳</li>
                            <li>对英语很感兴趣,经常翻墙,乐意研究框架之源码</li>
                            <li>希望找一家靠谱的公司,做感兴趣的项目,奉献我的一腔热血</li>
                        </ul>
                    </div>
                    <div id="secondDemo">
                        <p>缺点</p>
                        <ul>
                            <li>尽管很拼命,很努力,但是关于计算机的机器语言以及数据结构与算法等知识掌握的较为不好</li>
                            <li>由于学习的技术涉及面较广,对API文档有很深的依赖</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection