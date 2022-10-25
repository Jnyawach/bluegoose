module.exports = {
	content: [
		'./resources/**/*.blade.php',
		'./resources/**/*.ts',
		'./resources/**/*.vue',
	],
	theme: {
		extend: {},
        /*colors:{
            'blue':{
                900:'#011F4B',
                800:'#03396C',
                700:'#005B96',
                600:'#6497B1',
                500:'#B3CDE0'
            },

            'gray': {
                50: '#f9fafb',
                100:'#f3f4f6',
                200:'#e5e7eb',
                300:'#d1d5db',
                400:'#9ca3af',
                500:'#6b7280',
                600:'#4b5563',
                700:'#374151',
                800:'#1f2937',
                900:'#111827'
            },
            'white':'#ffffff'
        },*/
        fontFamily:{
         'spartan':[
             '"League Spartan"', 'sans-serif'
         ]
        }
	},
	plugins: [],
}
