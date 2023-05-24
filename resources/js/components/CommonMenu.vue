<template>
  <div>
    <!-- 上部メニュー -->
    <v-app-bar color="primary">
      <v-app-bar-nav-icon @click="toggleSidebarDisplay()"></v-app-bar-nav-icon>
      <v-toolbar-title>BooksDepot</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn variant="outlined" @click="toggleRegisterDialogDisplay()">登録</v-btn>
    </v-app-bar>
    <!-- サイドバー -->
    <v-navigation-drawer v-model="isDrawer">
      <v-list nav>
        <v-list-item prepend-icon="mdi-email" title="Inbox" value="inbox">テスト</v-list-item>
        <v-list-item prepend-icon="mdi-account-supervisor-circle" title="Supervisors" value="supervisors"></v-list-item>
        <v-list-item prepend-icon="mdi-clock-start" title="Clock-in" value="clockin"></v-list-item>
      </v-list>
    </v-navigation-drawer>
    <!-- 書籍登録ダイアログ -->
    <v-dialog v-model="isRegisterDialog" width="700">
      <book-register-dialog @clickSubmit="toggleRegisterDialogDisplay()"></book-register-dialog>
    </v-dialog>
  </div>
</template>

<script setup lang="ts">
import { ref } from "vue";
import BookRegisterDialog from './BookRegisterDialog.vue';

// サイドバー表示
const isDrawer = ref<boolean>(false);
// 書籍登録ダイアログ表示
const isRegisterDialog = ref<boolean>(false);

/**
 * サイドバーの表示を切り替える
 */
const toggleSidebarDisplay = (): void => {
  isDrawer.value = !isDrawer.value;
}

/**
 * 書籍登録ダイアログの表示を切り替える
 */
const toggleRegisterDialogDisplay = (): void => {
  isRegisterDialog.value = !isRegisterDialog.value;
}
</script>