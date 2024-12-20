<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MyPage</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard_user.css') }}">

    <!-- 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>
 
 
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/js/select.dataTables.min.css">
    

    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
 
    <link rel="shortcut icon" href="/images/favicon.png" />
-->
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->

            <!--
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            -->
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->



            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                <h4 class="page-name">講師 </h4>
                                    <h3 class="font-weight-bold">
                                        ようこそ
                                        @if($LoggedUserInfo)
                                        <span>{{ $LoggedUserInfo['name'] }}</span>
                                        <span class="badge badge-primary">{{ $LoggedUserInfo['role'] }}</span>
                                        @endif

                                        さん
                                    </h3>
                                    <h6 class="font-weight-normal mb-0"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('user.logout') }}" method="POST" class="logout-form" style="display: flex; justify-content: flex-end; margin-top: 20px;">
                            @csrf
                            <button type="submit" class="btn-logout">ログアウト</button>
                        </form>

                    <div class="container">
                        <div class="page">
                            <a href="{{ route('user.chats') }}" class="btn-chat">チャット画面へ</a>
                            <a href="{{ route('user.community') }}" class="btn-chat">コミュニティ画面へ</a>
                        </div>
                        <div class="profile">
                            <a href="{{ route('user.profileview') }}" class="btn-chat">プロフィール詳細 </a>

                        </div>

                    </div>

                    <!-- 投稿機能 -->
                    <div>
                        <div class="post-main">
                            <h2>投稿一覧</h2>
                            <a href="{{ route('user.create') }}" class="btn-post">新規投稿</a>
                        </div>
                        @if($posts->isEmpty())
                        <p>投稿はまだありません。</p>
                        @else
                        <ul>
                            @foreach($posts as $post)
                            <li class="post-item">

                                <div class="post-content">
                                    <h3 class="title">{{ $post->title }}</h3>
                                    <p>作成日時: {{ $post->created_at->format('Y-m-d H:i') }}</p>
                                    <a href="{{ route('user.show', ['id' => $post->id]) }}" class="btn-detail">詳細</a>
                                </div>
                                @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="投稿画像">
                                @endif
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card"></div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <!--
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                                Copyright © 2021. Premium
                                <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a>
                                from BootstrapDash. All rights reserved.
                            </span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                                Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i>
                            </span>
                        </div>
                    </footer>
-->
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </div>
    <!-- plugins:js -->
    <script src="/vendors/js/vendor.bundle.base.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="/vendors/chart.js/Chart.min.js"></script>
    <script src="/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="/js/dataTables.select.min.js"></script>
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/todolist.js"></script>
    <script src="/js/dashboard.js"></script>
    <script src="/js/Chart.roundedBarCharts.js"></script>
</body>

</html>