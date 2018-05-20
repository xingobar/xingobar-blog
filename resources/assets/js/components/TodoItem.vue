<template>
    <li class="list-group-item show">
        {{todo.text}} 
        <span @click="removeItem(index)">
            <i class="fas fa-check" :class="{'completed':todo.completed, 'line-through': todo.completed}"></i>
        </span>
    </li>
</template>

<style lang="scss">

   .show{

        position:relative;

        .fa-check {
            float:right;
            border-radius:99%;
            width:25px;
            height:25px;
            border:1px solid #ccc;
            line-height:25px;
            text-shadow: 1px 1px 1px #ccc;
            font-size:18px;
            text-align:center;
            color:#afa8a8;
        }

        .fa-check:hover {
            transition:all 0.5s;
            color:#f19c9c;
        }

        .completed{
            color:#f19c9c !important;
        }

        &:after{
            content:'';
            position:absolute;
            top:50%;
            left:0;
            width:0;
            height:50px;
            opacity:0;
            border-top:2px solid #bdbdbd;
            transition:all 0.5s;
        }

        &:hover{
            &:after{
                content:'';
                opacity:1;
                width:100%;
            }
        }
   }

   .line-through {
       &:after{
           content:'';
           position:absolute;
           left:0%;
           top:50%;
           opacity:1;
           width:100%;
           height:50px;
           border-top:2px solid #bdbdbd;
       }
   }


</style>

<script>

    export default {
        name:'todo-item',
        props: ['todo','index'],
        data() {
            return {}
        },
        mounted() {
            console.log('element mounted');
        },

        methods: {
            removeItem: function(index) {
                // this為父組件
                this.$emit('remove');
            }
        }

    } 

</script>