<template>
    <div class="rgba-white-9 p-3">
        <form @submit.prevent="agregar">
            <div class="row">
                <div class="col">
                    <el-select
                        v-model="destino"
                        multiple
                        collapse-tags
                        class="w-100"
                        type="danger"
                        placeholder="Destinations">
                        <el-option
                            v-for="item in destinations"
                            :key="item.id"
                            :label="item.nombre"
                            :value="item.nombre">
                        </el-option>
                    </el-select>
                </div>
                <div class="col">
                    <el-select
                        v-model="category"
                        multiple
                        collapse-tags
                        class="w-100"
                        placeholder="Style">
                        <el-option
                            v-for="item in categories"
                            :key="item.id"
                            :label="item.nombre"
                            :value="item.nombre">
                        </el-option>
                    </el-select>
                </div>
                <div class="col">
                    <el-input placeholder="Travelers" type="number" v-model="pasajeros"></el-input>
                </div>
                <div class="col">
                    <el-button type="warning" class="w-100 font-weight-bold font-size-extra-large" icon="el-icon-edit" @click="dialogVisible = true">Design my Trip</el-button>
                </div>

                <el-dialog
                    :visible.sync="dialogVisible"
                    width="40%"
                    top="10vh"

                >
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="font-weight-bold">¡Casi terminamos!</h4>
                            <p>Necesitamos un poco más de información para crear su itinerario:</p>
                        </div>
                        <div class="col-12">
                            <el-input size="small" placeholder="Full Name" v-model="name" prefix-icon="el-icon-user"></el-input>
                        </div>
                        <div class="col-12 my-3">
                            <el-input size="small" placeholder="Email" v-model="email" prefix-icon="el-icon-date"></el-input>
                        </div>
                        <div class="col-12">
                            <vue-tel-input v-model="phone"></vue-tel-input>
                        </div>
                        <div class="col-6 my-3">
                            <el-input size="small" type="number" min="1" placeholder="Trip duration in days" v-model="duration" prefix-icon="el-icon-sunny"></el-input>
                        </div>
                        <div class="col-6 my-3">
                            <el-date-picker
                                v-model="date"
                                type="date"
                                size="small"
                                placeholder="Travel date"
                                class="w-100"
                                :picker-options="pickerOptions">
                            </el-date-picker>
                        </div>
                        <div class="col-12">
                            <el-select
                                v-model="plan"
                                collapse-tags
                                size="small"
                                class="w-100"
                                placeholder="What stage of planning are you in?">
                                <el-option
                                    v-for="item in options_plan"
                                    :key="item.value"
                                    :label="item.label"
                                    :value="item.value">
                                </el-option>
                            </el-select>
                        </div>
                        <div class="col mt-3">
                            <el-input
                                type="textarea"
                                autosize
                                prefix-icon="el-icon-sunny"
                                :autosize="{ minRows: 2, maxRows: 4}"
                                placeholder="Any notes or special requests?"
                                v-model="commend">
                            </el-input>
                        </div>
                    </div>
                    <span slot="footer" class="dialog-footer">
                    <el-button @click="dialogVisible = false">Cancel</el-button>
                    <el-button type="submit" @click="dialogVisible = false">
                        Enviar <i class="fas fa-circle-notch fa-spin "></i>
                    </el-button>
                    </span>
                </el-dialog>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {

            options_plan: [
                {value: 'Still dreaming / researching', label: 'Still dreaming / researching'},
                {value: 'Definitely traveling, not sure which country yet', label: 'Definitely traveling, not sure which country yet'},
                {value: 'I want to book a trip', label: 'I want to book a trip'}
            ],
            category: [],
            destino: [],
            pasajeros: '',
            name:'',
            email:'',
            phone:'',
            duration:'',
            plan: '',
            date:'',
            commend:'',
            dialogVisible: false,
            pickerOptions: {
                disabledDate(time) {
                    return time.getTime() < Date.now();
                }
            },

            destinations: [],
            categories: [],
        }
    },

    created(){
        axios.get('/loaddestinos/destinos').then(res=>{
            this.destinations = res.data;
        });

        axios.get('/loadcategory/category').then(res=>{
            this.categories = res.data;
        })
    },

    methods: {
        handleClose(done) {
            this.$confirm('Are you sure to close this dialog?')
                .then(_ => {
                    done();
                })
                .catch(_ => {});
        }
    }
}
</script>
<style>
.el-tag {
    background-color: #ecf5ff !important;
    border-color: #d9ecff !important;
    color: #409eff !important;
}
.el-icon-close {
    background-color: transparent !important;
    color: #409eff !important;
}
.el-icon-close:hover {
    background-color: #409eff !important;
    color: white !important;
}
.el-dialog__header {
    padding: 0 !important;
    padding-bottom: 0 !important;
}
.el-picker-panel, .el-select-dropdown{
    z-index: 3003 !important;
}
</style>
