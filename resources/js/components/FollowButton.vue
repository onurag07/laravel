<template>
    <div>
        <button class="btn btn-primary" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],

        mounted() {
            console.log('Component mounted.');
        },

        data: function(){

            return{

                    status: this.follows,

            }

        },

        methods:{

            followUser(){
                // alert('inside');
                axios.post('/follow/' + this.userId)
                    .then(response  =>  {
                        this.status = ! this.status;
                        console.log(response.data);
                    })
                    .catch(errors => {
                        if(errors.response.status == 401){
                            window.location    =   '/login';
                        }
                    });

            }

        },

        computed: {

            buttonText() {

                console.log(this.status);
                return (this.status == true) ? 'UnFollow' : 'Follow';
            }

        }
    }
</script>
