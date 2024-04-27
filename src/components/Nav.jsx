import React from "react";
import { Link } from "react-router-dom";

export default function Nav() {
  return (
    <>
      <nav className=" p-4">
        <ul className="flex justify-center gap-6 space-x-4 text-sm font-nunito">
          <li className="hover:text-gray-800">
          <Link to={"/adana/10"}>ADANA</Link>
          </li>
          <li className="hover:text-gray-800">
            <Link to={"/iskenderun/12"}>İSKENDERUN</Link>
          </li>
          <li className="hover:text-gray-800">
          <Link to={"/dogumgunu/11"}>DOĞUM GÜNÜ</Link>
          </li>
        </ul>
      </nav>
      <img
        src="/pinhole_logo.png"
        alt=""
        className="mx-auto w-44 my-7"
      />
    </>
  );
}
