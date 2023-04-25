<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Book;
use Core\src\Book\UseCase\GetAllBooks\GetAllBooks;
use Core\src\Book\UseCase\Ports\GetAllBooksQueryPort;

class GetAllBooksTest extends TestCase
{
    use RefreshDatabase;

    public function test_getAllBooks()
    {
        // テストデータ投入
        Book::factory()->count(5)->create();

        // 全書籍レコード取得
        $getAllBooks = new GetAllBooks(
            new class implements GetAllBooksQueryPort
            {
                public function getAllBooks()
                {
                    return Book::all();
                }
            }
        );
        $allBooks = $getAllBooks->execute();

        // 取得データ数テスト
        $this->assertCount(5, $allBooks);

        // 取得項目テスト
        $firstRecordArray = $allBooks[4]->toArray();
        $this->assertSame([
            'id',
            'title',
            'year_of_publication',
            'rating',
            'author_id',
            'publisher_id',
            'impression_id',
            'created_at',
            'updated_at',
            'deleted_at',
        ], array_keys($firstRecordArray));
    }
}
