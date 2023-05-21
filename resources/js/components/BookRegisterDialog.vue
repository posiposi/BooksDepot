<template>
  <v-card>
    <v-card-text>
      ここに書籍登録フォームのテキストを入力する。
    </v-card-text>
    <v-card-actions>
      <v-btn color="primary" block @click="submit">登録</v-btn>
    </v-card-actions>
  </v-card>
</template>

<script setup lang="ts">
const emit = defineEmits(['clickSubmit']);
/**
 * 親コンポーネントに登録イベントを通知する
 */
const submit = () => {
  emit('clickSubmit');
}
</script>