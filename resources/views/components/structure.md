
## Structure within
Full Structure
    - `compiled.blade.php` - is a boundle of blade view, script, style and php variables.
    - `element.blade.php`  - blade view
    - `element.css`        - css
    - `element.js`         - js
    
[comment]: <> (_Structure can vary from component to component_)

## Structure without
1. Corresponding layout file has `@stack('scripts')` and `@stack('components.styles')` to push each component's script/style.
2. Folder `resources/views/partials` should have `@stack('scripts')` and `@stack('components.styles')` to push each component's script/style as well.
3. Every `script.js` should not have any `addEventListener` on DOM lifecycle, because if `partials` are used - script won't be loaded.
4. Every new script/style file has explicit directory in `vite.config.js` file.
5. If javascript changes made in production, run `npm run build`.