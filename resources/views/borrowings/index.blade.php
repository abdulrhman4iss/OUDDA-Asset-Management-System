
@extends('layouts.app')

@section('title', 'الاستعارة والإرجاع | OUDDA')

@section('content')

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px; flex-wrap:wrap; gap:12px;">

    <div>
        <h1 class="page-title">الاستعارة والإرجاع</h1>
        <p style="color:#748198;">متابعة عمليات استعارة وإرجاع الأصول والمعدات</p>
    </div>

    <a href="{{ url('/borrowings/create') }}" class="btn">
        + تسجيل استعارة جديدة
    </a>

</div>

<div class="stats-grid">

    <div class="stat-card">
        <h3>24</h3>
        <p>إجمالي الاستعارات النشطة</p>
    </div>

    <div class="stat-card" style="border-color:#0d9488;">
        <h3>85</h3>
        <p>تم إرجاعها</p>
    </div>

    <div class="stat-card" style="border-color:#dc2626;">
        <h3>5</h3>
        <p>استعارات متأخرة</p>
    </div>

    <div class="stat-card" style="border-color:#8b5cf6;">
        <h3>114</h3>
        <p>إجمالي العمليات</p>
    </div>

</div>

<div class="card">

    <h3 style="margin-bottom:20px;">سجل الاستعارات</h3>

    <div style="overflow-x:auto;">

        <table style="width:100%; border-collapse:collapse; text-align:right;">

            <thead style="background:#f4f6fa;">
                <tr>
                    <th style="padding:15px;">رقم العملية</th>
                    <th>المستعير</th>
                    <th>الأصل</th>
                    <th>تاريخ الاستعارة</th>
                    <th>تاريخ الإرجاع</th>
                    <th>الحالة</th>
                </tr>
            </thead>

            <tbody>

                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;">BR-001</td>
                    <td>أحمد محمد</td>
                    <td>حاسوب مكتبي</td>
                    <td>2026-11-20</td>
                    <td>2026-11-25</td>
                    <td style="color:#d97706;">نشطة</td>
                </tr>

                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;">BR-002</td>
                    <td>محمد علي</td>
                    <td>طابعة ليزر</td>
                    <td>2026-11-15</td>
                    <td>2026-11-19</td>
                    <td style="color:#15803d;">تم الإرجاع</td>
                </tr>

                <tr>
                    <td style="padding:15px;">BR-003</td>
                    <td>خالد حسن</td>
                    <td>جهاز عرض</td>
                    <td>2026-11-10</td>
                    <td>2026-11-18</td>
                    <td style="color:#dc2626;">متأخرة</td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection
