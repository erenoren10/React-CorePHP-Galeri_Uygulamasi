import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App.jsx";
import "./index.css";
import { BrowserRouter } from "react-router-dom";
import GalleryPage from "./pages/GalleryPage.jsx";
import "tw-elements-react/dist/css/tw-elements-react.min.css";
import "react-responsive-carousel/lib/styles/carousel.min.css";

ReactDOM.createRoot(document.getElementById("root")).render(
  <React.StrictMode>
    <BrowserRouter>
      <App />
    </BrowserRouter>
  </React.StrictMode>
);
