<?php

namespace Database\Factories;

use App\Models\TaskModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TaskModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
