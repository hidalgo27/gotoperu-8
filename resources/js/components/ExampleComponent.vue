<template>
    <div class="rgba-white-9 pt-4 px-3">
        <el-form :model="ruleForm" :rules="rules" ref="ruleForm" class="demo-ruleForm">
            <div class="row">
                <div class="col">
                    <el-form-item prop="destino">
                        <el-select
                            v-model="ruleForm.destino"
                            multiple
                            collapse-tags
                            class="w-100"
                            type="danger"
                            placeholder="Destinations">
                            <el-option
                                v-for="item in ruleForm.destinations"
                                :key="item.id"
                                :label="item.nombre"
                                :value="item.nombre">
                            </el-option>
                        </el-select>
                    </el-form-item>
                </div>
                <div class="col">
                    <el-form-item prop="category">
                        <el-select
                            v-model="ruleForm.category"
                            multiple
                            collapse-tags
                            class="w-100"
                            placeholder="Style">
                            <el-option
                                v-for="item in ruleForm.categories"
                                :key="item.id"
                                :label="item.nombre"
                                :value="item.nombre">
                            </el-option>
                        </el-select>
                    </el-form-item>
                </div>
                <div class="col">
                    <el-form-item prop="pasajeros">
                        <el-input placeholder="Travelers" type="number" v-model="ruleForm.pasajeros"></el-input>
                    </el-form-item>
                </div>
                <div class="col">
                    <el-button type="warning" class="w-100 font-weight-bold font-size-extra-large" icon="el-icon-edit" @click="ruleForm.dialogVisible = true">Design my Trip</el-button>
                </div>

                <el-dialog
                    :visible.sync="ruleForm.dialogVisible"
                    width="40%"
                    top="10vh"

                >
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="font-weight-bold">¡Casi terminamos!</h4>
                            <p>Necesitamos un poco más de información para crear su itinerario:</p>
                        </div>
                        <div class="col-12">
                            <el-form-item prop="name">
                                <el-input size="small" placeholder="Full Name" v-model="ruleForm.name" prefix-icon="el-icon-user"></el-input>
                            </el-form-item>
                        </div>
                        <div class="col-12">
                            <el-form-item prop="email">
                                <el-input size="small" placeholder="Email" v-model="ruleForm.email" prefix-icon="el-icon-date"></el-input>
                            </el-form-item>
                        </div>
                        <div class="col-12">
                            <el-form-item prop="phone" class="input_phone_intel">
                                <vue-tel-input v-model="ruleForm.phone"></vue-tel-input>
                            </el-form-item>
                        </div>
                        <div class="col-6">
                            <el-form-item prop="duration">
                                <el-input size="small" type="number" min="1" placeholder="Trip duration in days" v-model="ruleForm.duration" prefix-icon="el-icon-sunny"></el-input>
                            </el-form-item>
                        </div>
                        <div class="col-6">
                            <el-form-item prop="date">
                                <el-date-picker
                                    v-model="ruleForm.date"
                                    type="date"
                                    size="small"
                                    placeholder="Travel date"
                                    class="w-100"
                                    :picker-options="ruleForm.pickerOptions">
                                </el-date-picker>
                            </el-form-item>
                        </div>
                        <div class="col-12">
                            <el-form-item prop="plan">
                                <el-select
                                    v-model="ruleForm.plan"
                                    collapse-tags
                                    size="small"
                                    class="w-100"
                                    placeholder="What stage of planning are you in?">
                                    <el-option
                                        v-for="item in ruleForm.options_plan"
                                        :key="item.value"
                                        :label="item.label"
                                        :value="item.value">
                                    </el-option>
                                </el-select>
                            </el-form-item>
                        </div>
                        <div class="col">
                            <el-form-item prop="commend">
                                <el-input
                                    type="textarea"
                                    autosize
                                    prefix-icon="el-icon-sunny"
                                    :autosize="{ minRows: 2, maxRows: 4}"
                                    placeholder="Any notes or special requests?"
                                    v-model="ruleForm.commend">
                                </el-input>
                            </el-form-item>
                        </div>
                    </div>
                    <span slot="footer" class="dialog-footer">
                    <el-button @click="ruleForm.dialogVisible = false">Cancel</el-button>
                    <el-button type="primary" @click="submitForm('ruleForm')">
                        Enviar
                    </el-button>
