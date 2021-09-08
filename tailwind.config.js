module.exports = {
  purge: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    minWidth: {
      "1/4": "250px",
    },
    extend: {
      screens: {
        // min-width screen:
        ts: "425px",
        tm: "500px",
        tl: "570px",
        // max-width screen:
        "ts-w-max": { max: "425px" },
        "tm-w-max": { max: "500px" },
        "tl-w-max": { max: "570px" },
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
