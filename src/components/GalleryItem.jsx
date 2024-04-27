import React from "react";
import { Link } from "react-router-dom";

export default function GalleryItem(props) {
  return (
    <div className="w-96 cursor-pointer relative">
      <Link to={`/gallery/${props.kategori}`}>
        <img
          src={props.src}
          alt="Gallery Photo"
          className="w-96 inline-block hover:brightness-50 duration-300"
        />
        <div className="flex flex-col text-left mt-3">
          <h3 className="text-lg">{props.title}</h3>
          <h5 className="text-xs text-gray-500">{props.count}</h5>
        </div>
      </Link>
    </div>
  );
}
