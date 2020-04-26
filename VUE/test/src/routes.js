import VueRouter from 'vue-router';
import Home from './pages/Home';
import Cars from './pages/Cars';
import Car from './pages/Car';

export default new VueRouter({
    base: '/',
    mode: 'history',
    routes: [
        { path: '', component: Home, name: 'Home' },
        { path: '/cars', component: Cars, name: 'Cars' },
        { path: '/car', component: Car, name: 'Car' }
    ]
});