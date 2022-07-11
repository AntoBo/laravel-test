<template>
    <div>
<!--    <h3 class="vue-h3">The user is {{user}}</h3>-->


    <h1>{{user.name}}</h1>
    <p class="phone">phone: {{user.phone}}</p>
    <h2>Add new post</h2>
    <form @submit.prevent="createPost" method="post" class="post-form">
<!--          action="{{ route('store.post', ['user' => $user]) }}"-->

<!--        @method('post')-->
<!--        @csrf-->
        <label for="title">
            Title
        </label>
        <input v-model="form.title" type="text" name="title"/>
        <label for="content">
            Content
        </label>
        <textarea v-model="form.body" name="body" rows="14" cols="50">
                    </textarea>
        <button type="submit">Post</button>
    </form>
        <p class="error" v-if="error">Post not saved. {{error}}</p>
        <ul class="posts">
            <li v-for="post in postsToRender" class="posts-item">
                <h3>{{post.title}}</h3>
                <p>{{post.body}}</p>
            </li>
        </ul>
    </div>

</template>

<script>
import axios from 'axios';

export default {
    props: ['user', 'posts'],

    data() {
        return {
            error: '',
            postsToRender: this.posts,
            form: {
                title: '',
                body: '',
            }
        }
    },

    methods: {
        async createPost(){
            try {
                const res = await axios.post(`${this.user.id}/posts`, {title: this.form.title, body: this.form.body});
                if(res.statusText === 'OK'){
                    this.postsToRender = res.data;
                } else {
                    this.error = res.statusText;
                }
            }
            catch {
                throw new Error(this.error);
            }

        }
    },

    mounted() {
        // console.log(axios);
        // console.dir(this.user)
        // console.dir(this.posts)
    }
}
</script>
