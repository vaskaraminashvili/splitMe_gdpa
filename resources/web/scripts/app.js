import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { createPinia } from 'pinia'
import WebLayout from "@/web/scripts/views/layouts/default.vue"

const app = createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./views/pages/**/*.vue', { eager: true })
        name = name.replace(".", "/");
        let page = pages[`./views/pages/${name}.vue`]
        page.default.layout = page.default.layout || WebLayout
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(createPinia())
            .mount(el)


    },
})

