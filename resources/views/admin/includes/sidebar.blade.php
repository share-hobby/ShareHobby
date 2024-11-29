


<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="nav-item rounded-pill">
            <a class="nav-link" href="/admin/dashboard">
                <i class="fas fa-tachometer-alt menu-icon"></i>
                <span class="menu-title">ホーム画面</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link rounded-pill" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="fas fa-user menu-icon"></i>
                <span class="menu-title">プロフィール</span>
                <i class="menu-arrow"></i>
            </a>
        
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item rounded-pill"> 
                    <a class="nav-link" href="/admin/profileview">表示</a>
                </li>
                <li class="nav-item rounded-pill"> 
                    <a class="nav-link" href="/admin/profileedit">編集</a>
                </li>
            </ul>
        </div>
    </li>
        

        
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="true" aria-controls="auth">
        <i class="fas fa-comments menu-icon"></i>
        <span class="menu-title">チャット</span>
         </a>
    <div class="collapse show" id="auth">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/chats">チャットへ</a></li>
        </ul>
    </div>
</li>

       <!-- #endregion -->
    </ul>
</nav>


