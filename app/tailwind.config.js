module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./resources/**/*.html",
      
  ],
  darkMode: 'class',	
  theme: {
    fontFamily:{
      'paci':['Pacifico']
    },
    container: {
      center: true,
      
    },
    extend: {},
  },
  plugins: [
      require("@tailwindcss/forms"),
  ],
}
