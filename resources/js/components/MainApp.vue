<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <input type="text" v-model="info.fname" placeholder="first name">
                    <input type="text" v-model="info.mname" placeholder="middle name">
                    <input type="text" v-model="info.lname" placeholder="last name">
                    <button @click="save">save</button>
                </div>

                <div>
                    <div >
                        <table>
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Middle name</th>
                                    <th>Last name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                    <td>{{vue}}</td>
                                </tr> -->
                                <tr v-for="stud in vue" :key="stud.id">
                                    <td><input type="text" v-model="stud.fname"></td>
                                    <td><input type="text" v-model="stud.mname"></td>
                                    <td><input type="text" v-model="stud.lname"></td>
                                    <td><button id="delete" @click="del(stud.id)">Delete</button></td>
                                    <td><button @click="upd(stud)">Update</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <p><b>Recycles</b></p>
                        <table>
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="rec in recycle" :key="rec.id">
                                    <td>{{rec.rfname}}</td>
                                    <td>{{rec.rmname}}</td>
                                    <td>{{rec.rlname}}</td>
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
        mounted() {
            this.retrieve();
        },
        data: () => ({
            rec: {
                fname: "",
            lname: "",
            mname: "",
            },

            info: {
                fname: "",
                mname: "",
                lname: ""
            },
            vue: "",
            recycle: ""
        }),

        methods: {
            save() {
                axios.post('api/save', this.info)
                .then((response) => this.retrieve())  
            },
            retrieve() {
                axios.get('api/retrieve')
                    .then(response => {
                        this.vue = response.data.student, 
                        this.recycle = response.data.recycle 
                        })
            },
            del(id) {
                axios.delete(`api/delete/${id}`, this.fname, this.lname, this.mname)
                .then((response) => console.log('data'))  
                /* .then((response) => this.retrieve())   */
            },
            upd(stud) {
                axios.put(`api/update/${stud.id}`, stud)
                .then((response) => console.log('updated'))  
            }
        }
    }

</script>
