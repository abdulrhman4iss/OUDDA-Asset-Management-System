
@extends('layouts.app')

@section('title', 'المواقع والمخازن | OUDDA')

@section('content')

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px; flex-wrap:wrap; gap:12px;">

    <div>
        <h1 class="page-title">المواقع والمخازن</h1>
        <p style="color:#748198;">إدارة مواقع حفظ الأصول والمعدات</p>
    </div>

    <a href="{{ url('/locations/create') }}" class="btn">
        + إضافة موقع جديد
    </a>

</div>

<div class="card">

    <div style="overflow-x:auto;">

        <table style="width:100%; border-collapse:collapse; text-align:right;">

            <thead style="background:#f4f6fa;">
                <tr>
                    <th style="padding:15px;">رقم الموقع</th>
                    <th>اسم الموقع</th>
                    <th>نوع الموقع</th>
                    <th>المبنى</th>
                    <th>الوصف</th>
                    <th>الحالة</th>
                </tr>
            </thead>

            <tbody>

                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;">LOC-001</td>
                    <td>مختبر الحاسوب</td>
                    <td>مختبر</td>
                    <td>المبنى الرئيسي</td>
                    <td>مختبر قسم تقنية المعلومات</td>
                    <td style="color:green;">نشط</td>
                </tr>

                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;">LOC-002</td>
                    <td>الإدارة</td>
                    <td>مكتب</td>
                    <td>المبنى الإداري</td>
                    <td>مكاتب الإدارة</td>
                    <td style="color:green;">نشط</td>
                </tr>

                <tr>
                    <td style="padding:15px;">LOC-003</td>
                    <td>مخزن المعدات</td>
                    <td>مخزن</td>
                    <td>المبنى الرئيسي</td>
                    <td>حفظ المعدات الاحتياطية</td>
                    <td style="color:green;">نشط</td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection
