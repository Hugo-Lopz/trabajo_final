import { createApp, h } from 'vue'; // Importa la función h

import ProductosStock from '../ficheros_vue/ProductosStock.vue';

const stock = document.getElementById('app').getAttribute('data-stock');

createApp({
    data() {
        return {
            stock: parseInt(stock)
        }
    },
    render() {
        return h(ProductosStock, {
            stock: this.stock
        });
    }
}).mount('#app');