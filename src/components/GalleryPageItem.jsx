import React from "react";
import { Link } from "react-router-dom";

export default function GalleryPageItem(props) {
  return (
    <div className={`w-${props.width} relative`}>
      <Link to={`/gallery/${props.id}`} className="cursor-zoom-in">
        <img
          src={props.src}
          alt={props.src}
          className={`w-${props.width} ${
            props.insideZoom && "h-14"
          }  inline-block hover:brightness-50 duration-300`}
        />
      </Link>
    </div>
  );
}
