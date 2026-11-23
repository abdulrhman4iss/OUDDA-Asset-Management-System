
@extends('layouts.app')

@section('title', 'لوحة التحكم | OUDDA')

@section('content')

<h1 class="page-title">لوحة التحكم الرئيسية</h1>

<p style="color:#748198; margin-bottom:25px;">
    مرحباً بك في نظام عُدّة لإدارة الأصول والمعدات.
</p>

<style>
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px;
        margin-bottom: 28px;
    }

    .stat-card {
        background: white;
        padding: 23px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.04);
        border-right: 4px solid #2563eb;
    }

    .stat-card .icon {
        font-size: 25px;
        margin-bottom: 15px;
    }

    .stat-card h3 {
        font-size: 26px;
        color: #142d5c;
        margin-bottom: 8px;
    }

    .stat-card p {
        color: #748198;
        font-size: 13px;
    }

    .dashboard-grid {
        display: grid;
        grid-template-columns: 1.5fr 1fr;
        gap: 20px;
    }

    .section-card {
        background: white;
        border-radius: 12px;
        padding: 22px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.04);
    }

    .section-card h3 {
        color: #142d5c;
        margin-bottom: 20px;
        font-size: 17px;
    }

    .activity {
        padding: 14px 0;
        border-bottom: 1px solid #edf0f5;
        font-size: 14px;
        color: #53627a;
    }

    .activity:last-child {
        border: none;
    }

    .quick-links {
        display: grid;
        gap: 12px;
    }

    .quick-links a {
        padding: 15px;
        background: #f4f7fc;
        border-radius: 8px;
        color: #2563eb;
        font-size: 14px;
    }

    .quick-links a:hover {
        background: #e8efff;
    }

    @media(max-width: 1000px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .dashboard-grid {
            grid-template-columns: 1fr;
        }
    }

    @media(max-width: 500px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="stats-grid">

    <div class="stat-card">
        <div class="icon">📦</div>
        <h3>250</h3>
        <p>إجمالي الأصول والمعدات</p>
    </div>

    <div class="stat-card" style="border-color:#0d9488;">
        <div class="icon">📍</div>
        <h3>18</h3>
        <p>المواقع والمخازن</p>
    </div>

    <div class="stat-card" style="border-color:#8b5cf6;">
        <div class="icon">🔄</div>
        <h3>24</h3>
        <p>عمليات الاستعارة النشطة</p>
    </div>

    <div class="stat-card" style="border-color:#ea8a24;">
        <div class="icon">🔧</div>
        <h3>7</h3>
        <p>طلبات الصيانة</p>
    </div>

</div>

<div class="dashboard-grid">

    <div class="section-card">

        <h3>📋 آخر الأنشطة</h3>

        <div class="activity">
            📦 تمت إضافة جهاز حاسوب جديد
        </div>

        <div class="activity">
            🔄 تم تسجيل عملية استعارة جديدة
        </div>

        <div class="activity">
            🔧 تم تسجيل طلب صيانة
        </div>

        <div class="activity">
            📍 تمت إضافة موقع جديد للنظام
        </div>

    </div>

    <div class="section-card">

        <h3>⚡ الوصول السريع</h3>

        <div class="quick-links">

            <a href="{{ url('/assets') }}">📦 إدارة الأصول والمعدات</a>

            <a href="{{ url('/assets/create') }}">➕ إضافة أصل جديد</a>

            <a href="{{ url('/borrowings/create') }}">🔄 تسجيل استعارة</a>

            <a href="{{ url('/maintenance') }}">🔧 متابعة الصيانة</a>

        </div>

    </div>

</div>

@endsection
