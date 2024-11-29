import globals from "globals";
import pluginJs from "@eslint/js";

export default [
    {
        ...pluginJs.configs.recommended,  // Merge recommended rules here
        files: ["resources/**/*.mjs"],
        languageOptions: {
            globals: globals.browser  // Correct placement for globals
        },
        rules: {
            "semi": ["warn", "always"], // Enforce the use of semicolons at the end of statements.
            "quotes": ["warn", "double"], // Enforce double quotes
            "eqeqeq": ["warn", "always"], // Enforce strict equality (=== and !==) instead of loose equality (== and !=).
            "no-unused-vars": ["warn", { "args": "none", "ignoreRestSiblings": true }], // Disallow unused variables
            "prefer-const": "warn", // Prefer const declarations for variables that are never reassigned.
            "prefer-template": "warn", // Enforce template literals instead of string concatenation.
            "indent": ["warn", 4],
            "no-shadow": "warn", // Prevent variable declarations from shadowing variables in the outer scope.
            "curly": ["warn", "all"], // Enforce consistent use of curly braces for control structures (if, else, etc.).
            "linebreak-style": ["warn", "unix"], // Enforce consistent linebreak style for cross-platform compatibility.
            "no-undef": "warn", // Disallow the use of undeclared variables.
            "no-unsafe-finally": "warn", // Warn on unsafe code in finally blocks.
            "no-var": "warn", // Disallow the use of var, prefer let or const.
            "prefer-arrow-callback": "warn", // Prefer using arrow functions for callbacks.
            "prefer-rest-params": "warn", // Prefer the rest parameters (...args) over arguments.
            "no-duplicate-imports": "warn",
        },
    }
];