<!--                         <el-button @click="resetForm('ruleForm')">Reset</el-button>-->
                    </span>
                </el-dialog>
            </div>
        </el-form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            ruleForm: {
                options_plan: [
                    {value: 'Still dreaming / researching', label: 'Still dreaming / researching'},
                    {
                        value: 'Definitely traveling, not sure which country yet',
                        label: 'Definitely traveling, not sure which country yet'
                    },
                    {value: 'I want to book a trip', label: 'I want to book a trip'}
                ],
                category: [],
                destino: [],
                pasajeros: '',
                name: '',
                email: '',
                phone: '',
                duration: '',
                plan: '',
                date: '',
                commend: '',
                dialogVisible: false,
                pickerOptions: {
                    disabledDate(time) {
                        return time.getTime() < Date.now();
                    }
                },

                destinations: [],
                categories: [],

                fullscreenLoading: false,

            },
            rules: {
                name: [
                    { required: true, message: 'Please input Activity name', trigger: 'blur' },
                    // { min: 3, max: 5, message: 'Length should be 3 to 5', trigger: 'blur' }
                ],
                email: [
                    { required: true, message: 'Please input Activity email', trigger: 'blur' },
                    { type: 'email', message: 'Please input correct email address', trigger: ['blur', 'change'] }
                ]
                // phone: [
                //     { required: true, message: 'Please select Activity phone', trigger: 'blur' }
                // ]
                // date1: [
                //     { type: 'date', required: true, message: 'Please pick a date', trigger: 'change' }
                // ]
            }
        }
    },

    created(){
        axios.get('/loaddestinos/destinos').then(res=>{
            this.ruleForm.destinations = res.data;
        });

        axios.get('/loadcategory/category').then(res=>{
            this.ruleForm.categories = res.data;
        })
    },

    methods: {
        handleClose(done) {
            this.$confirm('Are you sure to close this dialog?')
                .then(_ => {
                    done();
                })
                .catch(_ => {});
        },


        submitForm(formName){
            this.$refs[formName].validate((valid) => {
                if (valid) {
                    // alert('submit!');
                    let obj = {
                        el_destino: this.ruleForm.destino,
                        el_category: this.ruleForm.category,
                        el_pasajeros: this.ruleForm.pasajeros,

                        el_nombre: this.ruleForm.name,
                        el_email: this.ruleForm.email,
                        el_telefono: this.ruleForm.phone,
                        el_duracion: this.ruleForm.duration,
                        el_fecha: this.ruleForm.date,
                        el_plan: this.ruleForm.plan,
                        el_textarea: this.ruleForm.commend,

                        tap_form_show: this.ruleForm.tap_form_show,

                    };
                    const self = this;

                    this.ruleForm.dialogVisible = false;

                    const loading = this.$loading({
                        lock: true,
                        text: 'Loading',
                        spinner: 'el-icon-loading',
                        background: 'rgba(0, 0, 0, 0.7)'
                    });

                    axios.post('/formulario-diseno', obj)
                        .then((res) =>{
                            loading.close();

                            this.$alert('Uno de nuestros asesores se contactara con usted', 'Su correo fue enviado Correctamente', {
                                confirmButtonText: 'OK',
                                type: 'success',
                                center: true,
                                callback: action => {
                                    this.$message({
                                        type: 'success',
                                        message: `Gracias`
                                    });
                                }
                            });
                            this.$refs[formName].resetFields();
                        })
                } else {
                    console.log('error submit!!');
                    return false;
                }
            });

            // if(this.ruleForm.name.trim() === '' || this.ruleForm.email.trim() === ''){
            //     alert('Por favor complete "Nombre" o "Email"');
            //     return;
            // }

        },
        resetForm(formName) {
            this.$refs[formName].resetFields();
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
.input_phone_intel .el-form-item__content{
    line-height: inherit !important;
}
</style>
