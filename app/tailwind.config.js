module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./resources/**/*.html",
      
  ],
  darkMode: 'class',	
  theme: {
    container: {
      center: true,
      
    },
    extend: {},
  },
  plugins: [
      require("@tailwindcss/forms"),
  ],
}
