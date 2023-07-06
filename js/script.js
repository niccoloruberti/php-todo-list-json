const { createApp } = Vue;

createApp({
    data() {
        return {
            toDoItem: '',
            toDoList: null,
        }
    },
    mounted() {
        axios.get('server.php').then(response => {
            this.toDoList = response.data;
            console.log(this.toDoList)
        })
    },
    methods: {
        addTask() {
            const data = {
                'text': this.toDoItem,
                'done': false,
            }

            axios.post('server.php', data, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then((response) => {
                this.toDoItem = '';
                this.toDoList = response.data;
            })
        }
    },
}).mount('#app')