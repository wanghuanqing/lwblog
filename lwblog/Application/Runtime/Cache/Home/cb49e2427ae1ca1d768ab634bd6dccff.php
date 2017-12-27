<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学院简介</title>
    <link rel="stylesheet" href="/u2/Public/Front/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Front/css/index.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        
        .title {
            width: 100%;
            background-color: #393d49;
            /* margin: -45px auto 0px; */
            position: fixed;
            top: 104px;
        }
        
        .title div {
            margin: 0 auto;
            /* border: 1px solid black; */
            width: 954px;
        }
        
        .title li {
            margin: 0 auto;
            float: left;
            width: 119px;
            height: 35px;
            font-size: 16px;
            /* border: 1px solid green; */
            text-align: center;
            line-height: 35px;
            color: #ffffff;
        }
        
        .title .clear {
            clear: both;
        }
        
        .subject {
            border: 1px solid black;
            width: 855px;
            margin: 150px auto;
            padding: 40px 50px;
            background-color: #ffffff;
        }
        
        .footer {
            width: 100%;
            background-color: #393d49;
        }
        
        .footer div {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="main">
            <a class="logo" href="#" title="Fly">Fly社区</a>
            <div class="nav">
                <!-- <a class="nav-this" href="index.html">
                    <i class="iconfont icon-wenda"></i>问答
                </a>
                <a href="http://www.layui.com/" target="_blank">
                    <i class="iconfont icon-ui"></i>框架
                </a> -->
                <a href="joblist.html">兼职信息</a>
                <a href="lostlist.html">失物招领</a>
                <a href="course.html">课程信息</a>
                <a href="swap.html">旧物交换</a>
                <a href="index.html">学院简介</a>
            </div>

            <div class="nav-user">
                <!-- 未登入状态 -->
                <a class="unlogin" href="login.html"><i class="iconfont icon-touxiang"></i></a>
                <?php if($_SESSION['uid'] != '' ): ?>欢迎 ： <?php echo ($_SESSION['uname']); ?> <button onclick="layout()" id="layout">注销</button>
                    <?php else: ?> <span><a href="login.html">登入</a><a href="register.html">注册</a></span><?php endif; ?>

                <!-- <?php if(($v["lock"]) == "0"): ?>正常
                    <?php else: ?>锁定<?php endif; ?> -->
                <!-- <span><a href="login.html">登入</a><a href="register.html">注册</a></span> -->
                <!-- <p class="out-login">
                    <a href="" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq" title="QQ登入"></a>
                    <a href="" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-weibo" title="微博登入"></a>
                </p> -->

                <!-- 登入后的状态 -->

                <!-- <a class="avatar" href="#">
                    <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
                    <cite>贤心</cite>
                    <i>VIP2</i>
                </a>
                <div class="nav">
                    <a href="#"><i class="iconfont icon-shezhi"></i>设置</a>
                    <a href=""><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>退了</a>
                </div> -->

            </div>
        </div>
    </div>

    <div class="title">
        <div>
            <ul>
                <li>学校简介</li>
                <li>现任领导</li>
                <li>学校章程</li>
                <li>校训</li>
                <li>校标</li>
                <li>校歌</li>
                <li>校旗</li>
                <li>龙岩学院赋</li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <div class="subject"></div>
    <!-- <div class="footer">
        <div>
            <p>校园信息发布系统</p>
        </div>
        <hr style="background-color:#717171;">
        <div>
            <p>成员</p>
        </div>
    </div> -->

    <script src="/u2/Public/Admin/js/jquery-1.11.1.min.js"></script>
    <script>
        $(function() {
                var arr = [
                    '<p style="line-height:2em;text-indent:2em;font-size:16px">龙岩学院是经中华人民共和国教育部批准设立的实行“省市共建、以市为主”管理体制的全日制多科性本科院校。学校坐落于著名革命老区——福建省龙岩市，是根植并成长于红土地的唯一一所本科院校。前身为创办于1958年的龙岩师范高等专科学校，2001年原福建资源工业学校并入龙岩师范高等专科学校，2004年5月，正式升格更名为龙岩学院。</p><p> </p><p> </p><p style="line-height:2em;text-indent:2em;font-size:16px">学校面向23个省（市、区）招收本科生以及少数民族预科生，全日制在校生11785人；现有教职工883人，专任教师599人，教师中具有副高以上职称236人，具有博士、硕士学位499人；享受国务院政府特殊津贴专家2人；设有14个二级学院、2个研究院。有40个本科专业，所设专业涵盖文学、理学、工学、经济学、管理学、教育学、农学、艺术学等八大学科门类。学校占地面积1113亩，校舍建筑总面积33万平方米，现有教学科研仪器设备总值14195.92万元，配备较为完善的体育设施和多种类的活动场所；图书馆馆藏电子图书近150万册、纸质图书近100万册、纸质报刊近1400种，拥有现代化检索系统和镜像站点，是闽西最大的文献信息中心。</p><p> </p><p> </p><p style="line-height:2em;text-indent:2em;font-size:16px">学校现有国家级特色建设专业1个，国家级专业综合改革试点项目1个，省重点学科6个，省级工程技术研究中心1个，省级重点实验室2个，省高校重点实验室2个，省高校工程研究中心2个，省高校人文社科研究基地1个；省级专业综合改革试点项目5个，省级特色建设专业7个，省级人才培养模式创新实验区5个，省级教学团队2个，省、市教学名师37人，省级精品课程11门，省部级优秀教学成果奖7项，省级实验教学示范中心8个，建立356个校外实习实训基地，成立闽台客家研究院、中央苏区研究院，设有动物医学研究所、闽西食品研究所、功能材料研究所等30个具有一定特色和优势的科研学术机构；升本以来，承担包括国家自然科学基金、国家社科基金等各级各类科研课题1746项；获各级政府奖多项，其中，获省科学技术奖二等奖1项、三等奖3项；获省社科优秀成果二等奖1项、三等奖4项，青年佳作奖1项，多位教师获得龙岩市科学技术奖、专利奖和闽西文化奖。</p><p> </p><p> </p><p style="line-height:2em;text-indent:2em;font-size:16px">学校毕业生专业基础知识扎实，实践能力较强，综合素质良好，就业质量逐年提高，受到用人单位的广泛好评；近三年，学校年度就业率平均达到95%以上，被评为福建省本科高校就业工作优秀单位。建校以来，学校已培养4万多名本专科毕业生，校友遍布全国各地、各行业，其中大多数校友已成为当地基础教育和经济社会发展的骨干力量。</p><p> </p><p> </p><p style="line-height:2em;text-indent:2em;font-size:16px">学校重视开放办学和社会服务。近几年，学校先后与美国、巴西、澳大利亚等国家和台湾、澳门等地区的高等院校及教育机构建立了校际友好合作关系，与国内许多重点院校、科研机构积极开展学术交流与合作。学校与地方政府、经济开发区、企业等建立了校地、校产、校企合作战略联盟，融入海西区域经济发展，为闽西提供技术服务和智力支持。近三年来，为地方培训各类基础教育师资、煤矿安全技术人员和其他各类技术骨干2万余人。</p><p> </p><p> </p><p style="line-height:2em;text-indent:2em;font-size:16px">2006年，校党委被省委评为“福建省先进基层党组织”；2007年，学校获准成为学士学位授权单位；2008年至今，学校连续获得第十届、十一届、十二届省级文明学校；2009年，校团委被团中央评为“全国五四红旗团委”；2010年，我校荣获全省高校系统唯一的省级“绿化先进单位”；2011年，学校在全省就业工作本科组中排名第二，被评为优秀；学校连续多年被评为省、市平安单位、高校安全稳定工作先进集体。2012年6月，学校高质量通过教育部本科教学工作合格评估。</p><p> </p><p> </p><p style="line-height:2em;text-indent:2em;font-size:16px">学校秉承“厚于德、敏于学”的校训，坚持“根植红土、致力应用、彰显特色、服务发展”的办学理念，坚持立足龙岩、服务海西、面向基层、紧贴行业，以培养应用型高级专门人才为主要目标，直接为地方经济建设和社会事业发展服务，力争办学水平位居全省同类高校前列，个别专业达到全国同类高校先进水平，为把学校建设成为服务地方、特色鲜明及引领区域文化发展的闽粤赣边全日制应用型本科院校而努力奋斗。</p><p> </p><p class="vsbcontent_end" style="text-align:right">（数据更新：2017年8月31日）</p>',
                    '<table style="margin:0 auto";><tbody><tr height="46"><td height="46" width="252" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all">　党委书记</td><td height="46" width="134" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all"> &nbsp; 王耀华</td></tr><tr height="46"><td height="46" width="252" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle">　党委副书记、校长</td><td height="46" width="134" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all"> &nbsp; 凌启淡</td></tr><tr height="46"><td height="46" width="252" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle">　党委副书记</td><td height="46" width="134" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all"> &nbsp; 朱　闽</td></tr><tr height="46"><td height="46" width="252" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle">　党委副书记</td><td height="46" width="134" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all"> &nbsp; 陈开明</td></tr><tr height="46"><td height="46" width="252" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle">　党委委员、纪委书记</td><td height="46" width="134" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all"> &nbsp; 周春盛</td></tr><tr height="46"><td height="46" width="252" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle">　党委委员、副校长</td><td height="46" width="134" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all"> &nbsp; 邹　宇</td></tr><tr height="46"><td height="46" width="252" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle">　副校长</td><td height="46" width="134" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all"> &nbsp; 杨小燕</td></tr><tr height="46"><td height="46" width="252" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all"> &nbsp; &nbsp;党委委员、副校长</td><td height="46" width="134" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all"> &nbsp; 陈立红</td></tr><tr height="46"><td height="46" width="252" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle">　党委委员、副校长</td><td height="46" width="134" style="border:1px solid #000000;color:#000000;font-size:21px;font-style:normal;font-weight:400;vertical-align:middle;word-break:break-all"> &nbsp; 邹卫东</td></tr></tbody></table>',
                    '<p style="text-align:center;line-height:2em;text-indent:2em;font-size:16px"><strong>序 言</strong></p><p> </p><p> </p><p style="line-height:2em;text-indent:2em;font-size:16px">龙岩学院是经中华人民共和国教育部批准设立的本科院校。学校坐落于著名革命老区——福建省龙岩市。前身为创办于1958年的龙岩师范高等专科学校，2001年原福建资源工业学校并入龙岩师范高等专科学校。2004年5月19日，教育部同意龙岩师范高等专科学校升格为龙岩学院。</p><p> </p><p> </p><p style="line-height:2em;text-indent:2em;font-size:16px">学校坚持“根植红土、致力应用、彰显特色、服务发展”的办学理念，坚持立足龙岩、面向全国，以培养应用型人才为主要目标，直接为区域经济建设和社会事业发展服务，力争把学校建设成为服务地方、特色鲜明的闽粤赣边全日制应用技术型本科院校。</p><p style="line-height:2em;text-indent:2em;font-size:16px"> </p><p> </p><p style="text-align:center;line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第一章 总则</span></strong></p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第一条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">章程是高等学校依法自主办学、实施管理和履行公共职能的基本准则。为明确学校的法律地位，保障学校依法办学和自主管理，建立并完善现代大学制度，保障师生合法权益，依据《中华人民共和国教育法》、《中华人民共和国高等教育法》、《高等学校章程制定暂行办法》等法律、法规和规章的规定，结合学校实际，制定本章程。</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第二条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校名称：龙岩学院。英文译名：LONGYAN &nbsp;UNIVERSITY.</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第三条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校住所地：福建省龙岩市新罗区东肖北路1号。邮政编码：364012 。</p><p style="line-height:2em;text-indent:2em;font-size:16px">学校的网址是</p><p style="line-height:2em;text-indent:2em"><a href="http://www.lyun.edu.cn/" style="font-size:16px;text-decoration:underline"><span style="font-size:16px">http://www.lyun.edu.cn</span></a>。</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第四条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校是由福建省人民政府和龙岩市人民政府共同举办的省属普通高等学校，实行“省市共建、以市为主”的管理体制。</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第五条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校为非营利性教育事业组织，具有独立法人资格，依法享有和履行相应权利义务，承担相应的法律责任。校长为学校的法定代表人。</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第六条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校实行中国共产党龙岩学院委员会（以下简称“学校党委”）领导下的校长负责制，坚持党委领导、校长负责、教授治学、民主管理。实行校、院（部）两级管理体制。</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第七条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校坚持社会主义办学方向，全面贯彻党和国家的教育方针，以立德树人为根本任务，依法自主开展人才培养、科学研究、社会服务和文化传承创新，为区域、行业和国家的经济建设及社会发展提供人才和科技支撑。</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第八条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校以全日制普通高等教育为主，兼顾成人高等教育；以学历教育为主，兼顾非学历教育；适时发展社会需要的其他类型教育。学校积极开展对外交流与协作，不断拓展国际教育合作领域。</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第九条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校大力培育和发展特色、优势学科，并根据经济与社会发展对人才的需求状况，结合学校实际，依法自主设置及调整办学的学科门类。</p><p> </p><p style="line-height:2em;text-indent:2em;font-size:16px">学校的学科专业设置涵盖文、理、工、经、管、农、教、艺等学科门类。形成以机械工程、矿业工程、材料科学与工程为主的工科，以动物医学为主的农科，以客家文化和原中央苏区研究为主的文科，多学科相互支撑、协调发展的应用型学科专业体系。</p><p> </p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第十条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校建立健全科学的质量保障体系和评价机制，不断提高教学、科研水平，全面提升办学质量。</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第十一条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校根据国家、社会需要和办学条件，合理确定办学规模。</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第十二条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校成立招生工作委员会，全面负责学校招生工作。依法制定学校有关招生规定和实施细则，编制招生计划，组织招生宣传和录取工作，开展招生考试工作的改革和科学研究。</p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第十三条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校依法颁发学业证书和学位证书。</p><p style="line-height:2em;text-indent:2em;font-size:16px"> </p><p style="text-align:center;line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第二章 举办者与学校</span></strong></p><p style="line-height:2em;text-indent:2em"><strong><span style="font-size:16px">第十四条</span></strong></p><p style="line-height:2em;text-indent:2em;font-size:16px">学校举办者支持学校依照法律和本章程独立、自主办学。学校的办学活动依法接受举办者的指导和监督。</p>',
                    '<p align="center"><img border="0" hspace="0" align="middle" src="/u2/Public/Front/images/2ifcoxl0py.gif" width="400" height="150" style="border-bottom-color: #ffffff;border-top-color: #ffffff;border-right-color: #ffffff;border-left-color: #ffffff" /></p><p align="left"><font style="color: #4d4d4d">“厚于德”，语出《周易》：“天行健，君子以自强不息”、“地势坤，君子以厚德载物”。意思是：君子自励犹天之运行不息，学者立志尤须坚忍刚毅；君子接物，度量宽厚，犹大地之博，无所不载。我们以此为校训首句，意在强调必须将德育放在人才培养的首位。</font></p> <p align="left"><br /><font style="color: #4d4d4d">&nbsp;&nbsp;&nbsp; “敏于学”，语出《论语》：“敏而好学，不耻下问”，“敏于事而慎于言”，“君子欲讷于言而敏于行”。“敏”可有敏捷、敏锐之含义，即：行动敏捷地学习新知识、新技能；目光敏锐地遵循和运用规律、追求真理、勇于创新。我们以此为校训第二句，就是要求我们在大学中要刻苦地学习、审慎地思考、精细地辨析、坚定地实践，勤奋聪敏，知行合一。</font></p> <p align="left"><br /><font style="color: #4d4d4d">&nbsp;&nbsp;&nbsp; 校训中“厚于德”倡导的是学会做人、品优德高、和谐乐群；“敏于学”倡导的是学会做事、奋发有为、与时俱进。其核心指向是：德才兼备、品学兼优。这既反映大学培养人的本质内涵，又体现素质教育对大学生的根本要求，同时也反映了中华文化价值观和闽西客家民德归厚、崇文重学的优良传统，和谐工整，自成一体，有出处、有底蕴、有特色。</font></p>',
                    '<p align="center"><font style="color: #4d4d4d"><img border="0" hspace="0" align="middle" src="/u2/Public/Front/images/29gru720tf.jpg" width="250" height="250" style="border-bottom-color: #ffffff;border-top-color: #ffffff;border-right-color: #ffffff;border-left-color: #ffffff" /></font></p> <p><font style="color: #4d4d4d">校标外环标注中、英文校名，中文用红色毛体，寓意为闽西红土地上的第一座本科大学将继承和发扬优秀革命传统。</font></p> <p align="left"><font style="color: #4d4d4d">“1958”指学院前身——龙岩师范高等专科学校创办于1958年。核心标志之创意源于东肖校区内两棵古榕树，整体寓意为“十年树木，百年树人”。树干好似翻开的两本书，苍劲挺拔，象征着龙岩学院人坚忍刚毅，志存高远；树冠枝壮叶茂，四季常青，象征龙岩学院人生机勃勃的青春活力和自强不息、奋发向上的进取精神。</font></p> <p align="left"><font style="color: #4d4d4d">基座上镌刻校训“厚于德，敏于学”，寓意为欲达“树人”之目的，应以良好的品德和好学的精神为根基。整个校标大气灵动，充满活力，昭示着学校事业与时俱进，蓬勃发展，蒸蒸日上。</font></p>',
                    '<p style="text-align:center"><img width="649" id="289o3kqgvr" src="/u2/Public/Front/images/289o3kqgvr.jpg" border="0" vspace="0" hspace="0" /></p>',
                    '<p style="text-align:center"><img width="500" id="27i0i81o0k" src="/u2/Public/Front/images/27i0i81o0k.jpg" border="0" vspace="0" hspace="0" style="float:none" /></p>',
                    '<p style="line-height:2em;text-indent:2em;font-size:16px">闽西龙岩，享誉四方。红色中国之摇篮，朱毛红军之故乡。客家祖地，山高水长。北倚武夷，襟怀三江，西通赣粤，东接厦漳。极目海天，宝岛相望。“红旗跃过汀江，直下龙岩上杭。”星星之火，燎原千里；《决议》鸿文，指引航向。英雄血染红土，山河沐浴朝阳。开国九年，神州巨变，启迪民智，教育为先。振木铎，播金声，红土地，创师专。白手起家，竭蹶艰难。惜哉！国家困厄，院校调整，宏图未展，四载停办。十年内乱，教苑凋残。高考恢复，学子拨云得见日；劫后重生，拓荒建校凤凰山。筚路蓝缕开基业,改革开放扬风帆。书山有路，百级台阶攀峰顶；焚膏继晷，箪食瓢饮苦亦甜。“农科教”结合，一专多能；德智体并重，全面发展。育人如春风化雨，传世以道德文章。春兰秋菊，碧水丹山，数十载风雨沧桑，几代人薪火相传。铸炼人才之航母，陶育教师之摇篮。</p><p></p><p></p><p style="line-height:2em;text-indent:2em;font-size:16px">新世纪，天地宽，千帆竞发，百花争艳。海西腾飞，人才为本；师专升格，时势必然。市委市府，高瞻远瞩：“举全市之力，创办龙岩学院”!资源学校，并入师专，众志成城，攻坚克难。二零零四春雷响，升本建院得实现！老区人民额手称庆，革命先烈笑慰九泉。子恢故里兮岩城南，岚光彩翠兮奇迈山，学府瑶台兮祥云缥缈，佳气氤氲兮气象万千。晨光熹微，琅琅书声；皓月当空，悠悠管弦。恩泽湖赤鲤穿云影，运动场健儿跃高竿。莲花池，花中君子，清香远溢；艺术楼，《土楼神韵》，京城展演。凤尾竹，龙吟细细；紫荆花，露珠点点。粉壁草书主席词，晨读《清平乐》；落英缤纷桃花林，夕咏“世外源”。双榕树下，思闽西英烈，功垂青史；文虎楼前，念海外侨胞，情系故园。筑巢引凤，植梧来凰，风云际会，跨越发展。国内外专家设绛帐，博硕士新秀掌杏坛。讲台三尺，丹心一片。崇人格之独立，倡学术之自由。春风大雅，万物能容；秋水文章，纤尘不染。格物致知，诚意正心，莘莘学子，塞北江南。弃燕雀之小志, 慕鸿鹄以高翔。博学笃行，宁静致远。“厚于德，敏于学”，校训历久弥新，崇德尚智，止于至善。文理工管并进，科技人文比肩。连续荣膺，省文明校；科研成果，捷报频传。重点学科，雨后春笋；合作办学，成绩斐然。实践育人重应用，根接“地气”特色显。万千桃李植八闽，青春飞扬谱新篇。老区精神千秋耀，红军英风万古传。服务经济社会，天高地阔；传承创新文化，任重道远。奋斗未有穷期，深思学森之问；加大内涵建设，践行科学发展。</p>'
                ];

                $('.subject').html(arr[0]);
                $('li').eq(0).css('color', 'red');
                $('li').click(function() {
                    $(this).css('color', 'red').siblings('li').css('color', '#ffffff');
                    // alert($(this).index());
                    $('.subject').html(arr[$(this).index()]);
                })
            })
            //注销退出
        function layout() {
            $.ajax({
                url: '<?php echo U("front/layout");?>',
                type: 'post',
                dataType: 'json',
                data: {

                },
                success: function(data) {
                    if (data.code == 200) {
                        alert(data.msg);
                        location = 'login.html';
                    } else {
                        alert(data.msg);
                    }
                }
            })
        }
    </script>
</body>

</html>