<template>
	<div>
		<input type="file" name="image" @change='changeImage'>
		<img :src="avatar" alt="" width="50px">
		<button @click="uploadImage">upload</button>
	</div>
</template>

<script>
import axios from 'axios'

export default{
	props: ['user'],
	data(){
		return {
			avatar: this.user.avatar,
			form: null
		}
	},
	methods: {
		changeImage(e){
			let image = e.target.files[0];

			let reader = new FileReader();
			reader.readAsDataURL(image);
			reader.onload = e => {
				this.avatar = e.target.result;
			}

			// let form = new FormData();
			// form.append('image', image);
			// this.form = form;
			// console.log(this.form)

		},
		uploadImage()
		{
			axios.post('/upload', {'image': this.avatar})
			.then(res => {
				console.log(res)
			})
			.catch(error => {
				console.log(error.res)
			});
		}
	}
}
</script>