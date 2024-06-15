<template>
  <div class="user-card">
    {{name}}
  </div>
</template>

<script setup>
import {defineProps} from 'vue'

const props = defineProps(['name'])
</script>

<style scoped>
  .user-card{
    background-color: var(--main-color);
    color: var(--text-color);
    height: 60px;
    width: 100%;
    border-radius: 20px;
  }
</style>