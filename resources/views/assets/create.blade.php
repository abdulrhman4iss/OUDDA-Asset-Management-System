
@extends('layouts.app')

@section('title', 'إضافة أصل جديد | OUDDA')

@section('content')

<h1 class="page-title">إضافة أصل جديد</h1>

<p style="color:#748198; margin-bottom:25px;">
    تسجيل أصل أو معدة جديدة في النظام.
</p>

<div class="card" style="max-width:850px;">

    <form action="{{ url('/assets') }}" method="POST">
        @csrf

        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:20px;">

            <div>
                <label>اسم الأصل</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    placeholder="أدخل اسم الأصل" required
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                @error('name') <small style="color:red">{{ $message }}</small> @enderror
            </div>

            <div>
                <label>رقم الأصل</label>
                <input type="text" name="asset_tag" value="{{ old('asset_tag') }}"
                    placeholder="مثال: AST-004" required
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                @error('asset_tag') <small style="color:red">{{ $message }}</small> @enderror
            </div>

            <div>
                <label>التصنيف</label>
                <select name="category_id" required
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option value="">اختر التصنيف</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id') <small style="color:red">{{ $message }}</small> @enderror
            </div>

            <div>
                <label>الموقع</label>
                <select name="location_id"
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option value="">اختر الموقع</option>
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>
                            {{ $location->name }}
                        </option>
                    @endforeach
                </select>
                @error('location_id') <small style="color:red">{{ $message }}</small> @enderror
            </div>

            <div>
                <label>الحالة</label>
                <select name="status" required
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option value="available">متاح</option>
                    <option value="borrowed">مستعار</option>
                    <option value="maintenance">تحت الصيانة</option>
                    <option value="damaged">تالف</option>
                </select>
            </div>

            <div>
                <label>حالة الأصل الفنية</label>
                <select name="condition_status" required
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
                    <option value="excellent">ممتاز</option>
                    <option value="good" selected>جيد</option>
                    <option value="fair">متوسط</option>
                    <option value="poor">ضعيف</option>
                    <option value="damaged">تالف</option>
                </select>
            </div>

            <div>
                <label>تاريخ الشراء</label>
                <input type="date" name="purchase_date" value="{{ old('purchase_date') }}"
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>تكلفة الشراء</label>
                <input type="number" step="0.01" min="0" name="purchase_cost"
                    value="{{ old('purchase_cost') }}"
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>الرقم التسلسلي</label>
                <input type="text" name="serial_number" value="{{ old('serial_number') }}"
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>الموديل</label>
                <input type="text" name="model" value="{{ old('model') }}"
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div>
                <label>الشركة المصنعة</label>
                <input type="text" name="manufacturer" value="{{ old('manufacturer') }}"
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">
            </div>

            <div style="grid-column:1/-1;">
                <label>الوصف</label>
                <textarea name="description" rows="4"
                    placeholder="اكتب وصف الأصل..."
                    style="width:100%; padding:12px; margin-top:8px; border:1px solid #ddd; border-radius:7px;">{{ old('description') }}</textarea>
            </div>

        </div>

        <div style="margin-top:25px; display:flex; gap:10px;">
            <button type="submit" class="btn">
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
