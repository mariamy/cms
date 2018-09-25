<template>
    <div>
        <vue-avatar
          :width=250
          :height=200
          :border=1
          ref="vueavatar"
          @vue-avatar-editor:image-ready="onImageReady"
          :image="postimage"
        >
        </vue-avatar>
    </div>
</template>

<script>
import Vue from 'vue'
import axios from 'axios'
import VueAvatar from './VueAvatar.vue'
import VueAvatarScale from './VueAvatarScale.vue'

    export default {
      props: ['postimage'],
    	data(){
    		return {
    			img: this.postimage
    		}
    	},
        components: {
            VueAvatar,
            VueAvatarScale
          }
    }
</script>