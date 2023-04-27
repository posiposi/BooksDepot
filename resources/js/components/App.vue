<template>
  <v-app>
    <common-menu></common-menu>
    <v-main>
      <router-view></router-view>
    </v-main>
  </v-app>
</template>

<script setup lang="ts">
import CommonMenu from './CommonMenu.vue'
</script>