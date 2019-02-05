import {task, src, dest, watch, series} from 'gulp'
import uglify from 'gulp-uglify'
import sass from 'gulp-sass'
import autoprefixer from 'gulp-autoprefixer'
import sourcemaps from 'gulp-sourcemaps'
import imagemin from 'gulp-imagemin'
import pngquant from 'imagemin-pngquant'
import browserSync from 'browser-sync'
import babel from 'gulp-babel'
import concat from 'gulp-concat'

browserSync.create()

const theme_name = "ferraz_lab05"
const theme_base_path = "./wp-content/themes"

task('imagemin', ()=> {
    return src(`${theme_base_path}/${theme_name}/images/*`)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(dest(`${theme_base_path}/${theme_name}/images`));
});


task('sass', ()=> {
  return src(`${theme_base_path}/${theme_name}/sass/**/*.scss`)
    .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(sourcemaps.write('./'))
    .pipe(dest(`${theme_base_path}/${theme_name}/`))
    .pipe(browserSync.stream());
});


task('uglify', ()=> {
    return src(`${theme_base_path}/${theme_name}/lib/**/*.js`)
      .pipe(sourcemaps.init())
      .pipe(concat('bundle.js'))
      .pipe(babel({
          presets: ["es2015"]
      }))
      
      .pipe(uglify({}))
      .pipe(sourcemaps.write('.'))
      .pipe(dest(`${theme_base_path}/${theme_name}/js`))
  });


task('watch', ()=>{
    browserSync.init({
        open: "external",
        proxy: "localhost/wordpress_theme",
        port: 80
    })

    console.log(`Watch files on : ${theme_base_path}/${theme_name}`);
    watch(`${theme_base_path}/${theme_name}/sass/**/*.scss`, series('sass'));
    watch(`${theme_base_path}/${theme_name}/lib/*.js`, series('uglify'));
    watch([`${theme_base_path}/${theme_name}/style.css`, `${theme_base_path}/${theme_name}/**/*.php`, `${theme_base_path}/${theme_name}/js/*.js`, `${theme_base_path}/${theme_name}/template-parts/**/*.php`]).on('change', browserSync.reload);;
});