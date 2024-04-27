/** @type {import('tailwindcss').Config} */

import twelements from "tw-elements-react/dist/plugin.cjs";
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
    "./node_modules/tw-elements-react/dist/js/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        "nunito": ['"Nunito Sans"'],
      },
    },
  },
  plugins: [twelements],
};
