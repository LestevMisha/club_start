
## General Structure

/views
│
├── /pages
│
├── /partials
│
├── /layouts
│
├── /sublayouts
│
└── /components
    └── /custom-component-name
        ├── `compiled.blade.php`   # Bundle of Blade view, script, style, and PHP variables
        ├── `element.blade.php`    # Blade view for the component
        ├── `element.css`          # CSS specific to the component
        └── `element.js`           # JavaScript specific to the component



[comment]: <> (Structure varies, some components may have only 1 file, some may have 4 files etc)
[comment]: <> (`pushOnce` is used - because page might have the same component multiple times)



## Outside Structure
1. Corresponding layout file has to have,
    (a) `@stack('components.scripts')` in the bottom of body tag
    (b) `@stack('components.styles')` in the bottom of header tag
It is used to push each component's script/style if exist into proper location.

2. Folder `resources/views/partials` should have their own
    (a) `@stack('components.scripts')`
    (b) `@stack('components.styles')` 
It is used to push each component's script/style if exist when they are dynamically observed from the request.

3. Every component's `element.js` script should not have any `addEventListener` on DOM lifecycle, because if `partials` are being used - script won't be loaded and you will get a "crack".

4. Every new `element.js` script and `element.css` style files have to have explicit directory in `vite.config.js` file, to register them in the flow (since we are using `Vite::asset('...')`).

5. If any component's `element.js` script or `element.css` style are changed, and changed in production, tou have to run `npm run build` to commit new changes.

6. All components should be used within the page that uses `@extended`, otherwise refer to this issue `### Why I chose this structure?`.


### If something doesn't work
If JS doesn't work check that for `partials` you use `resources/javascript/laravel/helpers.js`.
If CSS doesn't appear, check `### Why I chose this structure?`.



### Why I chose this structure?
When using `push` or `section` in laravel components, it is important to know that these two blade placeholders will not work unless component is used in the extended view using `extend` placeholder, this issue/"crack" can be addresed here,
[1. laracasts link](https://laracasts.com/discuss/channels/laravel/at-push-do-not-seams-to-work-on-blade-components)
[2. github link](https://github.com/laravel/framework/issues/13998#issuecomment-412208390)
