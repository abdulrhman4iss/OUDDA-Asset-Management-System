
<style>
    .navbar {
        height: 75px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 30px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }

    .navbar-title {
        font-size: 19px;
        font-weight: bold;
        color: #142d5c;
    }

    .navbar-user {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #2563eb;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .user-info {
        font-size: 13px;
    }

    .user-info span {
        color: #748198;
        display: block;
        margin-top: 4px;
    }
</style>

<header class="navbar">

    <div class="navbar-title">
        نظام عُدّة لإدارة الأصول
    </div>

    <div class="navbar-user">

        <div class="user-avatar">A</div>

        <div class="user-info">
            <strong>مدير النظام</strong>
            <span>Administrator</span>
        </div>

    </div>

</header>
