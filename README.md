
### Project's Architecture

#### Methods Types

1. `__` - two underscores before the name of the method indicate that method is being used in both `/resources` (blade) and `/app`.
2. `_` - one underscore indicates that it's used only in `blade`.
3. If no underscores are present it's used only within the `app`.

* The global helper functions, such as `request()`, `auth()` and more should not be used within the methods of type 3.
* <u>Dependency Injection</u> (DI) must be used throughout. Constructor Injection is prevelent over the method injection. The method injection is usually used in case of `\Illuminate\Http\Request`. The use of app helper in `/app` is highly discoureged and must be used in blade solely.

#### Components

Components must be formed whithin `/resources/views/components`. Each component should have the folder that indicates its name. Within the component at least 2 files must be present: `compiled.blade.php` and `element.blade.php`. Later, more files can be added, such as `element.mjs`, `element.css` and more. Due to the structure of `compiled.blade.php` javascript and styles must be included in the `vite.config.js` file. The assets must then be ran for development (`npm run dev`) or built for production (`npm run build`).

