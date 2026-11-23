
@extends('layouts.app')

@section('title', 'إدارة المستخدمين | OUDDA')

@section('content')

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px; flex-wrap:wrap; gap:12px;">

    <div>
        <h1 class="page-title">إدارة المستخدمين</h1>
        <p style="color:#748198;">إدارة حسابات المستخدمين وأدوارهم في النظام</p>
    </div>

    <button class="btn" type="button">
        + إضافة مستخدم
    </button>

</div>

<div class="stats-grid">

    <div class="stat-card">
        <h3>35</h3>
        <p>إجمالي المستخدمين</p>
    </div>

    <div class="stat-card" style="border-color:#0d9488;">
        <h3>30</h3>
        <p>حسابات نشطة</p>
    </div>

    <div class="stat-card" style="border-color:#8b5cf6;">
        <h3>5</h3>
        <p>حسابات غير نشطة</p>
    </div>

    <div class="stat-card" style="border-color:#ea8a24;">
        <h3>3</h3>
        <p>الأدوار الرئيسية</p>
    </div>

</div>

<div class="card">

    <h3 style="margin-bottom:20px;">قائمة المستخدمين</h3>

    <div style="overflow-x:auto;">

        <table style="width:100%; border-collapse:collapse; text-align:right;">

            <thead style="background:#f4f6fa;">
                <tr>
                    <th style="padding:15px;">رقم</th>
                    <th>اسم المستخدم</th>
                    <th>البريد الإلكتروني</th>
                    <th>الدور</th>
                    <th>الحالة</th>
                </tr>
            </thead>

            <tbody>

                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;">1</td>
                    <td>أحمد محمد</td>
                    <td>ahmed@example.com</td>
                    <td>مدير النظام</td>
                    <td style="color:green;">نشط</td>
                </tr>

                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;">2</td>
                    <td>محمد علي</td>
                    <td>mohamed@example.com</td>
                    <td>مسؤول الأصول</td>
                    <td style="color:green;">نشط</td>
                </tr>

                <tr>
                    <td style="padding:15px;">3</td>
                    <td>خالد حسن</td>
                    <td>khaled@example.com</td>
                    <td>موظف</td>
                    <td style="color:#d97706;">غير نشط</td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection
