module.exports = {
    content: [
        './**/*.blade.php',
        './**/*.mjs',
        './**/*.html',
    ],
    darkMode: 'class',
    theme: {
        fontFamily: {
            'headings': ['Montserrat', 'sans-serif'],
            'body': ['sans-serif'],
          },
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#d69051',
                    light: "#d69051",
                    dark: "#d69051",
                },
                secondary: {
                    DEFAULT: '#5b6df9',
                    dark: "#3d44ee",
                    light: "#a0baff",
                },
            }
        },
    },
}
