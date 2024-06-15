<script setup>
import HeaderComponent from "@/components/HeaderComponent.vue";
import {ref, reactive, onMounted} from "vue";

const error = ref(false);
const roles = ref([]);

const formData = reactive({
  FIO: '',
  login: '',
  password: '',
  role: '',
})



async function register(){
  let response = await fetch('http://localhost:8000/api/CreateAccount', {
        method: "POST",
        body: JSON.stringify(formData),
        headers:{
          'Content-type': 'application/json'
        }
      }
  )
  if (response.status === 201){
    formData.FIO = ''
    formData.login = ''
    formData.password = ''
    formData.role = ''
    error.value = false;
  }
  else {
    error.value = true
  }
}

async function getRoles(){
  let response = await fetch('http://localhost:8000/api/GetRoles', {
    method: "GET",
    headers:{
      'Content-type': 'application/json'
    }
  })
  let json = await response.json();
  console.log(json);
  roles.value = json.roles;
}



onMounted(()=>{
  getRoles();
})
</script>

<template>
  <div class="page">
    <HeaderComponent></HeaderComponent>
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
          <select id="dropdown" v-model="formData.role" required>
            <option v-for="role in roles" :key="role">{{ role.role }}</option>
          </select>
        </div>
        <label class="error label" v-if="error">Неправильно введены данные!</label>
        <input type="button" value="Создать" @click="register" class="input-button input-field">
      </form>
    </div>
  </div>
</template>

<style scoped>

</style>