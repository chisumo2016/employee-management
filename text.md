import EmployeesIndex from '../components/employees'
import EmployeesCreate from '../components/employees/Create.vue'
import EmployeesEdit from '../components/employees/Edit.vue'
import {createRouter, createWebHistory} from "vue-router";

const routes = [
{
path: '/employees',
name: 'EmployeesIndex',
component: EmployeesIndex
},
{
path: '/employees/create',
name: 'EmployeesCreate',
component: EmployeesCreate
},
{
path: '/employees/:id',
name: 'EmployeesEdit',
component: EmployeesEdit
}
];

const router = createRouter({
history: createWebHistory(),
routes
});

export default router;
