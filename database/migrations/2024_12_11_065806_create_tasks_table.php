<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Tự động tạo khóa chính ID
            $table->string('title'); // Cột title dạng chuỗi
            $table->text('description'); // Cột description dạng văn bản
            $table->text('long_description')->nullable(); // Cột long_description, cho phép null
            $table->boolean('completed')->default(false); // Cột completed mặc định là false
            $table->timestamps(); // Tự động thêm created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks'); // Xóa bảng tasks nếu rollback
    }
};
