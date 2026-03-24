<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('parent')->where('is_delete', false)->orderBy('id')->get();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::where('is_delete', false)->orderBy('name')->get();

        return view('category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|url',
            'parent_id' => 'nullable|exists:categories,id',
            'is_active' => 'sometimes|boolean',
        ]);

        if (isset($data['parent_id']) && $data['parent_id'] === null) {
            unset($data['parent_id']);
        }

        $data['is_active'] = $request->has('is_active') ? true : false;
        $data['is_delete'] = false;

        Category::create($data);

        return redirect()->route('category.index')->with('success', 'Đã tạo danh mục thành công.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('is_delete', false)->where('id', '!=', $category->id)->orderBy('name')->get();

        return view('category.edit', compact('category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|url',
            'parent_id' => 'nullable|exists:categories,id',
            'is_active' => 'sometimes|boolean',
        ]);

        $parentId = $data['parent_id'] ?? null;

        if ($parentId && $this->isCircularParent($category->id, $parentId)) {
            return back()->withInput()->withErrors(['parent_id' => 'Không thể chọn cha là chính nó hoặc con cháu của danh mục này.']);
        }

        $category->name = $data['name'];
        $category->description = $data['description'] ?? null;
        $category->image = $data['image'] ?? null;
        $category->parent_id = $parentId;
        $category->is_active = $request->has('is_active');

        $category->save();

        return redirect()->route('category.index')->with('success', 'Đã cập nhật danh mục thành công.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->is_delete = true;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Đã xóa danh mục (xóa mềm).');
    }

    private function isCircularParent($categoryId, $parentId)
    {
        if ($categoryId === $parentId) {
            return true;
        }

        $parent = Category::find($parentId);

        while ($parent) {
            if ($parent->id === $categoryId) {
                return true;
            }

            if (!$parent->parent_id) {
                break;
            }

            $parent = Category::find($parent->parent_id);
        }

        return false;
    }
}
