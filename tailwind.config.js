const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
        screens: {
            'sm': '400px',
            'md': '500px',
            'lg': '768px',
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            blueGray: colors.blueGray,
            gray: colors.gray,
            red: colors.red,
            orange: colors.orange,
            yellow: colors.yellow,
            lime: colors.lime,
            green: colors.green,
            teal: colors.teal,
            cyan: colors.cyan,
            blue: colors.sky,
            indigo: colors.violet,
            pink: colors.fuchsia,
            salmon: colors.rose,
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
