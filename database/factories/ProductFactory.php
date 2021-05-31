<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $users = \App\Models\User::pluck('id')->toArray();
      $categories = \App\Models\category::pluck('id')->toArray();
        return [
          'title' => $this->faker->word(2),
          'content' => $this->faker->paragraph,
          'image' => $this->faker->image('public/storage/images',640,480, null, false),
          'created_at' => now(),
          'updated_at' => now(),
          'user_id' =>$this->faker->randomElement($users),
          'category_id' =>$this->faker->randomElement($categories),
            //
        ];
    }

}
