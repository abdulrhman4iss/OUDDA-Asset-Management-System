<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\AssetCategory;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AssetController extends Controller
{
    // ط¹ط±ط¶ ط¬ظ…ظٹط¹ ط§ظ„ط£طµظˆظ„
    public function index()
    {
        $assets = Asset::with(['category', 'location'])
            ->latest()
            ->get();

        return view('assets.index', compact('assets'));
    }

    // طµظپط­ط© ط¥ط¶ط§ظپط© ط£طµظ„
    public function create()
    {
        $categories = AssetCategory::all();
        $locations = Location::all();

        return view('assets.create', compact('categories', 'locations'));
    }

    // ط­ظپط¸ ط£طµظ„ ط¬ط¯ظٹط¯
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'asset_tag' => ['required', 'string', 'max:100', 'unique:assets,asset_tag'],
            'category_id' => ['required', 'exists:asset_categories,id'],
            'location_id' => ['nullable', 'exists:asset_locations,id'],
            'description' => ['nullable', 'string'],
            'serial_number' => ['nullable', 'string', 'max:255', 'unique:assets,serial_number'],
            'model' => ['nullable', 'string', 'max:255'],
            'manufacturer' => ['nullable', 'string', 'max:255'],
            'purchase_date' => ['nullable', 'date'],
            'purchase_cost' => ['nullable', 'numeric', 'min:0'],
            'status' => ['required', Rule::in(['available', 'borrowed', 'maintenance', 'damaged'])],
            'condition_status' => ['required', Rule::in(['excellent', 'good', 'fair', 'poor', 'damaged'])],
        ]);

        Asset::create($data);

        return redirect('/assets')->with('success', 'طھظ…طھ ط¥ط¶ط§ظپط© ط§ظ„ط£طµظ„ ط¨ظ†ط¬ط§ط­');
    }

    // طµظپط­ط© طھط¹ط¯ظٹظ„ ط£طµظ„
    public function edit(Asset $asset)
    {
        $categories = AssetCategory::all();
        $locations = Location::all();

        return view('assets.edit', compact('asset', 'categories', 'locations'));
    }

    // ط­ظپط¸ ط§ظ„طھط¹ط¯ظٹظ„ط§طھ
    public function update(Request $request, Asset $asset)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'asset_tag' => ['required', 'string', 'max:100', Rule::unique('assets', 'asset_tag')->ignore($asset->id)],
            'category_id' => ['required', 'exists:asset_categories,id'],
            'location_id' => ['nullable', 'exists:asset_locations,id'],
            'description' => ['nullable', 'string'],
            'serial_number' => ['nullable', 'string', 'max:255', Rule::unique('assets', 'serial_number')->ignore($asset->id)],
            'model' => ['nullable', 'string', 'max:255'],
            'manufacturer' => ['nullable', 'string', 'max:255'],
            'purchase_date' => ['nullable', 'date'],
            'purchase_cost' => ['nullable', 'numeric', 'min:0'],
            'status' => ['required', Rule::in(['available', 'borrowed', 'maintenance', 'damaged'])],
            'condition_status' => ['required', Rule::in(['excellent', 'good', 'fair', 'poor', 'damaged'])],
        ]);

        $asset->update($data);

        return redirect('/assets')->with('success', 'طھظ… طھط¹ط¯ظٹظ„ ط§ظ„ط£طµظ„ ط¨ظ†ط¬ط§ط­');
    }

    // ط­ط°ظپ ط£طµظ„
    public function destroy(Asset $asset)
    {
        $asset->delete();

        return redirect('/assets')->with('success', 'طھظ… ط­ط°ظپ ط§ظ„ط£طµظ„ ط¨ظ†ط¬ط§ط­');
    }
}
