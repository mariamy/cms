<template>
	<div>
		<input type="file" name="image" @change='changeImage'>
		// <img :src="avatar" alt="" width="50px">
		<button @click="uploadImage">upload</button>
	</div>
</template>

<script>
import axios from 'axios'

export default{
	// props: ['user'],
	data(){
		return {
			avatar: null,
			// avatar: this.user.avatar,
			field: null
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

			let field = new FormData();			
			field.append('image', this.avatar);
			console.log(field.values())	
			this.field = field;
			console.log(this.avatar)	
			

			// console.log(this.field)

		},
		uploadImage()
		{
			axios.post('/upload', {'image': this.field})
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