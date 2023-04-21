<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Book;

class GetAllBooksTest extends TestCase
{
    use RefreshDatabase;

    public function test_getAllBooks(): void
    {
        // テストデータ投入
        $testBooks = Book::factory()->count(5)->create();

        // 全書籍レコード取得
        $getAllBooks = new GetAllBooks();
        $allBooks = $getAllBooks->execute();

        // レスポンステスト実行
        $allBooks->assertStatus(200);
        // 取得データ数テスト
        $this->assertSame($testBooks, $allBooks);
        // 取得内容構造テスト
        $allBooks->assertJsonStructure([
            'books' => [
                '*' => [
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
                ]
            ]
        ]);
    }
}
