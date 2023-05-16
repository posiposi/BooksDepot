<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Core\src\Book\UseCase\GetAllBooks\GetAllBooks;
use Core\src\Book\UseCase\RegisterBook\RegisterBook;

class BookController extends Controller
{
    private $registerBookUseCase;

    public function __construct(RegisterBook $registerBook)
    {
        $this->registerBookUseCase = $registerBook;
    }

    /**
     * 全書籍レコード取得
     */
    public function index(GetAllBooks $useCase)
    {
        return response()->json(
            $useCase->execute()
        );
    }

    /**
     * 書籍登録
     */
    public function store($request)
    {
        $this->registerBookUseCase->execute($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
