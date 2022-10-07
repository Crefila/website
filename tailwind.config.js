module.exports = {
    content: [
        "./**/*.{php,html}",
		
		"./src/**/*.{js,jsx,ts,tsx}",
        "./*.{php,html,js}",
        "./home.php"
    ],
    theme: {
        minHeight: {
            'card': '19vh',
            'full': '100vh',
            '7/10': '70vh'
        },
        maxWidth: {
            '1/2': '50vw',
            '2/3': '66vw'
        },

        minWidth: {
            '1/2': '50vw',
            '2/3': '66vw'
        },

        extend: {
            fontFamily: {
                afasha: ['Splash', 'cursive'],
            },
            width: {
                '5%': '5%',
                '10%': '10%',
                '20%': '20%',
                '25%': '25%',
                '30%': '30%',
                '50%': '50%',
                '60%': '60%',
                '65%': '65%',
                '70%': '70%'
            }
        },
    },
    plugins: [],
}
