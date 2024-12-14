<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all(); // Lấy tất cả các nhiệm vụ
        return view('tasks.index', compact('tasks')); // Trả về view danh sách nhiệm vụ
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create'); // Hiển thị form tạo nhiệm vụ mới
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ // Kiểm tra dữ liệu đầu vào
            'title' => 'required',
            'description' => 'required',
        ]);

        Task::create($request->all()); // Tạo nhiệm vụ mới trong cơ sở dữ liệu

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.'); // Chuyển hướng về danh sách và thông báo thành công
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task')); // Hiển thị chi tiết nhiệm vụ
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task')); // Hiển thị form chỉnh sửa nhiệm vụ
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([ // Kiểm tra dữ liệu đầu vào
            'title' => 'required',
            'description' => 'required',
        ]);

        $task->update($request->all()); // Cập nhật nhiệm vụ

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.'); // Chuyển hướng về danh sách và thông báo thành công
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete(); // Xóa nhiệm vụ

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.'); // Chuyển hướng về danh sách và thông báo thành công
    }
}
