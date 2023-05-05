<template>
  <v-data-table :items-per-page="itemsPerPage" :headers="headers" :items="books" item-value="title" class="elevation-1">
  </v-data-table>
</template>

<script setup lang="ts">
import axios, { AxiosResponse, AxiosError } from "axios";
import { ref, onMounted } from "vue";
import { Book } from "../types/book"
import { HeaderContents } from "../types/headerContents";

const books = ref<Book>();
// TODO下記メソッドの共通化検討
// 全書籍取得API呼び出し
const getAllBooks = () => {
  axios.get('/api/book')
    .then((response: AxiosResponse<Book>) => {
      const { data } = response;
      books.value = data;
    })
    .catch((error: AxiosError<{ error: string }>) => {
      console.log(error.message)
    });
}

onMounted(() => {
  getAllBooks()
})

// ページネーション
const itemsPerPage = ref<number>(5);
// ヘッダー
const headers: HeaderContents[] = [
  { title: 'タイトル', align: 'start', key: 'title' },
  { title: '著者', align: 'start', key: 'author_id' },
  { title: '出版社', align: 'start', key: 'publisher_id' },
  { title: '出版年', align: 'start', key: 'year_of_publication' },
  { title: 'おすすめ度', align: 'start', key: 'rating' },
];
</script>