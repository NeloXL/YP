<script setup>

</script>

<template>
  <div class="wrapper">
    <form action="#">
      <h1 class="primary-label label">Создать аккаунт</h1>
      <div class="input-div-text">
        <label for="input-field" class="label">ФИО</label>
        <input type="text" id="input-field" placeholder="Введите ФИО..." v-model="formData.FIO">
      </div>
      <div class="input-div-text">
        <label for="input-field" class="label">Логин</label>
        <input type="text" id="input-field" placeholder="Введите логин..." v-model="formData.login">
      </div>
      <div class="input-div-text">
        <label for="input-field" class="label">Пароль</label>
        <input type="text" id="input-field" placeholder="Введите пароль..." v-model="formData.password">
      </div>
      <div class="dropdown-role input-div-text">
        <label for="dropdown" class="label">Роль</label>
        <select id="dropdown" v-model="formData.role">
          <option disabled selected hidden>Роль...</option>
          <option>Администратор</option>
          <option>Замерщик</option>
          <option>Мастер</option>
          <option>Менеджер</option>
          <option>Директор</option>
        </select>
      </div>
      <input type="button" value="Создать" @click="register" class="input-button input-field">
    </form>
  </div>
</template>

<style scoped>


</style>