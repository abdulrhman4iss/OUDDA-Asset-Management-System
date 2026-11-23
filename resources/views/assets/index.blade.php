
@extends('layouts.app')

@section('title', 'الأصول والمعدات | OUDDA')

@section('content')

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px; flex-wrap:wrap; gap:15px;">

    <div>
        <h1 class="page-title">الأصول والمعدات</h1>
        <p style="color:#748198;">إدارة ومتابعة جميع الأصول والمعدات</p>
    </div>

    <a href="{{ url('/assets/create') }}" class="btn">
        + إضافة أصل جديد
    </a>

</div>

<div class="card">

    <div style="display:flex; justify-content:space-between; gap:12px; margin-bottom:20px; flex-wrap:wrap;">

        <input type="text" placeholder="ابحث عن أصل..."
        style="padding:11px; border:1px solid #ddd; border-radius:7px; flex:1; min-width:180px;">

        <select style="padding:11px; border:1px solid #ddd; border-radius:7px;">
            <option>جميع الحالات</option>
            <option>متاح</option>
            <option>مستعار</option>
            <option>تحت الصيانة</option>
        </select>

    </div>

    <div style="overflow-x:auto;">

        <table style="width:100%; border-collapse:collapse; text-align:right;">

            <thead style="background:#f4f6fa;">
                <tr>
                    <th style="padding:15px;">رقم الأصل</th>
                    <th>اسم الأصل</th>
                    <th>التصنيف</th>
                    <th>الموقع</th>
                    <th>الحالة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>

            <tbody>
                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;">AST-001</td>
                    <td>حاسوب مكتبي</td>
                    <td>أجهزة حاسوب</td>
                    <td>مختبر الحاسوب</td>
                    <td><span style="color:green;">متاح</span></td>
                    <td><a href="{{ url('/assets/show') }}" style="color:#2563eb;">عرض</a></td>
                </tr>

                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;">AST-002</td>
                    <td>طابعة ليزر</td>
                    <td>طابعات</td>
                    <td>الإدارة</td>
                    <td><span style="color:#d97706;">مستعار</span></td>
                    <td><a href="{{ url('/assets/show') }}" style="color:#2563eb;">عرض</a></td>
                </tr>

                <tr>
                    <td style="padding:15px;">AST-003</td>
                    <td>جهاز عرض</td>
                    <td>أجهزة عرض</td>
                    <td>قاعة المحاضرات</td>
                    <td><span style="color:#dc2626;">صيانة</span></td>
                    <td><a href="{{ url('/assets/show') }}" style="color:#2563eb;">عرض</a></td>
                </tr>
            </tbody>

        </table>

    </div>

</div>

@endsection
