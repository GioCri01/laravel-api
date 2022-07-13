<template>
  <div >
    <div class="container">

        <ul>
            <li
            class="pt-5"
            v-for="post in posts"
            :key="post.id"
            >
                <h3> Titolo: {{ post.title }}</h3>
                <p> Contenuto :{{ post.content }}</p>
                <h4> Categoria :{{ post.category.name }}</h4>


            </li>
        </ul>

    </div>



  </div>
</template>

<script>
import Axios from 'axios';

export default {
    name: "App",

    data(){
        return{
            apiUrl : "http://127.0.0.1:8000/api/posts",
            posts : [],
        }
    },

    mounted(){
        this.getApi();
    },

    methods:{
        getApi(){
            axios.get(this.apiUrl)
            .then(res =>{
                this.posts = res.data;

            })
        }
    }


}
</script>

<style>

</style>
