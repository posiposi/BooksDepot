<template>
  <v-card>
    <v-card-title>書籍登録</v-card-title>
    <v-form class="bg-white">
      <v-container>
        <v-row>
          <v-col cols="12" md="4">
            <v-text-field v-model="registerData.title.value" label="タイトル" required></v-text-field>
          </v-col>
          <v-col cols="12" md="4">
            <v-text-field v-model="registerData.year_of_publication.value" label="出版年" required></v-text-field>
          </v-col>
          <v-col cols="12" md="4">
            <v-text-field v-model="registerData.rating.value" label="おすすめ度" required></v-text-field>
          </v-col>
        </v-row>
        <v-row>
          <v-col cols="12" md="4">
            <v-text-field v-model="registerData.author_id.value" label="著者" required></v-text-field>
          </v-col>
          <v-col cols="12" md="4">
            <v-text-field v-model="registerData.publisher_id.value" label="出版社" required></v-text-field>
          </v-col>
        </v-row>
        <v-row justify="end">
          <v-btn color="primary" @click="submit">登録</v-btn>
        </v-row>
      </v-container>
    </v-form>
  </v-card>
</template>

<script setup lang="ts">
import { ref } from "vue";

const date = ref<string>(new Date().toISOString().slice(0, 19).replace('T', ' '));

const registerData = {
  // TODO idはdefinePropsを使用して親から取得する(現状の最大id+1)
  id: ref<number>(),
  title: ref<string>(''),
  year_of_publication: ref<string>(''),
  rating: ref<number>(),
  author_id: ref<number>(),
  publisher_id: ref<number>(),
  impression_id: ref<number>(),
  // 下記はサーバ側処理も検討
  created_at: date,
  updated_at: date,
  deleted_at: ref<string | null>(null),
}

const emit = defineEmits(['clickSubmit']);
/**
 * 親コンポーネントに登録イベントを通知する
 */
const submit = () => {
  emit('clickSubmit');
}
</script>