import React, { useState, useEffect } from "react";
import data from "../data";
import { Masonry } from "@mui/lab";
import GalleryPageItem from "../components/GalleryPageItem";
import { TECollapse } from "tw-elements-react";
import { Carousel } from "react-responsive-carousel";
import {
  FaChevronRight,
  FaChevronLeft,
  FaChevronUp,
  FaChevronDown,
} from "react-icons/fa6";

export default function GalleryPage() {
  const [isOpen, setIsOpen] = useState(false);
  const [currentImage, setCurrentImage] = useState({});
  const [isToggleInfo, setIsToggleInfo] = useState(false);
  const [sonuc, setSonuc] = useState([]);

function previousPhoto() {
  const currentId = currentImage.ID;
  const previousIndex = sonuc.findIndex((img) => img.ID === currentId) - 1;
  
  if (previousIndex >= 0) {
    setCurrentImage(sonuc[previousIndex]);
  } else {
    setCurrentImage(sonuc[sonuc.length - 1]);
  }
}

function nextPhoto() {
  const currentId = currentImage.ID;
  const nextIndex = sonuc.findIndex((img) => img.ID === currentId) + 1;
  
  if (nextIndex < sonuc.length) {
    setCurrentImage(sonuc[nextIndex]);
  } else {
    setCurrentImage(sonuc[0]);
  }
}

  function toggleInfo() {
    setIsToggleInfo(!isToggleInfo);
    //setBottomOffset(2);
  }

  useEffect(() => {
    const categoryId= window.location.href
    .split("gallery")[1]
    .split("/")[1];

    if(categoryId==10)
    {
      fetch("http://localhost/gallery-project/reactpanel/connectadana.php")
      .then((response) => response.json())
      .then((response) => {
        setSonuc(response);
      })
      .catch((error)=> {
        console.error("Fetch error:", error);
      });
    }
      else if(categoryId==11)
      {
        fetch("http://localhost/gallery-project/reactpanel/connectdogumgunu.php")
        .then((response) => response.json())
        .then((response) => {
          setSonuc(response);
        })
        .catch((error)=> {
          console.error("Fetch error:", error);
        });
        }
        else if(categoryId==12)
        {
          fetch("http://localhost/gallery-project/reactpanel/connectiskenderun.php")
          .then((response) => response.json())
          .then((response) => {
            setSonuc(response);
          })
          .catch((error)=> {
            console.error("Fetch error:", error);
          });
        }

    
    fetch("http://localhost/gallery-project/reactpanel/connect.php")
      .then((response) => response.json())
      .then((response) => {
        const categoryId = window.location.href
          .split("gallery")[1]
          .split("/")[1];
        setSonuc(response.filter((item) => item.kategori == categoryId));
      });
  }, []);

  console.log(sonuc);

  function handleCarousel(imgId) {
    setIsOpen(true);
    document.body.style.overflowY = isOpen ? "visible" : "hidden";
    const image = sonuc.find((img) => img.ID === imgId);
    if (image) {
      const kategoriId = image.kategori;
      console.log("Kategori ID:", kategoriId);
    } else {
      console.log("Resim bulunamadı.");
    }
    setCurrentImage(image);
  }

  return (
    <>
      <div className=" w-full min-h-screen overscroll-none">
        <div className="my-6">
          <h1 className="mt-4 text-xl"></h1>
          <p className="text-xs text-gray-500 my-2"></p>
        </div>
        <Masonry columns={{ xs: 1, md: 2, xl: 3 }} spacing={3}>
          {sonuc.map((item) => (
            <div key={item.resim}>
              <div key={item.resim} onClick={() => handleCarousel(item.ID)}>
              <GalleryPageItem
                src={`../reactpanel/images/${item.resim}?w=248&fit=crop&auto=format`}
                srcSet={`../reactpanel/images/${item.resim}?w=248&fit=crop&auto=format&dpr=2 2x`}
                alt={item.baslik}
                loading="lazy"
                id={item.ID}
                width={96}
              />
              </div>
            </div>
          ))}
        </Masonry>
      </div>
      <div
        className="fixed top-0 left-0 right-0 bottom-0   h-screen w-full bg-black"
        hidden={!isOpen}
      >
        <div className="relative border-2 border-black h-screen">
          <div className="flex justify-between my-8 mx-8">
            <p className=" text-gray-300">
              {sonuc.findIndex((img) => img.ID === currentImage.ID) + 1} / {sonuc.length}
            </p>
            <p
              onClick={() => {
                setIsOpen(false);
                setIsToggleInfo(false);
                document.body.style.overflowY = isOpen ? "visible" : "auto";
              }}
              className="text-gray-300 cursor-pointer "
            >
              X
            </p>
          </div>
          <div className="flex flex-row justify-between items-center mx-8 ">
            <p onClick={previousPhoto} className="text-white">
              <FaChevronLeft />
            </p>
            <div className=" ">
              <img
                src={`../reactpanel/images/${currentImage.resim}`}
                className="max-h-[35rem]"
              />
            </div>
            <p onClick={nextPhoto} className="text-white">
              <FaChevronRight />
            </p>
          </div>
          <div className=" flex justify-center w-full">
            <div
              className={`absolute bg-slate-200  ${
                !isToggleInfo ? "bottom-0" : "bottom-[4.5rem]"
              } w-12 h-6 mx-auto flex justify-center items-end rounded-t-full`}
              onClick={toggleInfo}
            >
              {!isToggleInfo ? <FaChevronUp /> : <FaChevronDown />}
            </div>
            <TECollapse
              show={isToggleInfo}
              className={`bg-slate-200 rounded-none absolute bottom-0 w-full flex justify-between p-9 items-center `}
            >
              <div>
                <p>Splash</p>
              </div>
              <div className="max-xl:hidden  xl:flex gap-5 items-center ml-12 ">
                <p onClick={previousPhoto} className="text-gray-500">
                  <FaChevronLeft />
                </p>
                {sonuc.map((item) => (
                  <div key={item.resim} onClick={() => handleCarousel(item.ID)}>
                    <GalleryPageItem
                      src={`../reactpanel/images/${item.resim}?w=248&fit=crop&auto=format`}
                      srcSet={`../reactpanel/images/${item.resim}?w=248&fit=crop&auto=format&dpr=2 2x`}
                      alt={item.title}
                      loading="lazy"
                      id={item.ID}
                      width={14}
                      insideZoom={true}
                    />
                  </div>
                ))}
                <p onClick={nextPhoto} className="text-gray-500">
                  <FaChevronRight />
                </p>
              </div>
              <div>
                <p>Lorem ipsum dolor sit amet,</p>
              </div>
            </TECollapse>
          </div>
        </div>
      </div>
    </>
  );
}
