<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        $titles = ['自由からの逃走', '資本論', '人間失格', '項羽と劉邦', '整数論', 'ガリア戦記', '五分後の世界'];
        $start = strtotime('1900-01-01 00:00:00');
        $end = strtotime('today 00:00:00');
        $year = date('Y', random_int($start, $end));

        return [
            'title' => $titles[random_int(0, count($titles) - 1)],
            'year_of_publication' => $year,
            'rating' => random_int(1, 5),
            'author_id' => random_int(0, 1000),
            'publisher_id' => random_int(0, 100),
            'impression_id' => random_int(0, 1000),
        ];
    }
}
