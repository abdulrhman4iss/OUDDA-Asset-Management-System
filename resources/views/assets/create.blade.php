
@extends('layouts.app')

@section('title', 'إضافة أصل جديد | OUDDA')

@section('content')

<h1 class="page-title">إضافة أصل جديد</h1>

<p style="color:#748198; margin-bottom:25px;">
    تسجيل أصل أو معدة جديدة في النظام.
</p>

<div class="card" style="max-width:850px;">

    <form>

        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:20px;">

            <div>
                <label>اسم الأصل</label>
                <input type="text" placeholder="أدخل اسم الأصل" required
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>رقم الأصل</label>
                <input type="text" placeholder="مثال: AST-004"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>التصنيف</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>اختر التصنيف</option>
                    <option>أجهزة حاسوب</option>
                    <option>طابعات</option>
                    <option>أجهزة عرض</option>
                    <option>أثاث</option>
                    <option>معدات أخرى</option>
                </select>
            </div>

            <div>
                <label>الموقع</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>اختر الموقع</option>
                    <option>مختبر الحاسوب</option>
                    <option>الإدارة</option>
                    <option>قاعة المحاضرات</option>
                </select>
            </div>

            <div>
                <label>الحالة</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>متاح</option>
                    <option>مستعار</option>
                    <option>تحت الصيانة</option>
                </select>
            </div>

            <div>
                <label>تاريخ الشراء</label>
                <input type="date"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div style="grid-column:1/-1;">
                <label>الوصف</label>
                <textarea rows="4" placeholder="اكتب وصف الأصل..."
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;"></textarea>
            </div>

        </div>

        <div style="margin-top:25px; display:flex; gap:10px;">

            <button type="button" class="btn">
                حفظ الأصل
            </button>

            <a href="{{ url('/assets') }}"
            style="padding:10px 18px; background:#e5e7eb; border-radius:7px;">
                إلغاء
            </a>

        </div>

    </form>

</div>

@endsection
