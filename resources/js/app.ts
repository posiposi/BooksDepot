import './bootstrap';
import 'vuetify/styles'
import { createApp } from 'vue'
import { createVuetify } from 'vuetify'
import App from './components/App.vue'
import router from "./router"
import '@mdi/font/css/materialdesignicons.css'

const app = createApp(App)
const vuetify = createVuetify()

app.use(router)
app.use(vuetify)
app.mount("#app")
