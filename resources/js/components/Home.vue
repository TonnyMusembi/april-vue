<template>

 <div class="container">
        <h3 class="p-3 text-center">Orders Delivered</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Order</th>
                    <th>Delivered</th>
                    <th>Pending</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td>{{user.firstName}} {{user.lastName}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.role}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <!-- <button class="" > Next</button> -->
        <button class="bg-cyan-500 shadow-lg shadow-cyan-500/50 ...">Subscribe</button>

    </div>

</template>
<script>
export default {
data() {
    return {



    }
},

}

methods:{

    const url ="http://april-vue.test/api/orders"

    fetch(url)
    .then((response) => {
        console.log(response.data)
    })
    .catch((error) => {
 console.log(error)

    })
}


</script>
