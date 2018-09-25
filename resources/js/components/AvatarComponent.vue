<template>
    <div>
        <vue-avatar
          :width=230
          :height=230
          ref="vueavatar"
          @vue-avatar-editor:image-ready="onImageReady"
          :image="img"
        >
        </vue-avatar>
        <br>
        <vue-avatar-scale
          ref="vueavatarscale"
          @vue-avatar-editor-scale:change-scale="onChangeScale"
          :width=280
          :min=1
          :max=3
          :step=0.02
        >
        </vue-avatar-scale>
        <br>
        <div v-on:click="saveClicked" class="btn btn-success mt-3">Save</div>
    </div>
</template>

<script>
import Vue from 'vue'
import axios from 'axios'
import VueAvatar from './VueAvatar.vue'
import VueAvatarScale from './VueAvatarScale.vue'

    export default {
      props: ['user'],
    	data(){
    		return {
    			img: this.user.avatar
    		}
    	},
        components: {
            VueAvatar,
            VueAvatarScale
          },
          methods:{
            onChangeScale (scale) {
                this.$refs.vueavatar.changeScale(scale)
            },
            saveClicked(){
              var img = this.$refs.vueavatar.getImageScaled()
              this.img = img.toDataURL()
               //console.log(this.img)
              axios.post('/uploadavatar', {'avatar': this.img })
              .then(data => {
                console.log(data)
              })
            },
            onImageReady(scale){
              var img = this.$refs.vueavatarscale.setScale(scale)
            }
          }
    }
</script>