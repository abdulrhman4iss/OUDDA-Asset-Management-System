
@extends('layouts.app')

@section('title', 'الأصول والمعدات | OUDDA')

@section('content')

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px; flex-wrap:wrap; gap:15px;">

    <div>
        <h1 class="page-title">الأصول والمعدات</h1>
        <p style="color:#748198;">إدارة ومتابعة جميع الأصول والمعدات</p>
    </div>

    <a href="{{ url('/assets/create') }}" class="btn">
        + إضافة أصل جديد
    </a>

</div>

<div class="card">

    <div style="display:flex; justify-content:space-between; gap:12px; margin-bottom:20px; flex-wrap:wrap;">

        <input type="text" placeholder="ابحث عن أصل..."
        style="padding:11px; border:1px solid #ddd; border-radius:7px; flex:1; min-width:180px;">

        <select style="padding:11px; border:1px solid #ddd; border-radius:7px;">
            <option>جميع الحالات</option>
            <option>متاح</option>
            <option>مستعار</option>
            <option>تحت الصيانة</option>
        </select>

    </div>

    <div style="overflow-x:auto;">

        <table style="width:100%; border-collapse:collapse; text-align:right;">

            <thead style="background:#f4f6fa;">
                <tr>
                    <th style="padding:15px;">رقم الأصل</th>
                    <th>اسم الأصل</th>
                    <th>التصنيف</th>
                    <th>الموقع</th>
                    <th>الحالة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($assets as $asset)

                    <tr style="border-bottom:1px solid #eee;">

                        <td style="padding:15px;">
                            {{ $asset->asset_tag }}
                        </td>

                        <td>
                            {{ $asset->name }}
                        </td>

                        <td>
                            {{ $asset->category->name ?? 'غير محدد' }}
                        </td>

                        <td>
                            {{ $asset->location->name ?? 'غير محدد' }}
                        </td>

                        <td>
                            @if ($asset->status == 'available')
                                <span style="color:green;">متاح</span>

                            @elseif ($asset->status == 'borrowed')
                                <span style="color:#d97706;">مستعار</span>

                            @elseif ($asset->status == 'maintenance')
                                <span style="color:#dc2626;">تحت الصيانة</span>

                            @else
                                <span>{{ $asset->status }}</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ url('/assets/show?id=' . $asset->id) }}"
                               style="color:#2563eb;">
                                عرض
                            </a>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="6" style="padding:20px; text-align:center; color:#748198;">
                            لا توجد أصول مسجلة حاليًا
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection
