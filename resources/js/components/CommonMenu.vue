<template>
  <div>
    <!-- 上部メニュー -->
    <v-app-bar color="primary">
      <v-app-bar-nav-icon @click="toggleSidebarDisplay()"></v-app-bar-nav-icon>
      <v-toolbar-title>BooksDepot</v-toolbar-title>
    </v-app-bar>
    <!-- サイドバー -->
    <v-navigation-drawer v-model="drawer">
      <v-list nav>
        <v-list-item prepend-icon="mdi-email" title="Inbox" value="inbox">ほげ</v-list-item>
        <v-list-item prepend-icon="mdi-account-supervisor-circle" title="Supervisors" value="supervisors"></v-list-item>
        <v-list-item prepend-icon="mdi-clock-start" title="Clock-in" value="clockin"></v-list-item>
      </v-list>
    </v-navigation-drawer>
  </div>
</template>

<script setup lang="ts">
import { ref } from "vue";

// サイドバー表示切り替え
const drawer = ref<boolean>(false);

/**
 * サイドバーの表示を切り替える
 */
const toggleSidebarDisplay = (): void => {
  drawer.value = !drawer.value;
}
</script>