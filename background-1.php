<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// 新增CSRF令牌初始化
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive bootstrap landing template">

    <link rel="icon" type="image/png" href="images/bilibili.png">

    <title>长期护理保险</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link href="css/owl-carousel.css" rel="stylesheet">

    <!-- Icon CSS -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

</head>


<body>


    <div class="logo-box">
        <a href="index.html">
            <img src="images/title.png" alt="logo" height="64">
        </a>
    </div>

    <!-- Navigation Bar-->
    <header id="topnav">

        <div class="container">
            <a href="#" class="logo-mobile">
                <img src="images/title.png" alt="logo">
            </a>
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">

                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li>
                        <a href="index.html">主页</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#">研究背景</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="background-1.php">长期护理</a>
                            </li>
                            <li>
                                <a href="background-2.html">长期护理保险制度</a>
                            </li>
                            <li>
                                <a href="background-3.html">长期护理试点城市</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="method.html">研究方法</a>
                    </li>
                    <li>
                        <a href="process.html">实验过程</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">结果分析</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="description.html">描述性统计</a>
                            </li>
                            <li>
                                <a href="regression.html">回归结果分析</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">异质性分析</a>
                                <ul class="submenu">
                                    <li><a href="old-ratio.html">老龄化异质性分析</a></li>
                                    <li><a href="location.html">区域性异质性分析</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">稳健性检验</a>
                                <ul class="submenu">
                                    <li><a href="parall.html">平行趋势检验</a></li>
                                    <li><a href="comfort.html">安慰剂检验</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="reference.html">参考文献</a>
                    </li>
                    <li>
                        <a href="contact.html">联系作者</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="toggle-search" data-target="#search-wrap"><i
                                class="mdi mdi-magnify noti-icon"></i></a>
                    </li>
                </ul>
                <!-- End navigation menu-->
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->


    <!-- Search input -->
    <div class="search-wrap" id="search-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="search-bar">
                        <form>
                            <input class="search-input" type="search" placeholder="Search" />
                        </form>
                        <a href="javascript:void(0);" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section">
        <div class="container">

            <div class="row">
                <!-- Content-->
                <div class="col-lg-8">

                    <!-- Post-->
                    <article class="post">
                        <div class="text-center post-header">
                            <h2 class="post-title"><a href="background-1.php" title="">长期护理</a>
                            </h2>
                        </div>

                        <div class="blog-detail-description">
                            <p> &emsp;&emsp;长期护理（Long-Term Care, LTC）长期护理是指在一个较长的时期内，持续地为患有慢性疾病（Chronic
                                illness），譬如早老性痴呆等认知障碍（Cognitive impairment）或处于伤残状态下，即功能性损伤（Functional
                                impairment）的人提供的护理。这种护理包括：医疗服务、社会服务、居家服务、运送服务或其他支持性的服务。与传统家庭护理不同，长期护理强调服务的社会化、规范化和系统性，这其中不仅包括非正式的家庭成员照护，也涵盖了医疗机构、养老机构等专业机构提供的一些正式服务。
                            </p>

                            <p> &emsp;&emsp;从长期护理服务的对象来看，长期护理主要面向的是患有慢性疾病（如阿尔茨海默病）、退行性疾病或存在功能性损伤的群体，其中在这些人中，老年人口占比最高。例如，截至目前为止，我国的失能老年人口已经超过了3750万，空巢老人已经突破了1亿，这些都使专业护理的需求变的更加迫切。服务内容包括，但不局限于医疗护理（如压疮护理、鼻饲管置换、呼吸机使用指导）与生活照料（如协助进食、清洁护理、翻身叩背）。值得我们注意的是，目前长期护理已经突破了单纯的，只是作为生活辅助的范畴，逐步扩大为康复治疗、心理干预、临终关怀等更加多元化的服务
                            </p>

                            <p> &emsp;&emsp;为什么大家如此重视长期护理，是因为其对于人权尊严的维护。世界卫生组织曾经强调，服务设计的理念首先需要尊重个体选择权，并且通过个性化的护理计划帮助患者实现“最大可能的自主参与”，例如允许失能老人自主选择护理时段、服务项目甚至临终关怀方式。而这种理念在我国青岛、绍兴等许多试点城市的实践中得到了体现。另外护理机构需要制定，以患者为中心的方案，并健全相应的机制确保服务透明性。因为随着人口老龄化不断加剧，长期护理已经从单一的家庭责任，转变为社会共担责任，它的发展水平直接关乎着整个社会的公平与和谐。
                            </p>

                            <div class="mt-5">
                                <h6>标签:</h6>
                                <div class="tagcloud">
                                    <a href="#">长期护理保险</a>
                                    <a href="#">市场创新</a>
                                    <a href="#">量化回归模型</a>
                                    <a href="#">实证分析</a>
                                    <a href="#">DID</a>
                                    <a href="#">NLP</a>
                                </div>
                            </div>







                            <!--comment start-->
                            <div class="mt-5">
                                <h5 class="page-title-alt"><span>评论</span></h5>
                            </div>

                            <ul class="media-list list-unstyled">
                                <?php
                                require __DIR__ . '/includes/db_connect.php';
                                try {
                                    // 从数据库读取评论（按时间倒序）
                                    $stmt = $pdo->query("SELECT * FROM comments ORDER BY created_at DESC");

                                    while ($row = $stmt->fetch()):
                                        // 格式化日期（与原设计风格一致）
                                        $formatted_date = date("M d, Y, h:i a", strtotime($row['created_at']));
                                        ?>
                                        <li class="media">
                                            <img class="d-flex mr-3 rounded-circle"
                                                src="images/user/user-<?= $row['avatar_id'] ?>.png"
                                                alt="用户头像-<?= $row['avatar_id'] ?>">
                                            <div class="media-body">
                                                <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp;
                                                    回复</a>
                                                <h4 class="media-heading"><?= htmlspecialchars($row['author']) ?></h4>
                                                <p class="text-muted post-date"><?= $formatted_date ?></p>
                                                <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
                                            </div>
                                        </li>
                                        <?php
                                    endwhile;
                                } catch (PDOException $e) {
                                    echo '<div class="alert alert-danger">评论加载失败</div>';
                                }
                                ?>
                            </ul>






                            <!-- 错误提示 -->
                            <?php if (!empty($_SESSION['comment_errors'])): ?>
                                <div class="alert alert-danger mt-4">
                                    <?php foreach ($_SESSION['comment_errors'] as $error): ?>
                                        <div><?= htmlspecialchars($error) ?></div>
                                    <?php endforeach;
                                    unset($_SESSION['comment_errors']); ?>
                                </div>
                            <?php endif; ?>

                            <!-- 成功提示 -->
                            <?php if (!empty($_SESSION['comment_success'])): ?>
                                <div class="alert alert-success mt-4">
                                    评论提交成功！
                                </div>
                                <?php unset($_SESSION['comment_success']); endif; ?>

                            <form action="submit_comment.php" method="post">
                                <!-- CSRF令牌 -->
                                <input type="hidden" name="csrf_token"
                                    value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="author" placeholder="姓名*"
                                                value="<?= htmlspecialchars($_SESSION['form_data']['author'] ?? '') ?>"
                                                required maxlength="50">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="邮箱*"
                                                value="<?= htmlspecialchars($_SESSION['form_data']['email'] ?? '') ?>"
                                                required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="comment" rows="5" placeholder="留言内容*"
                                                required
                                                maxlength="1000"><?= htmlspecialchars($_SESSION['form_data']['comment'] ?? '') ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <?php unset($_SESSION['form_data']); ?>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-dark">发布</button>
                                    </div>
                                </div>
                            </form>
                            <!--comment end-->
















                        </div>

                    </article>
                    <!-- Post end-->



                </div>
                <!-- Content end-->


                <!-- Sidebar-->
                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- About widget-->
                        <aside class="widget">
                            <div class="widget-title">简介</div>

                            <div class="about-widget">
                                <img src="images/photo1.jpg" alt="About" class="rounded-circle">

                                <p>长期护理险（Long term care insurance），简称长护险，是针对那些身体衰弱
                                    、生活不能自理或者不能完全自理，需要他人辅助全部或部分日常生活的被保险人，为其在护理院、
                                    医院和家中接受的长期医疗护理或者照顾性护理服务提供经济保障的保险。中国的长期护理保险是
                                    社会保险的一部分，被称为在养老、医疗、工伤、失业、生育五项社会保险之外的社保“第六险”。</p>

                                <a href="background-1.php" class="btn-read-more mt-2">了解更多<i
                                        class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </aside>


                        <!-- Social widget-->
                        <aside class="widget">
                            <div class="widget-title">订阅 & 关注</div>

                            <ul class="socials">
                                <li><a href="#"><i class="mdi mdi-qqchat"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-wechat"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                            </ul>
                        </aside>

                        <!-- Tags widget-->
                        <aside class="widget widget_tag_cloud">
                            <div class="widget-title">标签</div>
                            <div class="tagcloud">
                                <a href="#">长期护理保险</a>
                                <a href="#">市场创新</a>
                                <a href="#">量化回归模型</a>
                                <a href="#">实证分析</a>
                                <a href="#">DID</a>
                                <a href="#">NLP</a>
                            </div>
                        </aside>
                    </div>
                </div>
                <!-- Sidebar end-->
            </div>

        </div> <!-- end container -->
    </section>


    <footer>
        <!-- instagram -->
        <div class="instagram-footer">
            <ul class="instagram-footer">
                <li><a href="#"><img src="images/instagram/11.jpg" alt=""> </a></li>
                <li><a href="#"><img src="images/instagram/12.jpg" alt=""> </a></li>
                <li><a href="#"><img src="images/instagram/13.jpg" alt=""> </a></li>
                <li><a href="#"><img src="images/instagram/14.jpg" alt=""> </a></li>
                <li><a href="#"><img src="images/instagram/15.jpg" alt=""> </a></li>
                <li><a href="#"><img src="images/instagram/16.jpg" alt=""> </a></li>
            </ul>
        </div>
        <!-- end instagram -->

        <!-- copy-wrapper -->
        <div class="copy-wrapper">
            <div class="container">
                <p class="copyright">©2025. All Rights Reserved. <a target="_blank" href="https://www.mobanwang.com/"
                        title="网站模板"></a></p>
                <ul class="socials right-socials">
                    <li><a href="#"><i class="mdi mdi-qqchat"></i></a></li>
                    <li><a href="#"><i class="mdi mdi-wechat"></i></a></li>
                    <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                    <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end copy-wrapper -->
    </footer>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--common script for all pages-->
    <script src="js/jquery.app.js"></script>

</body>

</html>