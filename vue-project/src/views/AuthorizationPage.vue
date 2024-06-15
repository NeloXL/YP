<script setup>
import InputFieldComponent from "@/components/InputFieldComponent.vue";
import HeaderComponent from "@/components/HeaderComponent.vue"

import {ref, defineProps} from "vue";
const error = ref(false)
const formData = ref({
  login: '',
  password: ''
})

const props = defineProps({
  login: String,
  password: String,
})

async function login(){
  let response = await fetch('http://localhost:8000/api/GetUser/' + formData.value.login + '/' + formData.value.password, {
        method: "POST",
        body: JSON.stringify(formData.value),
        headers:{
          'Content-type': 'application/json'
        }
      }
  )
  if (response.status === 201){
    formData.value.login = ''
    formData.value.password = ''
    error.value = false
  }
  else {
    error.value = true
  }
}
</script>

<template>
  <body>
    <div class="page">
      <HeaderComponent></HeaderComponent>
      <div class="wrapper">
          <form action="#">
            <label class="primary-label label">Авторизация</label>
            <div class="input-div-text">
              <label for="input-field" class="label">Логин</label>
              <input type="text" id="input-field" :class="{'error-bg': error}" v-model="formData.login" placeholder="Введите логин..." >
            </div>
            <div class="input-div-text">
              <label for="input-field" class="label">Пароль</label>
              <input type="text" id="input-field" :class="{'error-bg': error}" v-model="formData.password" placeholder="Введите пароль..." >
            </div>
            <label class="error label" v-if="error">Неправильные логин и/или пароль!</label>
            <input type="button" value="Войти" @click="login" class="input-button input-field">
          </form>
      </div>
    </div>
  </body>
</template>

<style scoped>
@media (max-width: 430px) {
  .login_block{
    padding: 25px 40px;
  }
  .wrapper{
    width: 380px;
  }
  h1{
    font-size: 16px;
  }
}/*

  form{
    input{
      width: 200px;
      font-size: 16px;
    }
  }
  button{
    width: 100px;
    font-size: 14px;
  }
  form{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 30px;
    input{
      width: 350px;
      font-size: 22px;
      border-radius: 10px;
      padding: 5px;
      margin-top: 10px;
    }
    button{
      font-size: 22px;
      border-radius: 10px;
      padding: 5px;
    }


}
.login_block{
  padding: 25px 100px;
  margin-top: calc(50vh - 15%);
  background:#D9D9D9;
}*/
</style>