module.exports = {
  mode: "jit",
  purge: ["./block-templates/**/*.html", "./block-template-parts/**/*.html"],
  darkMode: false,
  theme: {
    extend: {},
    screens: {
      sm: "600px",
      md: "782px",
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
