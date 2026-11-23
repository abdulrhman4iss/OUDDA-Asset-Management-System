
@extends('layouts.app')

@section('title', 'تسجيل استعارة | OUDDA')

@section('content')

<h1 class="page-title">تسجيل استعارة جديدة</h1>

<p style="color:#748198; margin-bottom:25px;">
    تسجيل عملية استعارة أصل أو معدة من النظام.
</p>

<div class="card" style="max-width:850px;">

    <form>

        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:20px;">

            <div>
                <label>اسم المستعير</label>
                <input type="text" placeholder="اسم الموظف أو المستفيد"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>رقم المستعير</label>
                <input type="text" placeholder="رقم الموظف أو المستفيد"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>الأصل المراد استعارته</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>اختر الأصل</option>
                    <option>حاسوب مكتبي</option>
                    <option>طابعة ليزر</option>
                    <option>جهاز عرض</option>
                </select>
            </div>

            <div>
                <label>تاريخ الاستعارة</label>
                <input type="date"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>تاريخ الإرجاع المتوقع</label>
                <input type="date"
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>حالة الاستعارة</label>
                <select style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option>نشطة</option>
                    <option>تم الإرجاع</option>
                    <option>متأخرة</option>
                </select>
            </div>

            <div style="grid-column:1/-1;">
                <label>ملاحظات</label>
                <textarea rows="4" placeholder="ملاحظات إضافية..."
                style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;"></textarea>
            </div>

        </div>

        <div style="margin-top:25px; display:flex; gap:10px;">

            <button type="button" class="btn">
                تسجيل الاستعارة
            </button>

            <a href="{{ url('/borrowings') }}"
            style="padding:10px 18px; background:#e5e7eb; border-radius:7px;">
                إلغاء
            </a>

        </div>

    </form>

</div>

@endsection
