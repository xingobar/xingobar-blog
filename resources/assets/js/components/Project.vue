<template>
    <div class="position-ref full-height">
        <div class="content">
            <div class="title m-b-md m-padding">
                Project
            </div>

            <div class="row">
                <div class="col-md-3" v-for="(panelText, index) in panelTitles" :key="index">
                    <div class="panel panel-default project-panel" @click="redirect(panelText)">
                        <div class="panel-body">
                            {{panelText}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<style lang="scss">
    .row {
        padding-left:20px;
        padding-right:20px;
    }    
</style>

<script>
    export default {
        data() {
            return {
                panelTitles:['TodoList','Socket Room','Demo02','Demo03']
            }
        },

        methods: {
            redirect: function(title) {
                switch(title) {
                    case 'TodoList':
                        window.location.href = '/todolist';
                        break;
                }
            }
        }
    }
</script>