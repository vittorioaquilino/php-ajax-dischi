const app = new Vue({
    el: "#root",
    data: {
        database: [],
    },
    methods: {
        getDatabase() {
            axios.get("http://localhost:8888/php-ajax-dischi/milestone2/server.php")
            .then((resp) => {
                this.database = resp.data;
            });
        },
    },
}) 