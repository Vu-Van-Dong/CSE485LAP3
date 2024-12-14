<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), // Tạo tiêu đề nhiệm vụ ngẫu nhiên
            'description' => $this->faker->paragraph(), // Tạo mô tả ngắn gọn nhiệm vụ
            'long_description' => $this->faker->text(), // Tạo mô tả chi tiết nhiệm vụ
            'completed' => $this->faker->boolean(), // Tạo trạng thái hoàn thành (true/false)
        ];
    }
}
