<template>
  <v-container>
    <p>Top Page</p>
    <h1>{{ count }}</h1>
    <v-btn color="blue" @click="count++">Increment</v-btn>

    <router-link to="/next">To Next Page →</router-link>

    <div>
      <v-icon icon="mdi-account" class="ma-4" />
      <v-btn icon="mdi-account" color="success" class="ma-4"></v-btn>
    </div>
  </v-container>
</template>

<script setup lang="ts">
import { ref } from "vue";
const count = ref <number> (1);
</script>