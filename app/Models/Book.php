<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year_of_publication',
        'rating',
        'author_id',
        'publisher_id',
        'impression_id',
    ];

    /**
     * 全書籍検索
     *
     * @return \Illuminate\Database\Eloquent\Collection<Book>
     */
    public function findAll()
    {
        return Book::all();
    }

    /**
     * 書籍登録
     *
     * @param Request $request 登録書籍リクエスト
     * @return void
     */
    public function registerBook($request): void
    {
        $createParams = $request->only([
            'title',
            'year_of_publication',
            'rating',
            'author_id',
            'publisher_id',
            'impression_id',
        ]);
        Book::create($createParams);
    }
}
