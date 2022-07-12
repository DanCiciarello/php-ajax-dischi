new Vue ({
    el: "#app",
    data: {
        dbDischi: [],
    },
    mounted(){
        axios.get("api/database.php")
        .then(resp => {
            this.dbDischi = resp.data.lista;
        })
    },
})