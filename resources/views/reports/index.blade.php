
@extends('layouts.app')

@section('title', 'التقارير والإحصائيات | OUDDA')

@section('content')

<div style="margin-bottom:25px;">
    <h1 class="page-title">التقارير والإحصائيات</h1>
    <p style="color:#748198;">نظرة عامة على الأصول والمواقع وعمليات الاستعارة والصيانة</p>
</div>

<div class="stats-grid">

    <div class="stat-card">
        <h3>250</h3>
        <p>إجمالي الأصول</p>
    </div>

    <div class="stat-card" style="border-color:#0d9488;">
        <h3>185</h3>
        <p>الأصول المتاحة</p>
    </div>

    <div class="stat-card" style="border-color:#8b5cf6;">
        <h3>42</h3>
        <p>الأصول المستعارة</p>
    </div>

    <div class="stat-card" style="border-color:#ea8a24;">
        <h3>23</h3>
        <p>أصول تحت الصيانة</p>
    </div>

</div>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:20px;">

    <div class="card">
        <h3 style="margin-bottom:20px;">تقرير الأصول</h3>

        <div style="padding:12px 0; border-bottom:1px solid #eee;">
            إجمالي الأصول
            <strong style="float:left;">250</strong>
        </div>

        <div style="padding:12px 0; border-bottom:1px solid #eee;">
            الأصول المتاحة
            <strong style="float:left; color:#0d9488;">185</strong>
        </div>

        <div style="padding:12px 0; border-bottom:1px solid #eee;">
            الأصول المستعارة
            <strong style="float:left; color:#8b5cf6;">42</strong>
        </div>

        <div style="padding:12px 0;">
            الأصول تحت الصيانة
            <strong style="float:left; color:#ea8a24;">23</strong>
        </div>
    </div>

    <div class="card">
        <h3 style="margin-bottom:20px;">تقرير الاستعارة</h3>

        <div style="padding:12px 0; border-bottom:1px solid #eee;">
            إجمالي عمليات الاستعارة
            <strong style="float:left;">114</strong>
        </div>

        <div style="padding:12px 0; border-bottom:1px solid #eee;">
            عمليات نشطة
            <strong style="float:left; color:#0d9488;">24</strong>
        </div>

        <div style="padding:12px 0; border-bottom:1px solid #eee;">
            عمليات مكتملة
            <strong style="float:left;">85</strong>
        </div>

        <div style="padding:12px 0;">
            عمليات متأخرة
            <strong style="float:left; color:#dc2626;">5</strong>
        </div>
    </div>

    <div class="card">
        <h3 style="margin-bottom:20px;">تقرير الصيانة</h3>

        <div style="padding:12px 0; border-bottom:1px solid #eee;">
            إجمالي طلبات الصيانة
            <strong style="float:left;">22</strong>
        </div>

        <div style="padding:12px 0; border-bottom:1px solid #eee;">
            طلبات قيد المعالجة
            <strong style="float:left; color:#ea8a24;">7</strong>
        </div>

        <div style="padding:12px 0; border-bottom:1px solid #eee;">
            طلبات مكتملة
            <strong style="float:left; color:#0d9488;">15</strong>
        </div>

        <div style="padding:12px 0;">
            طلبات عاجلة
            <strong style="float:left; color:#dc2626;">3</strong>
        </div>
    </div>

</div>

<div class="card" style="margin-top:20px;">

    <h3 style="margin-bottom:15px;">معلومات التقارير</h3>

    <p style="color:#748198; line-height:2;">
        تعرض هذه الصفحة ملخصًا لإحصائيات النظام، وتشمل الأصول
        والاستعارات وعمليات الصيانة. سيتم لاحقًا ربط هذه الإحصائيات
        بقاعدة البيانات لتظهر الأرقام الفعلية، مع إضافة إمكانية
        استخراج التقارير وطباعتها.
    </p>

    <button type="button" class="btn" style="margin-top:15px;">
        تصدير التقرير
    </button>

</div>

@endsection
