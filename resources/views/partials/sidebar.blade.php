
<style>
    .sidebar {
        width: 250px;
        background: #142d5c;
        color: white;
        position: fixed;
        right: 0;
        top: 0;
        bottom: 0;
        padding: 25px 15px;
        overflow-y: auto;
        z-index: 100;
    }

    .sidebar-logo {
        text-align: center;
        padding-bottom: 25px;
        border-bottom: 1px solid rgba(255,255,255,0.15);
        margin-bottom: 25px;
    }

    .sidebar-logo h2 {
        font-size: 27px;
        color: white;
    }

    .sidebar-logo p {
        color: #b9c9e8;
        font-size: 12px;
        margin-top: 7px;
    }

    .menu-title {
        color: #91a8d0;
        font-size: 12px;
        margin: 20px 12px 10px;
    }

    .sidebar a {
        display: block;
        padding: 12px 15px;
        margin-bottom: 5px;
        border-radius: 8px;
        color: #dce7fa;
        font-size: 14px;
        transition: 0.2s;
    }

    .sidebar a:hover,
    .sidebar a.active {
        background: #2563eb;
        color: white;
    }

    @media(max-width: 768px) {
        .sidebar {
            display: none;
        }
    }
</style>

<aside class="sidebar">

    <div class="sidebar-logo">
        <h2>عُدّة | OUDDA</h2>
        <p>نظام إدارة الأصول والمعدات</p>
    </div>

    <div class="menu-title">القائمة الرئيسية</div>

    <a href="{{ url('/dashboard') }}">🏠 لوحة التحكم</a>

    <div class="menu-title">إدارة الأصول</div>

    <a href="{{ url('/assets') }}">📦 الأصول والمعدات</a>
    <a href="{{ url('/locations') }}">📍 المواقع والمخازن</a>

    <div class="menu-title">العمليات</div>

    <a href="{{ url('/borrowings') }}">🔄 الاستعارة والإرجاع</a>
    <a href="{{ url('/maintenance') }}">🔧 الصيانة والأعطال</a>

    <div class="menu-title">الإدارة</div>

    <a href="{{ url('/users') }}">👥 المستخدمون</a>
    <a href="{{ url('/reports') }}">📊 التقارير والإحصائيات</a>

</aside>
