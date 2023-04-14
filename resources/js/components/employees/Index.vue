<template>
<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employees</h1>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card mx-auto">
                <div class="alert alert-success">

                </div>

                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <form action="" method="GET">
                                <div class="form-row align-items-center">
                                    <div class="col">
                                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput" placeholder="Tanzania">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <router-link
                                :to="{ name: 'EmployeesCreate' }"
                                class="btn btn-primary mb-2">
                                Create
                            </router-link>

                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Department</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Bernard</td>
                            <td>Chisumo</td>
                            <td>12 Fix Road</td>
                            <td>Finance</td>
                            <td>
                                <a href="#" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
