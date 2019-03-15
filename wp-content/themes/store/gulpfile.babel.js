import { src, dest, watch, series, parallel} from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import browserSync from 'browser-sync';
import webpack from 'webpack-stream';

const server = browserSync.create();

const PRODUCTION = yargs.argv.prod;

export const styles = () => {
	return src('src/scss/style.scss')
		.pipe(gulpif(!PRODUCTION, sourcemaps.init()))
		.pipe(sass().on('error', sass.logError))
		.pipe(gulpif(PRODUCTION, postcss([autoprefixer])))
		.pipe(gulpif(PRODUCTION, cleanCss({compatibility: 'ie8'})))
		.pipe(gulpif(!PRODUCTION, sourcemaps.write()))
		.pipe(dest('dist/css'))
		.pipe(server.stream());
}

export const scripts = () => {
	return src('src/js/main.js')
		.pipe(webpack({
			module: {
				rules: [
					{
						test: /\.js$/,
						use: {
							loader: 'babel-loader',
							options: {
								presets: []
							}
						}
					}
				]
			},
			mode: PRODUCTION ? 'production' : 'development',
			devtool: !PRODUCTION ? 'inline-source-map' : false,
			output: {
				filename: 'bundle.js'
			},
		}))
		.pipe(dest('dist/js'));
}

export const serve = done => {
	server.init({
		proxy: 'wp.test/'
	});
	done();
};

export const reload = done => {
	server.reload();
	done();
}


export const watchForChanges = () => {
	watch('src/scss/**/*.scss', styles);
	watch('**/*.php', reload);
	watch('src/js/**/*.js', series(scripts, reload));
}
export default styles

export const dev = series(parallel(styles, serve, scripts), watchForChanges);