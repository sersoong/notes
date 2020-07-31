<template>
	<div id="vditor" />
</template>

<script>
import Vditor from 'vditor'
export default {
	name: 'Vditor',

	props: {
		value: {
			type: String,
			required: true,
		},
	},

	data() {
		return {
			show: false,
		}
	},
	mounted() {
		this.initialize()
	},
	methods: {
		initialize() {
			const that = this
			const options = {
				width: '100%',
				mode: 'sv',
				preview: {
					delay: 1000,
					show: true,
				},
				toolbarConfig: {
					pin: true,
				},
				after() {
					that.loadpage()
				},
				input(md) {
					that.$emit('input', md)
				},
			}
			this.vditor = new Vditor('vditor', options)
			// this.vditor.setValue(this.value, true)
			// this.vditor.setTheme('dark', 'dark')
		},
		loadpage() {
			this.vditor.setValue(this.value)
		},
	},
}
</script>

<style lang="scss">
@import '~vditor/src/assets/scss/index.scss';

.vditor-reset em {
	font-style: italic;
}

.vditor-reset a {
	outline: 0;
	text-decoration: none;
	color: #4285f4;
}
</style>
