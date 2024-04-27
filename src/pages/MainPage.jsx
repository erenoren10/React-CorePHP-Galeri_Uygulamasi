import React,{ useState,useEffect } from "react";
import { Masonry } from "@mui/lab";
import GalleryItem from "../components/GalleryItem";
import data from "../data";
import axios from 'axios';





export default function MainPage() {
  const [sonuc,setSonuc] = useState([]);

  useEffect(() =>{
    fetch("http://localhost/gallery-project/reactpanel/connect.php")
    .then(response => response.json())
    .then(response => setSonuc(response));
  }, []);

  
  return (
    <div>
      <Masonry columns={{ xs: 1, md: 2, xl: 3 }} spacing={3}>
        {sonuc.map((item) => (
          <GalleryItem
            src={`/reactpanel/images/${item.resim}?w=248&fit=crop&auto=format`}
            srcSet={`reactpanel/images/${item.resim}?w=248&fit=crop&auto=format&dpr=2 2x`}
            alt={item.baslik}
            loading="lazy"
            key={item.resim}
            count={item.description}
            title={item.baslik}
            id={item.ID}
						kategori={item.kategori}
          />
        ))}
      </Masonry>
    </div>
  );
}
