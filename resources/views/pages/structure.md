create thei sctructure

custom-page:
  bundled.blade.php
  page.blade.php
  page.mjs

1. Add page.mjs path to vite.config.js
2. Each bundled.blade.php is linked to the coresponding php Controller class for the page.
3. @push("pages.auth.scripts") has to have a correponding @stack.
4. each pages/your-page have to extend sub-layout and then sub-layout extends actuall layouts (it was made to allow components have the global scope of the body inside the sub-layouts, otherwise @push and @section withing the components won't be pushed reffer to this issue:
### Why I chose this structure?
When using `push` or `section` in laravel components, it is important to know that these two blade placeholders will not work unless component is used in the extended view using `extend` placeholder, this issue/"crack" can be addresed here,
[1. laracasts link](https://laracasts.com/discuss/channels/laravel/at-push-do-not-seams-to-work-on-blade-components)
[2. github link](https://github.com/laravel/framework/issues/13998#issuecomment-412208390)

5. If `.mjs` extension is used (which is, almost, in all of the cases) you have to use type="module" for the script.
6. Corresponding php Controller class for the page have to have return statement of pages.your-element.bundled & every bundled.blade.php file has to include page.blade.php and push page.mjs/.js