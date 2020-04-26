<template>
	<div>
		<p>Значение передается через Counter {{counterChild}}</p>
		<button @click='clickCounter'>кнопка Counter</button>
	</div>
</template>
<script type="text/javascript">
	export default{
		data(){
			return{
				counterChild:this.counter
			}
		},
		props:{
			counter:Number
		},
		methods:{
			clickCounter(){
				this.counterChild++;
				this.$emit('clickUp',this.counterChild)
			}
		}
	}
</script>