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
                                <a href="background-2.php">长期护理保险制度</a>
                            </li>
                            <li>
                                <a href="background-3.php">长期护理试点城市</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="method.php">研究方法</a>
                    </li>
                    <li>
                        <a href="process.php">实验过程</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">结果分析</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="description.php">描述性统计</a>
                            </li>
                            <li>
                                <a href="regression.php">回归结果分析</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">异质性分析</a>
                                <ul class="submenu">
                                    <li><a href="old-ratio.php">老龄化异质性分析</a></li>
                                    <li><a href="location.php">区域性异质性分析</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">稳健性检验</a>
                                <ul class="submenu">
                                    <li><a href="parall.php">平行趋势检验</a></li>
                                    <li><a href="comfort.php">安慰剂检验</a></li>
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

                <!-- Sidebar-->
                <div class="col-lg-4 order-lg-2">
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

                <!-- Content-->
                <div class="col-lg-8 order-lg-1">

                    <!-- Post-->
                    <article class="post">

                        <div class="blog-detail-description">

                            <div class="text-center post-header">
                                <h2 class="post-title"><a title="">一.数据预处理</a>
                                </h2>
                            </div>

                            <p> &emsp;&emsp;本研究利用IncoPat专利数据库，系统检索长期护理保险相关的专利数据（主要基于IPC分类号G16H50/30、A61B5/00等核心类别）。为提升数据精准度，创新性地引入BERT语义相似度模型，对专利文本进行深度语义分析，筛选出与长护险政策目标高度契合的专利。同时，整合各城市层面的面板数据（包括区域GDP、研发投入强度等关键指标），构建了一个涵盖技术创新、经济发展和政策实施的多维时空数据库。并在此基础上进行去重，筛除异常值，结构化处理，为后续长护险政策效果评估提供了全面的数据支撑。</p>


                            <div class="text-center post-header">
                                <h2 class="post-title"><a title="">二.相似度筛选</a>
                                </h2>
                            </div>

                            <p> &emsp;&emsp;本研究在数据采集阶段采用多模态文本分析方法，首先对《长期护理保险制度试点指导意见》等核心政策文件进行文本挖掘，通过TF-IDF算法提取高频关键词，构建包含政策核心要素的语义特征池。随后，利用预训练语言模型（如BERT）对政策关键词进行向量化编码，形成政策语义特征向量空间。针对专利数据的中英文摘要，分别采用多语言预训练模型生成高维语义向量，并通过共享语义空间对齐技术实现跨语言表征。在相似度计算环节，创新性地采用加权融合策略（中文60%，英文40%），运用余弦相似度算法度量每条专利与政策特征的关联强度，最终设定0.45的科学阈值筛选出政策高相关专利。这一方法有效解决了跨语言政策文本与专利数据的语义匹配难题，为后续分析提供了精准的数据基础。</p>

                            <div class="text-center post-header">
                                <h2 class="post-title"><a title="">三.双重差分建模</a>
                                </h2>
                            </div>

                            <p> &emsp;&emsp;本文采用的是经典的双重差分模型（DID），并以此来评估长期护理保险试点政策对于长期护理技术创新的相关影响，模型设定遵循现有文献的计量规范。本文具体的双重差分模型如下式子所示：</p>

                            <div class="post-preview">
                                <img src="images/data/formula.png" alt=""
                                    style="display: block; margin: 0 auto; max-width: 75%; height: auto;"
                                    class="img-fluid rounded">
                            </div>

                            <p> &emsp;&emsp;其中，Treatc作为处理组虚拟变量（试点城市取1，否则为0），Postt作为政策时点的虚拟变量（2020年及之后取1，否则为0），而核心变量为Treatc×Postt即双重差分项（did）。另外系数β1反映政策净效应；Xct为控制变量集，包含对数GDP（ln_GDP）、研发投入强度（R&D_ratio）以及邻近效应（neighbor）；θc与λt分别表示城市和年份固定效应，用于吸收异质性，使模型稳定。模型估计采用了负二项回归（Negative Binomial Regression）的方式，以此来对标专利数据的过离散特征。</p>

                            <div class="text-center post-header">
                                <h2 class="post-title"><a title="">四.稳健性分析</a>
                                </h2>
                            </div>

                            <p> &emsp;&emsp;在完成双重差分模型（DID）对长期护理保险政策与市场创新关系的基准估计后，首先进行了系统的稳健性分析。证实了处理组和对照组在政策前确实满足平行趋势假设，且政策效应在实施后呈现持续增强的特征，这一发现进一步强化了研究结论的可信度。在此基础上，本文还深入考察了政策效应的异质性特征。分析发现，长期护理保险政策对市场创新的促进作用在不同地区间存在显著差异。具体而言，经济发达地区和研发密集型企业的政策响应更为明显，这可能与这些区域和主体具备更强的创新资源吸收能力有关。另外高老龄率的地区，对于政策的响应也更为明显，这也符合实际。</p>

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

                                // 递归渲染函数
                                // 修改 renderComments 函数
                                function renderComments($comments, $parentId = 0, $depth = 0)
                                {

                                    // 获取当前层级的所有子评论
                                    $childComments = array_filter($comments, fn($c) => $c['parent_id'] == $parentId);

                                    // 按创建时间正序排列
                                    usort($childComments, fn($a, $b) =>
                                        strtotime($a['created_at']) <=> strtotime($b['created_at']));


                                    foreach ($comments as $comment) {
                                        if ($comment['parent_id'] == $parentId) {
                                            // 限制最大嵌套层级为3层
                                            $current_depth = min($depth, 3);
                                            $indent = $current_depth * 48; // 每层缩进48px
                                            $border_style = $current_depth > 0
                                                ? 'padding-left: 24px;'
                                                : '';
                                            ?>
                                            <li class="media" id="comment-<?= $comment['id'] ?>"
                                                style="margin-left: <?= $indent ?>px; <?= $border_style ?>"
                                                data-comment-id="<?= $comment['id'] ?>">
                                                <img class="d-flex mr-3 rounded-circle"
                                                    src="images/user/user-<?= $comment['avatar_id'] ?>.png"
                                                    alt="<?= htmlspecialchars($comment['author']) ?>">
                                                <div class="media-body">
                                                    <div class="comment-header">
                                                        <a href="#" class="text-custom reply-btn"
                                                            data-parent-id="<?= $comment['id'] ?>"
                                                            data-author="<?= htmlspecialchars($comment['author']) ?>">
                                                            <i class="mdi mdi-reply"></i> 回复
                                                        </a>
                                                        <h4 class="media-heading"><?= htmlspecialchars($comment['author']) ?></h4>
                                                        <p class="text-muted post-date">
                                                            <?= date("M d, Y, h:i a", strtotime($comment['created_at'])) ?>
                                                        </p>
                                                    </div>
                                                    <p class="comment-content"><?= nl2br(htmlspecialchars($comment['content'])) ?>
                                                    </p>
                                                    <?php renderComments($comments, $comment['id'], $depth + 1); ?>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                    }
                                }

                                // 数据库查询
                                try {
                                    // 修改后的SQL查询
                                    $stmt = $pdo->query("
                                    SELECT * 
                                    FROM comments 
                                    ORDER BY
                                        COALESCE(parent_id, id) ASC,  -- 父节点优先
                                        created_at ASC                -- 相同父节点按时间正序
                                    ");
                                    $allComments = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    renderComments($allComments);

                                } catch (PDOException $e) {
                                    echo '<div class="alert alert-danger">评论加载失败</div>';
                                }
                                ?>
                            </ul>


                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    // 动态回复表单逻辑（带PHP变量注入）
                                    const csrfToken = "<?= htmlspecialchars($_SESSION['csrf_token']) ?>";

                                    document.querySelectorAll('.reply-btn').forEach(btn => {
                                        btn.addEventListener('click', function (e) {
                                            e.preventDefault();

                                            // 移除其他回复表单
                                            document.querySelectorAll('.reply-form').forEach(form => form.remove());

                                            // 生成表单HTML（与主表单一致）
                                            const parentId = this.dataset.parentId;
                                            const author = this.dataset.author;
                                            const formHtml = `
                                                <div class="reply-form mt-3">
                                                    <form action="submit_comment.php" method="post">
                                                        <input type="hidden" name="parent_id" value="${parentId}">
                                                        <input type="hidden" name="csrf_token" value="${csrfToken}">
                                                        
                                                        <!-- 新增姓名邮箱行 -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="author" 
                                                                        placeholder="姓名*" required maxlength="50">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" name="email" 
                                                                        placeholder="邮箱*" required 
                                                                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- 留言内容 -->
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="comment" rows="3" 
                                                                    placeholder="回复 @${author}" required maxlength="1000"></textarea>
                                                        </div>

                                                        <!-- 操作按钮 -->
                                                        <div class="d-flex gap-2">
                                                            <button type="submit" class="btn btn-dark btn-sm">提交回复</button>
                                                            <button type="button" class="btn btn-outline-secondary btn-sm cancel-reply">取消</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                `;

                                            // 插入到当前评论的媒体体底部
                                            this.closest('.media-body').insertAdjacentHTML('beforeend', formHtml);
                                        });
                                    });

                                    // 取消回复功能
                                    document.addEventListener('click', function (e) {
                                        if (e.target.classList.contains('cancel-reply')) {
                                            e.target.closest('.reply-form').remove();
                                        }
                                    });
                                });
                            </script>


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