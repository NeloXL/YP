import { createWebHistory, createRouter } from 'vue-router'
import CreateAccountPage from "@/views/CreateAccountPage.vue";
import UserListPage from "@/views/UserListPage.vue";
import AuthorizationPage from "@/views/AuthorizationPage.vue"

const routes = [
    {
        path: '/CreateAccount',
        component: CreateAccountPage,
    },
    {
        path: '/UserList',
        component: UserListPage,
    },
    {
        path: '/Login',
        component: AuthorizationPage,
    }
]


const index = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(){
        return {top:0}
    }
})

export default index;