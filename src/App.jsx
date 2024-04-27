import React,{ useState,useEffect } from "react";
import reactLogo from "./assets/react.svg";
import viteLogo from "/vite.svg";
import "./App.css";
import Nav from "./components/Nav";
import GalleryItem from "./components/GalleryItem";
import { Masonry } from "@mui/lab";
import { ImageList, ImageListItem, responsiveFontSizes } from "@mui/material";
import { Routes, Route, Outlet, Link } from "react-router-dom";
import MainPage from "./pages/MainPage";
import AdanaPage from "./pages/AdanaPage";
import DogumgunuPage from "./pages/DogumgunuPage";
import IskenderunPage from "./pages/IskenderunPage";
import GalleryPage from "./pages/GalleryPage";
import axios from 'axios';


function App() {
  return (
    <Routes>
      <Route path="/" element={<Layout />}>
        <Route index element={<AdanaPage />} />
        <Route path="/gallery/:slug" element={<GalleryPage />} />
        <Route path="/adana/10" element={<AdanaPage />} />
        <Route path="/dogumgunu/11" element={<DogumgunuPage />} />
        <Route path="/iskenderun/12" element={<IskenderunPage />} />
      </Route>
    </Routes>
  );
}

function Layout() {
  return (
    <div>
      <Nav />
      <Outlet />
    </div>
  );
}

export default App;
