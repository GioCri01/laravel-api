<template>
  <div >
    <div class="container">

        <ul>
            <li
            v-for="post in posts"
            :key="post.id"
            >
                <h3>{{ post.title }}</h3>

                <p>{{ post.content }}</p>
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
                console.log(this.posts);
            })
        }
    }


}
</script>

<style>

</style>
