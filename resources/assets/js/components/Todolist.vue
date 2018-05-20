<template>
    <div>
        <div class="row">
            <div id="todolist_title" class="text-center col-md-12">
                <h1>TodoList</h1>
            </div>
        </div>

        <div class="display-center">
           <div class="row">
                <div class="col-md-4">
                    <button class="filter-btn btn btn-primary" @click="setFilter(1)">全部</button>
                </div>
                <div class="col-md-4">
                    <button class="filter-btn btn btn-info" @click="setFilter(2)">已完成</button>
                </div>
                <div class="col-md-4">
                    <button class="filter-btn btn btn-success" @click="setFilter(3)">未完成</button>
                </div>
           </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="todo_form">
                    <input id="todo_value" 
                           class="form-control" 
                           type="text" 
                           value="test"
                           @keyup.enter="addItem()"
                           @focus="clear($event)"
                           v-model="todoValue"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="todo_list_group">
                    <ul class="list-group swing">
                        <transition-group name="swing">
                            <todo-item v-for="(todo,index) in list" :key="todo.id" :index="index" :todo="todo" @remove="del(index)"></todo-item> 
                        </transition-group>  
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss">

   $raleway: 'Raleway', sans-serif;
   $inputFontSize: 20px;
   $inputWidth:30%;
   $inputHeight:50px;

   #todolist_title {
       h1 {
        padding-top:20px;
        font-size:100px !important;
        font-family: 'Kaushan Script', cursive;
       }
   }

   .display-center{
       display:flex;
       align-items:center;
       justify-content:center;
   }
   
   .filter-btn {
       width:80px !important;
       height:40px !important;
   }

   #todo_form {
       display:flex;
       align-items:center;
       justify-content:center;
       padding-top:30px;

       .form-control {
           width:$inputWidth;
           height:$inputHeight;
           font-family: $raleway;
           font-size:$inputFontSize;
           box-shadow: 0px 1px 1px 1px white, 0px 5px 5px grey, 0px 7px 7px #908a8a;
       }
   }

   html,body,.swal2-shown {
       height:100% !important;
   }

   .swal2-popup {
       width:40em !important;
       font-size:.85em !important;
   }

   #todo_list_group {
       display:flex;
       align-items:center;
       justify-content:center;
       padding-top:30px;

       .list-group {
           width:$inputWidth;
           height:$inputHeight;
           font-family: $raleway;
           font-size:$inputFontSize;
       }
   }

    // todo item effect
    .swing-enter-active, .swing-leave-active {
        opacity: 1;
        transform: none;
        transition: all 0.5s cubic-bezier(.36,-0.64,.34,1.76);
    }

    .swing-enter, .swing-leave-to {
        opacity: 0;
        transform: rotateX(-90deg);
        transition: all 0.5s cubic-bezier(.36,-0.64,.34,1.76);
    }

</style>

<script>
    
    import TodoItem from './TodoItem.vue';

    export default {
        name:'TodoList',
        components: {
            TodoItem
        },
        data() {
            return { 
                     todoValue:'',
                     todolist: [],
                     filter:1
                   }
        },

        mounted: function() {
            var options = {
                strings: ["Welcome","Please input your todo item"],
                typeSpeed: 40
            }

            var typed = new Typed("#todo_value", options);
        },

        methods: {
            addItem: function () {

                if (!this.todoValue) {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Please input your todo list!',
                    })
                    return ;
                }

                this.todolist.push({
                    id: new Date().getTime(),
                    text:this.todoValue,
                    completed:false
                })
            },

            clear:function(event){
                event.target.value = '';
            },

            del: function(index) {
               // this.todolist.splice(index,1);
               this.todolist[index].completed = !this.todolist[index].completed;
            },

            setFilter: function(type) {
                this.filter = type;
            },

            show: function(complete) {

                return this.todolist.filter((todo) => {
                    return todo.completed == complete;
                })

            }
        },
        
        computed: {
            list:function() {
                switch(this.filter) {
                    //全部
                    case 1:
                        return this.todolist;
                    //完成
                    case 2:
                        return this.show(true);
                    //未完成
                    case 3:
                        return this.show(false);
                    default:
                        return this.todolist;
                }
            }
        }
    }
</script>