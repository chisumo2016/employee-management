<template>
<div>
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-8">
               <div class="card">
                   <div class="card-header">Create Employees'
                       <router-link
                           :to="{ name: 'EmployeesIndex' }"
                           class="float-right">
                           Back
                       </router-link>
                   </div>

                   <div class="card-body">
                       <form >
                           <div class="form-group row mb-3">
                               <label
                                   for="first_name"
                                   class="col-md-4 col-form-label text-md-end">
                                   First Name
                               </label>

                               <div class="col-md-6">
                                   <input
                                       id="first_name"
                                       type="text"
                                       class="form-control"
                                       required
                                     />
                               </div>
                           </div>
                           <div class="form-group row mb-3">
                               <label
                                   for="middle_name"
                                   class="col-md-4 col-form-label text-md-end">
                                   Middle Name
                               </label>

                               <div class="col-md-6">
                                   <input
                                       id="middle_name"
                                       type="text"
                                       class="form-control"
                                       required
                                   />
                               </div>
                           </div>
                           <div class="form-group row mb-3">
                               <label
                                   for="last_name"
                                   class="col-md-4 col-form-label text-md-end">
                                   Last Name
                               </label>

                               <div class="col-md-6">
                                   <input
                                       id="last_name"
                                       type="text"
                                       class="form-control"
                                       required
                                   />
                               </div>
                           </div>
                           <div class="form-group row mb-3">
                               <label
                                   for="address"
                                   class="col-md-4 col-form-label text-md-end">
                                   Address
                               </label>

                               <div class="col-md-6">
                                   <input
                                       id="address"
                                       type="text"
                                       class="form-control"
                                       required
                                   />
                               </div>
                           </div>
                           <div class="form-group row mb-3">
                               <label
                                   for="state"
                                   class="col-md-4 col-form-label text-md-end">
                                   State
                               </label>

                               <div class="col-md-6">
                                   <select
                                       name="state"
                                       class="form-control"
                                       aria-label="Default select example">
                                       <option selected>Select State</option>

                                   </select>
                               </div>
                           </div>
                           <div class="form-group row mb-3">
                               <label
                                   for="city"
                                   class="col-md-4 col-form-label text-md-end">
                                   City
                               </label>

                               <div class="col-md-6">
                                   <select
                                       name="city"
                                       class="form-control"
                                       aria-label="Default select example">
                                       <option selected>Select City</option>

                                   </select>
                               </div>
                           </div>
                           <div class="form-group row mb-3">
                               <label
                                   for="zip_code"
                                   class="col-md-4 col-form-label text-md-end">
                                   Zip Code
                               </label>

                               <div class="col-md-6">
                                   <input
                                       id="zip_code"
                                       type="text"
                                       class="form-control"
                                       required
                                   />
                               </div>
                           </div>
                           <div class="form-group row mb-3">
                               <label
                                   for="country"
                                   class="col-md-4 col-form-label text-md-end">
                                   Country</label>

                               <div class="col-md-6">
                                   <select
                                       name="country"
                                       class="form-control"
                                       aria-label="Default select example">
                                       <option selected>Select Country</option>

                                   </select>
                               </div>
                           </div>
                           <div class="form-group row mb-3">
                               <label
                                   for="department"
                                   class="col-md-4 col-form-label text-md-end">
                                   Department
                               </label>

                               <div class="col-md-6">
                                   <select
                                       name="department"
                                       class="form-control"
                                       aria-label="Default select example">
                                       <option selected>Select Department</option>

                                   </select>
                               </div>
                           </div>
                           <div class="form-group row ">
                               <label
                                   for="birth_date"
                                   class="col-md-4 col-form-label text-md-end">
                                   Birth Date
                               </label>
                               <div class="col-md-6">
                                   <datepicker class="form-control"/>
                               </div>

                           </div>
                           <div class="form-group row ">
                               <label
                                   for="date_hired"
                                   class="col-md-4 col-form-label text-md-end">
                                   Date Hired
                               </label>
                               <div class="col-md-6">
                                   <datepicker class="form-control"/>
                               </div>

                           </div>

                           <div class="row mb-0 mt-4">
                               <div class="col-md-6 offset-md-4">
                                   <button type="submit" class="btn btn-primary">
                                       Create
                                   </button>
                               </div>
                           </div>

                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</template>

<script>
import Datepicker from 'vue3-datepicker'
export default {
    name: "Create",
    components: {
        Datepicker
    },
   data(){
        return{
            countries:[],
            states:[],
            departments:[],
            cities:[],
        }
   },
    created() {
        this.getCountries()
    },
    methods:{
        getCountries(){
            axios.get('/api/employees/countries')
                  .then(res => {
                      this.countries = res.data
                  }).catch(error => {
                      console.log(console.error)
            })
        }
    }
};
</script>

<style scoped>

</style>
