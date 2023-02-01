const {
    createApp
} = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            language: '',
            message: 'hello'
        }
    },


    methods: {
        
    },


    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;
        });
    }


}).mount('#app')