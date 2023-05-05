<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Book;
use Core\src\Book\UseCase\RegisterBook\RegisterBook;
use Core\src\Book\UseCase\Ports\RegisterBookCommandPort;

class RegisterBookTest extends TestCase
{
    use RefreshDatabase;

    public function test_registerBook(): void
    {
        // テストで投入するデータと一致しないレコードを投入
        Book::factory()->count(5)->create();

        // 書籍登録ユースケース実行のために無名クラス作成
        $registerBook = new RegisterBook(
            new class implements RegisterBookCommandPort
            {
                public function registerBook($request)
                {
                    Book::create([
                        'title' => $request->title,
                        'year_of_publication' => $request->year_of_publication,
                        'rating' => $request->rating,
                        'author_id' => $request->author_id,
                        'publisher_id' => $request->publisher_id,
                        'impression_id' => $request->impression_id,
                    ]);
                }
            }
        );

        // テスト用リクエストパラメータ
        $request = [
            'title' => '天人五衰',
            'year_of_publication' => '1971',
            'rating' => 5,
            'author_id' => 4,
            'publisher_id' => 1,
            'impression_id' => 1,
        ];
        // 登録実行
        $registerBook->execute($request);

        // テスト用リクエストが該当テーブルに存在するかを確認
        $this->assertDatabaseHas('books', [
            'title' => '天人五衰',
            'year_of_publication' => '1971',
            'rating' => 5,
            'author_id' => 4,
            'publisher_id' => 1,
            'impression_id' => 1,
        ]);
    }
}
