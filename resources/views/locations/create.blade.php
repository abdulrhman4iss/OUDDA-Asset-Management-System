
@extends('layouts.app')

@section('title', 'إضافة موقع | OUDDA')

@section('content')

<h1 class="page-title">إضافة موقع جديد</h1>

<p style="color:#748198; margin-bottom:25px;">
    تسجيل موقع أو مخزن جديد لحفظ الأصول والمعدات.
</p>

<div class="card" style="max-width:800px;">

    <form>

        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:20px;">

            <div>
                <label>اسم الموقع</label>
                <input type="text" placeholder="مثال: مختبر الحاسوب"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>رقم الموقع</label>
                <input type="text" placeholder="مثال: LOC-004"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>نوع الموقع</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>اختر نوع الموقع</option>
                    <option>مختبر</option>
                    <option>مكتب</option>
                    <option>مخزن</option>
                    <option>قاعة</option>
                    <option>أخرى</option>
                </select>
            </div>

            <div>
                <label>المبنى</label>
                <input type="text" placeholder="اسم المبنى"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>الحالة</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>نشط</option>
                    <option>غير نشط</option>
                </select>
            </div>

            <div style="grid-column:1/-1;">
                <label>الوصف</label>
                <textarea rows="4" placeholder="اكتب وصف الموقع..."
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;"></textarea>
            </div>

        </div>

        <div style="margin-top:25px; display:flex; gap:10px;">

            <button type="button" class="btn">
                حفظ الموقع
            </button>

            <a href="{{ url('/locations') }}"
            style="padding:10px 18px; background:#e5e7eb; border-radius:7px;">
                إلغاء
            </a>

        </div>

    </form>

</div>

@endsection
