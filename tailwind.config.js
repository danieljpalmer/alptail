module.exports = {
  purge: ["source"],
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
