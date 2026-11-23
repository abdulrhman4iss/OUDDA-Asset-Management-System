
@extends('layouts.app')

@section('title', 'الصيانة والأعطال | OUDDA')

@section('content')

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px; flex-wrap:wrap; gap:12px;">

    <div>
        <h1 class="page-title">الصيانة والأعطال</h1>
        <p style="color:#748198;">متابعة أعطال الأصول وطلبات الصيانة</p>
    </div>

    <a href="{{ url('/maintenance/create') }}" class="btn">
        + تسجيل طلب صيانة
    </a>

</div>

<div class="stats-grid">

    <div class="stat-card">
        <h3>7</h3>
        <p>طلبات الصيانة الحالية</p>
    </div>

    <div class="stat-card" style="border-color:#0d9488;">
        <h3>15</h3>
        <p>تمت معالجتها</p>
    </div>

    <div class="stat-card" style="border-color:#dc2626;">
        <h3>3</h3>
        <p>أعطال عاجلة</p>
    </div>

    <div class="stat-card" style="border-color:#8b5cf6;">
        <h3>22</h3>
        <p>إجمالي الطلبات</p>
    </div>

</div>

<div class="card">

    <h3 style="margin-bottom:20px;">سجل طلبات الصيانة</h3>

    <div style="overflow-x:auto;">

        <table style="width:100%; border-collapse:collapse; text-align:right;">

            <thead style="background:#f4f6fa;">
                <tr>
                    <th style="padding:15px;">رقم الطلب</th>
                    <th>الأصل</th>
                    <th>نوع العطل</th>
                    <th>تاريخ الطلب</th>
                    <th>الأولوية</th>
                    <th>الحالة</th>
                </tr>
            </thead>

            <tbody>

                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;">MT-001</td>
                    <td>حاسوب مكتبي</td>
                    <td>مشكلة في التشغيل</td>
                    <td>2026-11-20</td>
                    <td style="color:#dc2626;">عالية</td>
                    <td style="color:#d97706;">قيد المعالجة</td>
                </tr>

                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;">MT-002</td>
                    <td>طابعة ليزر</td>
                    <td>مشكلة في الطباعة</td>
                    <td>2026-11-18</td>
                    <td style="color:#d97706;">متوسطة</td>
                    <td style="color:#15803d;">تم الإصلاح</td>
                </tr>

                <tr>
                    <td style="padding:15px;">MT-003</td>
                    <td>جهاز عرض</td>
                    <td>ضعف الإضاءة</td>
                    <td>2026-11-21</td>
                    <td style="color:#dc2626;">عالية</td>
                    <td style="color:#d97706;">قيد المعالجة</td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection
