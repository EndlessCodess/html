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
                        <div class="text-center post-header">
                            <h2 class="post-title"><a href="regression.php" title="">回归结果分析</a>
                            </h2>
                        </div>

                        <div class="blog-detail-description">
                            <p> &emsp;&emsp;本文一共利用了52735个专利观测样本，通过负二项回归模型的方式来检验长期护理保险政策，对于长期护理相关专利创新的影响研究。通过实证结果，我们可以发现，模型的伪R²为0.2445，表明模型的解释力较强。而在核心变量中，双重交叉项did的系数为0.144（p=0.021），转化为发生率比IRR，表明长期护理保险政策在实施后，对于试点城市的长期护理产业的专利创新，有积极的促进作用，平均使得相应专利数量提升了15.5%，验证了本文的核心假设。经济规模（ln_GDP）系数为0.436（p<0.01），这表明地区GDP每增长1%，相应的专利产出的增加比例约为54.7%，这也符合经济基础对技术创新的支撑作用。研发强度（R&D_ratio）系数为0.106（p=0.011），这表明区域的研发投入，每提高1%，它的专利数量大致增长为原来的1.12倍，这也符合加大科研投入，对于专利创新的促进作用。值得注意的是，邻近效应（neighbor）系数为-0.216（p<0.01），这表明邻近城市每增加1%的专利量，本地的专利反而会减少约19.5%，这种情况的出现，可能源于区域竞争而导致出现的资源虹吸现象。总的来说，长期护理保险政策，不仅直接促进了相应产业的创新，并且还表现出了显著的经济规模依赖性以及空间异质性。</p>

                            <div class="post-preview">
                                <img src="images/data/result.png" alt="" style="display: block; margin: 0 auto; max-width: 60%; height: auto;" class="img-fluid rounded">
                            </div>

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