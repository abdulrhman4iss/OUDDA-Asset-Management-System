
@extends('layouts.app')

@section('title', 'تفاصيل الأصل | OUDDA')

@section('content')

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px; flex-wrap:wrap; gap:12px;">

    <h1 class="page-title">تفاصيل الأصل</h1>

    <a href="{{ url('/assets/edit') }}" class="btn">
        ✏️ تعديل الأصل
    </a>

</div>

<div class="card" style="max-width:900px;">

    <div style="text-align:center; padding:25px; border-bottom:1px solid #eee;">
        <div style="font-size:55px;">💻</div>
        <h2 style="color:#142d5c; margin-top:10px;">حاسوب مكتبي</h2>
        <p style="color:#748198; margin-top:8px;">AST-001</p>
        <span style="display:inline-block; background:#dcfce7; color:#15803d; padding:7px 18px; border-radius:20px; margin-top:12px;">
            متاح
        </span>
    </div>

    <h3 style="margin:25px 0 15px; color:#142d5c;">المعلومات الأساسية</h3>

    <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:22px;">

        <div>
            <p style="color:#748198; font-size:13px;">رقم الأصل</p>
            <strong>AST-001</strong>
        </div>

        <div>
            <p style="color:#748198; font-size:13px;">التصنيف</p>
            <strong>أجهزة حاسوب</strong>
        </div>

        <div>
            <p style="color:#748198; font-size:13px;">الموقع</p>
            <strong>مختبر الحاسوب</strong>
        </div>

        <div>
            <p style="color:#748198; font-size:13px;">تاريخ الشراء</p>
            <strong>15 يناير 2026</strong>
        </div>

    </div>

    <div style="margin-top:30px; padding-top:20px; border-top:1px solid #eee;">

        <h3 style="color:#142d5c; margin-bottom:12px;">وصف الأصل</h3>

        <p style="color:#748198; line-height:2;">
            حاسوب مكتبي مخصص للاستخدام في مختبر الحاسوب بالجامعة.
        </p>

    </div>

    <div style="margin-top:25px;">
        <a href="{{ url('/assets') }}" class="btn">
            العودة إلى الأصول
        </a>
    </div>

</div>

@endsection

