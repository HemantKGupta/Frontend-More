module.exports = function(grunt) {
grunt.loadNpmTasks('grunt-browser-sync');
grunt.loadNpmTasks('grunt-php');
grunt.loadNpmTasks('grunt-contrib-watch');

grunt.initConfig({
	watch: {
		php: {
			files: ['Apis/**/*.php']
		}
	},
	browserSync: {
		dev: {
			bsFiles: {
				src: 'Apis/**/*.php'
			},
			options: {
				proxy: '127.0.0.1:8010', //our PHP server
				port: 9070, // our new port
				open: true,
				watchTask: true
			}
		}
	},
	php: {
		dev: {
			options: {
				port: 8010,
				base: 'Apis'
			}
		}
	}
});

grunt.registerTask('default', ['php', 'browserSync', 'watch']);
};