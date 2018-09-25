<template>
	<input
          v-model="scale"
          type="range"
          :min="min"
          :max="max"
          :step="step"
          :style="{ width:width +'px'}"
		 class='slider'
        />
</template>
<script >
	export default{
		props:{
			width:{
				type:Number,
				default:200
			},
			min:{
				type:Number,
				default:1
			},
			max:{
				type:Number,
				default:2
			},
			step:{
				type:Number,
				default:0.01
			},

		},
		methods:{
			setScale:function(scale){
				this.scale = scale
			}
		},
		data:function(){
			return {
				scale:1
			}
		},
		watch:{
			scale:function(){
				this.$emit('vue-avatar-editor-scale:change-scale', this.scale)
			}
		}
	}
</script>

<style>
.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 8px;
    border-radius: 5px;
    background: rgba(0,0,0,.2);
    outline: none;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: #38c172;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    -moz-appearance: none;
    appearance: none;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: #38c172;
    cursor: pointer;
}
</style>