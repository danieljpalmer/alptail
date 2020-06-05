module.exports = {
  purge: ["./source/**/*.blade.php", "./source/**/*.scss"],
  theme: {
    extend: {
      colors: {
        primary: "#0A47E2",
        secondary: "#FCD925",
      },
    },
  },
  variants: {
    textColor: ["responsive", "hover", "focus", "focus-within"],
  },
  plugins: [],
};
