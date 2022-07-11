<template>
    <div>
<!--    <h3 class="vue-h3">The user is {{user}}</h3>-->


    <h1>{{user.name}}</h1>
    <p class="phone">phone: {{user.phone}}</p>
    <h2>Add new post</h2>
    <form @submit.prevent="submit" method="post" class="post-form">
<!--          action="{{ route('store.post', ['user' => $user]) }}"-->

<!--        @method('post')-->
<!--        @csrf-->
        <label for="title">
            Title
        </label>
        <input type="text" name="title"/>
        <label for="content">
            Content
        </label>
        <textarea name="body" rows="14" cols="50">
                    </textarea>
        <button type="submit">Post</button>
    </form>
        <ul class="posts">
            <li v-for="post in posts" class="posts-item">
                <h3>{{post.title}}</h3>
                <p>{{post.body}}</p>
            </li>
        </ul>
    </div>

</template>

<script>
// import Form from 'vform';

export default {
    props: ['user', 'posts'],

    data() {
        return {
            form: {
                title: '',
                body: '',
            }
        }
    },

    // data: () => ({
    //     form: new Form({
    //         title: '',
    //         body: ''
    //     })
    // }),

    methods: {
        submit(){
            console.log(`form submitted. title is: ${this.form.title} , body is: ${this.form.body}`)
        }
    },

    mounted() {
        // console.dir(this.user)
        // console.dir(this.posts)
    }
}
</script>
