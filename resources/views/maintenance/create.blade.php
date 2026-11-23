
@extends('layouts.app')

@section('title', 'تسجيل طلب صيانة | OUDDA')

@section('content')

<h1 class="page-title">تسجيل طلب صيانة</h1>

<p style="color:#748198; margin-bottom:25px;">
    تسجيل عطل جديد لأحد الأصول والمعدات.
</p>

<div class="card" style="max-width:850px;">

    <form>

        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:20px;">

            <div>
                <label>الأصل المتضرر</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>اختر الأصل</option>
                    <option>حاسوب مكتبي</option>
                    <option>طابعة ليزر</option>
                    <option>جهاز عرض</option>
                </select>
            </div>

            <div>
                <label>نوع العطل</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>اختر نوع العطل</option>
                    <option>عطل كهربائي</option>
                    <option>عطل تقني</option>
                    <option>عطل ميكانيكي</option>
                    <option>عطل في البرامج</option>
                    <option>أخرى</option>
                </select>
            </div>

            <div>
                <label>تاريخ تسجيل العطل</label>
                <input type="date"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>الأولوية</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>منخفضة</option>
                    <option>متوسطة</option>
                    <option>عالية</option>
                    <option>عاجلة</option>
                </select>
            </div>

            <div>
                <label>الحالة</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>جديد</option>
                    <option>قيد المعالجة</option>
                    <option>تم الإصلاح</option>
                </select>
            </div>

            <div>
                <label>اسم الفني المسؤول</label>
                <input type="text" placeholder="اسم الفني"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div style="grid-column:1/-1;">
                <label>تفاصيل العطل</label>
                <textarea rows="4" placeholder="اشرح المشكلة بالتفصيل..."
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;"></textarea>
            </div>

            <div style="grid-column:1/-1;">
                <label>الإجراء المتخذ أو ملاحظات الصيانة</label>
                <textarea rows="3" placeholder="اكتب الملاحظات..."
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;"></textarea>
            </div>

        </div>

        <div style="margin-top:25px; display:flex; gap:10px;">

            <button type="button" class="btn">
                حفظ طلب الصيانة
            </button>

            <a href="{{ url('/maintenance') }}"
            style="padding:10px 18px; background:#e5e7eb; border-radius:7px;">
                إلغاء
            </a>

        </div>

    </form>

</div>

@endsection
