<template>
  <div class="page">
    <HeaderComponent></HeaderComponent>
    <div class="wrapper">
      <UserComponent
        v-for="user in users"
        :key="user"
        :name="user.name"
        ></UserComponent>
    </div>
  </div>
</template>

<script setup>
import {ref} from 'vue'
import HeaderComponent from "@/components/HeaderComponent.vue"
import UserComponent from "@/components/UserComponent.vue";

const users = ref([
  {
    name: "User1"
  },
  {
    name: "User2"
  },
  {
    name: "User3"
  },
])
</script>

<style scoped>
  .wrapper{
    display: flex;
    flex-direction: column;
    gap: 30px;
  }
</style>